<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learnings;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class LearningsController extends Controller
{

    public function create(Request $request) {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:learnings',
            'course_id' => 'required',
            'heading_pdf_title' => 'required',
            'pdf_title' => 'required',
            'schedule_title' => 'required',
            'testimonials_title' => 'required',
            'faq_title' => 'required',
            'faq' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }
        
        $slug = Str::slug($request->input('slug'), '-');
    
        $pdf_title = $request->input('pdf_title');

    
        if (!empty($pdf_title[0])) {
            $pdf = [];
            for ($a = 0; $a < count($pdf_title); $a++) {
                $file = "pdf_$a";
                $list_pdf = $request->file($file)->store('assets/image/pdf', 'public');

                $pdf[] = [
                    'title' => $pdf_title[$a],
                    'pdf' => $list_pdf,   
                ]; 
            }
            $data['pdf'] = json_encode($pdf);
        } else {
            $data['pdf'] = '[]';
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

        // Create the Learnings record 
        Learnings::create([
            'course_id' => $request->input('course_id'),
            'slug' => $slug,
            'heading_pdf_title' => json_encode($request->input('heading_pdf_title')),

            'pdf' => $data['pdf'],

            'schedule_title' => $request->input('schedule_title'),
            'testimonials_title' => $request->input('testimonials_title'),
            'faq_title' => $request->input('faq_title'),

            'faq' => $data['faq'],

            'page' => $request->input('page'),
        ]);
    
        $response = [
            'status' => true,
            'notification' => 'Learnings added successfully!',
        ];
    
        return response()->json($response);
    }


    
    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            'paced_title' => 'required',
            'oc_title' => 'required',
            'corp_title' => 'required',
            'paced_pointer_list' => 'required',
            'oc_pointer_list' => 'required',
            'corp_pointer_list' => 'required',
            'batch_detail_date' => 'required',
            'batch_detail_sch' => 'required',
            'batch_detail_time' => 'required',
            'off_percentage' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors()->all()
            ], 200);
        }

        $date = $request->input('batch_detail_date');
        $schedule = $request->input('batch_detail_sch');
        $remark = $request->input('batch_detail_remark');
        $time = $request->input('batch_detail_time');
    
        if (!empty($date[0])) {
            $batch_detail = [];
            for ($j = 0; $j < count($date); $j++) {
                $batch_detail[] = [
                    'date' => $date[$j],
                    'schedule' => $schedule[$j],
                    'remark' => $remark[$j],
                    'time' => $time[$j],    
                ];
            }
            $data['batch_detail'] = json_encode($batch_detail);
        } else {
            $data['batch_detail'] = '[]';
        }

        unset($data['batch_detail_date']);
        unset($data['batch_detail_sch']);
        unset($data['batch_detail_remark']);
        unset($data['batch_detail_time']);



        $id = $request->input('id');
        $Learnings = Learnings::find($id);
    

        $Learnings->course_id = $request->input('course_id');

        $Learnings->paced_title = $request->input('paced_title');
        $Learnings->paced_pointer_list = json_encode($request->input('paced_pointer_list'));

        $Learnings->oc_title = $request->input('oc_title');
        $Learnings->oc_pointer_list = json_encode($request->input('oc_pointer_list'));

        $Learnings->batch_detail = $data['batch_detail'];

        $Learnings->corp_title = $request->input('corp_title');
        $Learnings->corp_pointer_list = json_encode($request->input('corp_pointer_list'));

        $Learnings->corp_title = $request->input('corp_title');
        $Learnings->corp_pointer_list = json_encode($request->input('corp_pointer_list'));

        if ($request->has('batch_check')) {
            $status = $request->input('batch_check');
        } else {
            $status = 1;
        }

        $Learnings->off_percentage = $request->input('off_percentage');

        $Learnings->status = $status;


        $Learnings->save();

        $response = [
            'status' => true,
            'notification' => 'Learnings updated successfully!',
        ];

        return response()->json($response);
    }   
}
