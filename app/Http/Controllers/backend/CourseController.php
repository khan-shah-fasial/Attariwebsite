<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index() {
        $course = Course::orderBy('id', 'desc')->get();
        return view('backend.pages.course.index', compact('course'));
    }

    public function add() {
        //$course = Course::where('status', 1)->get();
        //return view('backend.pages.course.add', compact('course'));
        return view('backend.pages.course.add');
    }  
    
    public function create(Request $request) {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'description' => 'required',
            'thumbnail' => 'image',
            'course_overview' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }        
    
        // Upload image
        
        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('assets/image/course', 'public');
        } else {
            $imagePath = null;
        }
        
        // Create the Course record with 'Course_category_ids' included
        Course::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'thumbnail' => $imagePath,
            'course_overview' => $request->input('course_overview'),
        ]);
    
        $response = [
            'status' => true,
            'notification' => 'Course added successfully!',
        ];
    
        return response()->json($response);
    }   

    public function edit($id) {
        $course = Course::find($id);
        //$allcourse = Course::where('status', 1)->get();
        //return view('backend.pages.course.edit', compact('course', 'allcourse'));
        return view('backend.pages.course.edit', compact('course'));
    }
        
    public function delete($id) {
        
        $course = Course::find($id);
        $course->delete();

        $response = [
            'status' => true,
            'notification' => 'Course deleted successfully!',
        ];

        return response()->json($response);
    }  
    
    public function status($id, $status) { 
        $course = Course::find($id);
        $course->status = $status;
        $course->save();
    
        return redirect(route('course.index'))->with('success', 'Status changed successfully!');
    }  
    
    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'description' => 'required',
            'thumbnail' => 'image',
            'course_overview' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $id = $request->input('id');
        $course = Course::find($id);
    
        if ($request->hasFile('thumbnail')) {
            // Update the image if a new one is uploaded
            $imagePath = $request->file('thumbnail')->store('assets/image/course', 'public');
            $course->thumbnail = $imagePath;
        }else{
            if($request->has('thumbnail_check') && $course->thumbnail){
                Storage::disk('public')->delete($course->thumbnail);
                $course->thumbnail = null;
            }
        }

        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->url = $request->input('url');
        $course->course_overview = $request->input('course_overview');

        $course->save();

        $response = [
            'status' => true,
            'notification' => 'Course updated successfully!',
        ];

        return response()->json($response);
    }   
}
