<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CmsController extends Controller
{
    public function index() {
        $cms = Cms::orderBy('id', 'desc')->get();
        return view('backend.pages.cms.index', compact('cms'));
        //return view('backend.pages.cms.index');
    }

    public function getData(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $rowperpage = $request->get('length');

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column'];
        $columnName = $columnName_arr[$columnIndex]['data'];
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value'];

        //total records
        $totalRecords = Cms::select('count(*) as allcount')->count();

        //total records with search filter
        $totalRecordswithFilter = Cms::select('count(*) as allcount')
                                ->where('title','like','%'.$searchValue.'%')
                                ->count();

        //Fetch Records
        $records = Cms::orderby($columnName,$columnSortOrder)->where('cms.title','like','%'.$searchValue.'%')
                    ->select('cms.*')->skip($start)->take($rowperpage)->get();

        $data_arr = array();

        foreach($records as $row){
            $data['id'] = $row->id;
            $data['title'] = $row->title;
            $data['slug'] = $row->slug;
            $data['zone'] = ($row->zone == 1) ? 'City' : (($row->zone == 2) ? 'Country' : 'Main');
            $data['status'] = $row->status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
            $data['created_at'] = $row->created_at->format('Y-m-d H:i:s');

            //----
            $data_arr[] = $data;

        }

        $json_data = array(
            "draw"            => intval($draw),
            "recordsTotal"    => $totalRecords,
            "recordsFiltered" => $totalRecordswithFilter,
            "data"            => $data_arr,
        );

        echo json_encode($json_data);
        exit;

        //return response()->json($json_data);
    }

    public function add() {
        $course = Course::where('status', 1)->get(['id', 'name']);
        return view('backend.pages.cms.add', compact('course'));
    }  
    
    public function create(Request $request) {
        // Validate form data

        if ($request->zone == 0) {

            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'menu_title' => 'required',
                'breadcrumb_title' => 'required',
                'slug' => 'required|unique:cms',
                'description' => 'required',
            
                'course_id' => 'required',
            ]);
            
        } else {

            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'breadcrumb_title' => 'required',
                'slug' => 'required|unique:cms',
                'description' => 'required',
                
                'zone' => 'required',
                'alias' => 'required',

                'course_id' => 'required',
            ]);
            
        }


        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }
        
        $check = Cms::where('course_id', $request->input('course_id'))->where('zone', 0)->count();

        if ($check > 0) {
            return response()->json([
                'status' => false,
                'notification' => 'Zone Url Already exists'
            ], 200);
        }
    
        $slug = customSlug($request->input('slug'));


        // Extract and handle replace_key data
        $replace_key = $request->input('replace_key');
        $replace_key_word = $request->input('replace_key_word');
    
        if (!empty($replace_key[0])) {
            $replace_keys = [];
            for ($j = 0; $j < count($replace_key); $j++) {
                $replace_keys[] = [
                    $replace_key[$j] => $replace_key_word[$j],
                ];
            }
            $data['replace_key'] = json_encode($replace_keys);
        } else {
            $data['replace_key'] = '[]';
        }

        unset($data['replace_key_word']);
    
        // Create the Cms record with 'Cms_category_ids' included
        Cms::create([
            'course_id' => $request->input('course_id'),
            'title' => $request->input('title'),
            'menu_title' => $request->input('menu_title'),
            'breadcrumb_title' => $request->input('breadcrumb_title'),
            'slug' => $slug,
            'description' => $request->input('description'),
            'replace_keyword' => $data['replace_key'],

            'alias' => $request->input('alias'),
            'zone' => $request->input('zone'),
        ]);
    
        $response = [
            'status' => true,
            'notification' => 'CMS added successfully!',
        ];
    
        return response()->json($response);
    }   

    public function edit($id) {
        $cms = Cms::find($id);
        $course = Course::where('status', 1)->get(['id', 'name']);
        return view('backend.pages.cms.edit', compact('cms', 'course'));
    }
    
    
    public function delete($id) {
        
        $cms = Cms::find($id);
        $cms->delete();

        $response = [
            'status' => true,
            'notification' => 'CMS deleted successfully!',
        ];

        return response()->json($response);
    }  
    
    public function status($id, $status) { 
        $cms = Cms::find($id);
        $cms->status = $status;
        $cms->save();
    
        return redirect(route('cms.index'))->with('success', 'Status changed successfully!');
    }  
    
    public function update(Request $request) {

        if ($request->zone == 0) {

            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'menu_title' => 'required',
                'breadcrumb_title' => 'required',
                'slug' => 'required',
                'description' => 'required',
            
                'course_id' => 'required',
            ]);
            
        } else {

            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'breadcrumb_title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                
                'zone' => 'required',
                'alias' => 'required',

                'course_id' => 'required',
            ]);
            
        }

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $id = $request->input('id');
        $cms = Cms::find($id);
        

        if($request->input('zone') == 0){
            $check = Cms::where('course_id', $request->input('course_id'))->where('zone',  $request->input('zone'))->count();

            if ($check > 0) {
                return response()->json([
                    'status' => false,
                    'notification' => 'Zone Url Already exists'
                ], 200);
            }
        }
            
        $slug = customSlug($request->input('slug'));


        // Extract and handle replace_key data
        $replace_key = $request->input('replace_key');
        $replace_key_word = $request->input('replace_key_word');
    
        if (!empty($replace_key[0])) {
            $replace_keys = [];
            for ($j = 0; $j < count($replace_key); $j++) {
                $replace_keys[] = [
                    $replace_key[$j] => $replace_key_word[$j],
                ];
            }
            $data['replace_key'] = json_encode($replace_keys);
        } else {
            $data['replace_key'] = '[]';
        }

        unset($data['replace_key_word']);


        $cms->course_id = $request->input('course_id');
        $cms->title = $request->input('title');
        $cms->menu_title = $request->input('menu_title');
        $cms->breadcrumb_title = $request->input('breadcrumb_title');
        $cms->slug = $slug;
        $cms->description = $request->input('description');
        $cms->replace_keyword = $data['replace_key'];


        $cms->alias = $request->input('alias');
        $cms->zone = $request->input('zone');

        $cms->save();

        $response = [
            'status' => true,
            'notification' => 'CMS updated successfully!',
        ];

        return response()->json($response);
    }   
}
