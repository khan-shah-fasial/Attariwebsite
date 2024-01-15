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
            'overview_section_heading' => 'required',
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
        
        // Create the Course record with 'Course_category_ids' included
        Course::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'thumbnail' => $imagePath,
            'course_overview' => $request->input('course_overview'),
            'faq' => $data['faq'],
            'overview_section_heading' => $request->input('overview_section_heading'),
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
            'overview_section_heading' => 'required',
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

        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->url = $request->input('url');
        $course->course_overview = $request->input('course_overview');
        $course->faq = $data['faq'];
        $course->overview_section_heading = $request->input('overview_section_heading');

        $course->save();

        $response = [
            'status' => true,
            'notification' => 'Course updated successfully!',
        ];

        return response()->json($response);
    }
    
    
    public function update_heading(Request $request) {
        $validator = Validator::make($request->all(), [
            'heading' => 'required|max:191',
            'curriculum_pdf' => 'nullable|mimetypes:application/pdf,application/msword',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => 'Something Went Wrong',
            ]);
        }
    
        $id = $request->input('course_id');
        $course = Course::find($id);
    
        if (!$course) {
            return response()->json([
                'status' => false,
                'notification' => 'Course not found',
            ]);
        }

        if ($request->hasFile('curriculum_pdf')) {
            $course->curriculum_pdf = $request->file('curriculum_pdf')->store('assets/image/pdf', 'public');
        } else {
            if($request->has('pdf_check') && $course->curriculum_pdf){
                Storage::disk('public')->delete($course->curriculum_pdf);
                $course->curriculum_pdf = null;
            }
        }
    
        $section = $request->input('section');
        $course->{$section . '_section_heading'} = $request->input('heading');
    
        $course->save();
    
        $response = [
            'status' => true,
            'notification' => ucfirst($section) . ' Heading updated successfully!',
        ];
    
        return response()->json($response);
    }
}
