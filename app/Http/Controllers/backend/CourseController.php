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
            'slug' => 'required|unique:practice_areas',
            'short_description' => 'required',
            'content' => 'required',
            //'thumnail_image' => 'image',
            //'section_image' => 'image',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
            'breadcrumb_title' => 'required|max:191',
            'breadcrumb_subtitle' => 'required|max:191',
            //'breadcrumb_image' => 'required|image', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }        
    
        // Upload image
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('assets/image/course', 'public');
        } else {
            $imagePath = null;
        }

        if ($request->hasFile('breadcrumb_image')) {
            $imagePath1 = $request->file('breadcrumb_image')->store('assets/image/course', 'public');
        } else {
            $imagePath1 = null;
        }

        if ($request->hasFile('section_image')) {
            $imagePath2 = $request->file('section_image')->store('assets/image/course', 'public');
        } else {
            $imagePath2 = null;
        }

        // Extract and handle FAQ data
        $faq = $request->input('faq');
        $faq_description = $request->input('faq_description');
    
        if (!empty($faq[0])) {
            $faqs = [];
            for ($j = 0; $j < count($faq); $j++) {
                $faqs[] = [
                    $faq[$j] => $faq_description[$j],
                ];
            }
            $data['faq'] = json_encode($faqs);
        } else {
            $data['faq'] = '[]';
        }
    
        // Remove the 'faq_description' key as it's not needed anymore
        unset($data['faq_description']);

        $slug = customSlug($request->input('slug'));

        $focusArea = $request->input('focus_area', []);
        
        // Create the Course record with 'Course_category_ids' included
        Course::create([
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'slug' => $slug,
            'short_description' => $request->input('short_description'),
            'content' => $request->input('content'),
            'focus_area' => json_encode($focusArea),
            'why_choose_us' => $request->input('why_choose_us'),
            'faq' => $data['faq'],
            'thumnail_image' => $imagePath,
            'alt_thumnail_image' => $request->input('alt_thumnail_image'),
            'section_image' => $imagePath2,
            'alt_section_image' => $request->input('alt_section_image'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'breadcrumb_title' => $request->input('breadcrumb_title'),
            'breadcrumb_subtitle' => $request->input('breadcrumb_subtitle'),
            'breadcrumb_image' => $imagePath1,
            'special_service' => $request->input('special_service'),
            'section_link' => $request->input('section_link'),
        ]);
    
        $response = [
            'status' => true,
            'notification' => 'Practice area added successfully!',
        ];
    
        return response()->json($response);
    }   

    public function edit($id) {
        $course = Course::find($id);
        $allcourse = Course::where('status', 1)->get();
        return view('backend.pages.course.edit', compact('course', 'allcourse'));
    }
    
    public function view($id) {
        $course = Course::find($id);
        return view('backend.pages.course.view', compact('course'));
    }  
    
    public function delete($id) {
        
        $course = Course::find($id);
        $course->delete();

        $response = [
            'status' => true,
            'notification' => 'Practice area deleted successfully!',
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
            'title' => 'required|max:191',
            'slug' => 'required|unique:practice_areas,slug,'. $request->input('id'),
            'short_description' => 'required',
            'content' => 'required',
            //'thumnail_image' => 'image',
            //'section_image' => 'image',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required',
            'breadcrumb_title' => 'required|max:191',
            'breadcrumb_subtitle' => 'required|max:191',
            //'breadcrumb_image' => 'image', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $id = $request->input('id');
        $course = Course::find($id);
    
        if ($request->hasFile('image')) {
            // Update the image if a new one is uploaded
            $imagePath = $request->file('image')->store('assets/image/course', 'public');
            $course->thumnail_image = $imagePath;
        }else{
            if($request->has('image_check') && $course->thumnail_image){
                Storage::disk('public')->delete($course->thumnail_image);
                $course->thumnail_image = null;
            }
        }

        if ($request->hasFile('breadcrumb_image')) {
            // Update the image if a new one is uploaded
            $imagePath1 = $request->file('breadcrumb_image')->store('assets/image/course', 'public');
            $course->breadcrumb_image = $imagePath1;
        }else{
            if($request->has('breadcrumb_image_check') && $course->breadcrumb_image){
                Storage::disk('public')->delete($course->breadcrumb_image);
                $course->breadcrumb_image = null;
            }
        }

        if ($request->hasFile('section_image')) {
            // Update the image if a new one is uploaded
            $imagePath2 = $request->file('section_image')->store('assets/image/course', 'public');
            $course->section_image = $imagePath2;
        }else{
            if($request->has('section_image_check') && $course->section_image){
                Storage::disk('public')->delete($course->section_image);
                $course->section_image = null;
            }
        }

        // Extract and handle FAQ data
        $faq = $request->input('faq');
        $faq_description = $request->input('faq_description');
    
        if (!empty($faq[0])) {
            $faqs = [];
            for ($j = 0; $j < count($faq); $j++) {
                $faqs[] = [
                    $faq[$j] => $faq_description[$j],    
                ];
            }
            $data['faq'] = json_encode($faqs);
        } else {
            $data['faq'] = '[]';
        }
    
        // Remove the 'faq_description' key as it's not needed anymore
        unset($data['faq_description']);

        $slug = customSlug($request->input('slug'));

        $focusArea = $request->input('focus_area', []);
    
        $course->parent_id = $request->input('parent_id');
        $course->title = $request->input('title');
        $course->slug = $slug;
        $course->alt_thumnail_image = $request->input('alt_thumnail_image');
        $course->alt_section_image = $request->input('alt_section_image');
        $course->short_description = $request->input('short_description');
        $course->content = $request->input('content');
        
        if (empty($focusArea) || $focusArea === '[]') {
            $course->focus_area = '[]';
        } else {
            $course->focus_area = json_encode($focusArea);
        }

        $course->why_choose_us = $request->input('why_choose_us');
        $course->faq = $data['faq'];
        $course->meta_title = $request->input('meta_title');
        $course->meta_description = $request->input('meta_description');
        $course->breadcrumb_title = $request->input('breadcrumb_title');
        $course->breadcrumb_subtitle = $request->input('breadcrumb_subtitle');
        $course->special_service = $request->input('special_service');
        $course->section_link = $request->input('section_link');
    
        $course->save();

        $response = [
            'status' => true,
            'notification' => 'Practice area updated successfully!',
        ];

        return response()->json($response);
    }   
}
