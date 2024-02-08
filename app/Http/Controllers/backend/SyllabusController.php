<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Syllabus;

class SyllabusController extends Controller
{

    public function create(Request $request) {

        $validator = Validator::make($request->all(), [
            'title_no' => 'required',
            'title' => 'required',
            'description' => 'required',
            'course_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }     

        $syllabus = Syllabus::create([
            'title_no' => $request->input('title_no'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'course_id' => $request->input('course_id'),
        ]);

        $response = [
            'status' => true,
            'notification' => 'Syllabus added successfully!',
        ];
        
        return response()->json($response);
    }     

    public function edit($id) {
        $syllabus = Syllabus::find($id);
        return view('backend.pages.course.section.syllabus.edit', compact('syllabus'));
    }  
    
    public function delete($id) {
        
        $syllabus = Syllabus::find($id);
        if (!$syllabus) {
            $response = [
                'status' => false,
                'notification' => 'Record not found.!',
            ];
            return response()->json($response);
        }
        $syllabus->delete();

        $response = [
            'status' => true,
            'notification' => 'Syllabus deleted successfully!',
        ];

        return response()->json($response);
    }  
    
    public function status($id, $status) { 
        $syllabus = Syllabus::find($id);
        $syllabus->status = $status;
        $syllabus->save();
    
        return redirect()->back()->with('success', 'Status Change successfully!');
    }  
    
    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'title_no' => 'required',
            'title' => 'required',
            'description' => 'required',
            'course_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $id = $request->input('id');
        $syllabus = Syllabus::find($id);

        $syllabus->title_no = $request->input('title_no');
        $syllabus->title = $request->input('title');
        $syllabus->description = $request->input('description');

        $syllabus->save();

        $response = [
            'status' => true,
            'notification' => 'Syllabus updated successfully!',
        ];

        return response()->json($response);
    }   
}
