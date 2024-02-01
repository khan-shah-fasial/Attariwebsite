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
    }

    public function add() {
        $course = Course::where('status', 1)->get(['id', 'name']);
        return view('backend.pages.cms.add', compact('course'));
    }  
    
    public function create(Request $request) {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'menu_title' => 'required',
            'breadcrumb_title' => 'required',
            'slug' => 'required|unique:cms',
            'description' => 'required',
            'rating' => 'required',
            'total_review' => 'required',
            'course_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
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
            'rating' => $request->input('rating'),
            'total_review' => $request->input('total_review'),
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

        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:practice_areas,slug,'. $request->input('id'),
            'title' => 'required',
            'breadcrumb_title' => 'required',
            'description' => 'required',
            'menu_title' => 'required',
            'rating' => 'required',
            'total_review' => 'required',
            'course_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $id = $request->input('id');
        $cms = Cms::find($id);
    


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
        $cms->rating = $request->input('rating');
        $cms->total_review = $request->input('total_review');

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
