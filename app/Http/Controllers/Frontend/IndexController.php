<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;

use App\Models\Faq;
use App\Models\Contact;
use App\Models\BlogComment;

use Illuminate\Support\Facades\Mail;

use App\Models\Newsletter;
use App\Models\Cms;
use App\Models\Course;
use App\Models\Batch;
use App\Models\TextReview;
use App\Models\ImagesReview;
use App\Models\VideoReview;
use App\Models\Syllabus;
use App\Models\ProjectCovered;
use App\Models\Certificate;
use Illuminate\Support\Facades\Validator;

use App\Models\Learnings;


class IndexController extends Controller
{
    public function index(){
        return view('frontend.pages.home.index');
    }
    public function form() {
        $section = request('section');
        $title = request('title');    
        $course_name = request('course_name');    
        $Headingclassname = request('Headingclassname');    
        $msgfield = request('msgfield');
        $param1 = request('param1');    
        $param2 = request('param2');    
        $param3 = request('param3');    
        return view('frontend.component.common_form', compact('section', 'title', 'course_name','Headingclassname', 'msgfield', 'param1', 'param2', 'param3'));
    }
    

//--------------=============================== Blog  ================================------------------------------

    public function blog(Request $request){
        $blog = Blog::where('status', 1)->whereJsonContains('blog_category_ids', '3')->orderBy('updated_at', 'desc')->paginate(6);

        return view('frontend.pages.blog.index', compact('blog'));
    }

    //  category filter post
    public function blog_course($course, Request $request)
    {
        // Fetch the course based on the provided alias
        $course_id = Course::where('status', 1)->where('alias', $course)->value('id');

        // Check if the course is found
        if ($course_id) {
            // Fetch blogs related to the course
            $blog = Blog::where('status', 1)
                ->whereJsonContains('blog_category_ids', '3') // Assuming '3' is the category ID for blogs related to this course
                ->where('course_id', $course_id)
                ->orderBy('updated_at', 'desc')
                ->paginate(6);
    
            return view('frontend.pages.blog.index', compact('blog'));
        } else {
            return view('frontend.pages.404.index');

        }
        
    }
    

    public function blog_data(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 6;
    
        $blog = Blog::where('status', 1)
            ->whereJsonContains('blog_category_ids', '3')
            ->orderBy('updated_at', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);
    
        if ($request->ajax()) {
            $view = view('frontend.component.blog_list_card', compact('blog'))->render();
    
            return response()->json(['html' => $view]);
        }
    
        return view('frontend.pages.blog.index', compact('blog'));
    }

    public function blog_detail($category, $slug)
    {

        $category_id = BlogCategory::where('slug', $category)->first();
        $detail = Blog::where('slug', $slug)->where('status', 1)->first();        
        $course = Course::where('status', 1)->where('id', $detail->course_id)->first(['id', 'name', 'alias']);
    
        if ($detail) {
            $blog_category_ids = json_decode($detail->blog_category_ids);
            $first_category_id = $blog_category_ids[0];

            if ($first_category_id == $category_id->id) {
                $author = json_decode($detail->user_id, true);

                //$blog = Blog::where('status', 1)->whereJsonContains('blog_category_ids', ''.$category_id->id.'')->where('id', '!=', $detail->id)->limit(3)->orderBy('id', 'desc')->get();

                $blog = Blog::where('status', 1)
                    ->whereJsonContains('blog_category_ids', json_decode($detail->blog_category_ids))
                    ->whereJsonContains('blog_category_ids', '' . $category_id->id . '')
                    ->where('id', '!=', $detail->id)->limit(4)
                    ->orderBy('id', 'desc')
                    ->get();

                /*
                $current_id = $detail->id;

                $previous = Blog::where('status', 1)
                    ->whereJsonContains('blog_category_ids', '' . $category_id->id . '')
                    ->where('id', '<', $current_id)
                    ->orderBy('id', 'desc')
                    ->first();

                $next = Blog::where('status', 1)
                    ->whereJsonContains('blog_category_ids', '' . $category_id->id . '')
                    ->where('id', '>', $current_id)
                    ->orderBy('id', 'asc')
                    ->first();

                $previous_slug = $previous ? $previous->slug : null;
                $next_slug = $next ? $next->slug : null;

                return view('frontend.pages.blog.detail', compact('detail', 'author', 'blog', 'previous_slug', 'next_slug', 'course'));
                */

                return view('frontend.pages.blog.detail', compact('detail', 'author', 'blog', 'course'));
            }
        }
        return view('frontend.pages.404.index');

    }

//--------------=============================== Blog end ================================------------------------------


//--------------=============================== other ================================------------------------------

    public function not_found(){

        return view('frontend.pages.404.index');
    }
    public function thank_you(){

        return view('frontend.pages.thankyou.index');
    }

    public function cookie_policy(){

        return view('frontend.pages.cookiePolicy.index');
    }

//--------------=============================== other ================================------------------------------

//--------------=============================== Pages ================================------------------------------

    public function contact_us(){
        return view('frontend.pages.contact.index');
    }

    public function career(){
        return view('frontend.pages.career.index');
    }

    public function faq(){
        $faq = Faq::where('status', 1)->get();
        return view('frontend.pages.faq.index', compact('faq'));
    }

    public function about_us(){
        return view('frontend.pages.about.index');
    }

    public function privacy_policy(){
        return view('frontend.pages.privacypolice.index');
    }

//--------------=============================== Pages ================================------------------------------

//--------------=============================== contact form save ===========================------------------------------

    public function contact_save(Request $request)
    {
        $rules = [
            'cv' => 'nullable|mimetypes:application/pdf,application/msword',
            'phone' => 'required|regex:/^[0-9\s\+]{10,}$/',
            'description' => 'nullable|regex:/^[a-zA-Z0-9\s,&-’.@]+$/',
        ];
    
        $validator = Validator::make($request->all(), $rules); // Pass $request->all() as the first argument
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors(),
            ]);
        }
    
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('assets/image/pdf', 'public');
        } else {
            $cvPath = null; // Set to null if 'cv' is not provided
        }
    
        // Create the contact record, including 'cv' if provided
        $contactData = $request->all();
        $contactData['cv'] = $cvPath;

        $name = isset($contactData["name"]) ? $contactData["name"] : ' - ';
        $email = isset($contactData["email"]) ? $contactData["email"] : ' - ';
        $country = isset($contactData["country"]) ? $contactData["country"] : ' - ';
        $phone = isset($contactData["phone"]) ? $contactData["phone"] : ' - ';
        $services = isset($contactData["services"]) ? $contactData["services"] : ' - ';
        $description = isset($contactData["description"]) ? $contactData["description"] : ' - ';
        $ip = isset($contactData["ip"]) ? $contactData["ip"] : ' - ';
        $section = isset($contactData["section"]) ? $contactData["section"] : ' - ';
        $ref_url = isset($contactData["ref_url"]) ? $contactData["ref_url"] : ' - ';
        $url = isset($contactData["url"]) ? $contactData["url"] : ' - ';
        $qualification = isset($contactData["qualification"]) ? $contactData["qualification"] : ' - ';

        // Create the contact record
        Contact::create($contactData);

        $user_data = json_decode(session('user_ip'), true);

        // Send email if $cvPath is not null

        if($services == "VMware"){
            $subject = "VMware Course Enquiry";
        } elseif($services == "AWS Cloud") {
            $subject = "AWS Cloud Course Enquiry";
        } elseif($services == "Azure Cloud") {
            $subject = "Azure Cloud Course Enquiry";
        } elseif($services == "MCSE") {
            $subject = "MCSE Course Enquiry";
        } elseif($services == "CCNA") {
            $subject = "CCNA Course Enquiry";
        } else {
            $subject = "Lead Enquiry";
        }
       
        $recipient = ''.get_settings('recive_email').''; // Replace with the actual recipient email
        $subject  =  $subject;
     

        $body = '<table>';
        $body .= "<tr><td style='width: 150px;'><strong>From :</strong></td><td>" . $name . ' ' . $email . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Form Name :</strong></td><td>" . $section . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Page URL :</strong></td><td>" . $url . "</td></tr></br><p></p>";
        
        $body .= "<tr><td style='width: 150px;'><strong>Full Name :</strong></td><td>" . $name . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Email Address :</strong></td><td>" . $email . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Country :</strong></td><td>" . $country . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Phone Number :</strong></td><td>" . $phone . "</td></tr></br>";

        if (isset($contactData["description"]) || isset($contactData["services"])) {
            $body .= "<tr><td style='width: 150px;'><strong>Course Requested :</strong></td><td>" . ($services ?? 'Not provided') . "</td></tr></br>";
            $body .= "<tr><td style='width: 150px;'><strong>Message :</strong></td><td>" . ($description ?? 'Not provided') . "</td></tr></br><p></p>";
        } else {
            /*$body .= "<tr><td style='width: 150px;'><strong>Qualification :</strong></td><td>" . ($qualification ?? 'Not provided') . "</td></tr></br><p></p>";
            */

            $body .= "<tr><td style='width: 150px;'><strong>Course Requested :</strong></td><td>" . ($services ?? 'Not provided') . "</td></tr></br>";
            $body .= "<tr><td style='width: 150px;'><strong>Message :</strong></td><td>" . ($description ?? 'Not provided') . "</td></tr></br><p></p>";
        }
        
        
        $body .= "<tr><td style='width: 150px;'><strong>Ip :</strong></td><td>" . $ip . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>User Location :</strong></td><td>" . 
                    ($user_data['city'] ?? 'null') . ' ' . 
                    ($user_data['region'] ?? 'null') . ' ' . 
                    ($user_data['country'] ?? 'null') . 
                "</td></tr></br>";
        
        $body .= "<tr><td style='width: 150px;'><strong>Referrer URL :</strong></td><td>" . $ref_url . "</td></tr></br>";
        $body .= "<tr><td style='width: 150px;'><strong>Submitted Data :</strong></td><td>" . date('Y-m-d') . "</td></tr></br>";
        $body .= '</table>';

        $replyToEmail = $email;

        SendinBlueContact_lead($email);


        if ($cvPath !== null) {
             // Optional attachments
            $attachments = [
                [
                    'path' => storage_path("app/public/$cvPath"), // Replace with the actual path
                    'name' => ''.$name.'.pdf', // Replace with the desired attachment name
                ],
                // Add more attachments if needed
            ];

            // Send the email
            //sendEmail($recipient, $subject, $body, $replyToEmail, $attachments);

            sendEmail($recipient, $subject, $body, $replyToEmail);

        } else {
            sendEmail($recipient, $subject, $body, $replyToEmail);
        }

        

    
        $response = [
            'status' => true,
            'notification' => 'Thank you, Attari Classes support desk will get in touch with you',
        ];
    
        return response()->json($response);
    }
   //--------------=============================== contact form save ===========================--------------------------
   
   //--------------=============================== newsleatter ==========================================-------------------------

    public function newsletter_save(Request $request)
    {
        $rules = [
            'email' => 'required|email',
        ];
    
        $validator = Validator::make($request->all(), $rules); // Pass $request->all() as the first argument
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'notification' => $validator->errors(),
            ]);
        }
    

        // Create the contact record, including 'cv' if provided
        $newsletterData = $request->all();


        $email = isset($newsletterData["email"]) ? $newsletterData["email"] : ' - ';


        SendinBlueContact($email);

        // Create the contact record
        Newsletter::create($newsletterData);

        // Send email if $cvPath is not null
       
        $recipient = ''.$email.''; 
        $subject  =  'Thanks for subscribing to Attari Classes Newsletter!';
     

        $body = 'Thanks for subscribing to Attari Classes Newsletter!';
        
        sendEmail($recipient, $subject, $body);
        
        $response = [
            'status' => true,
            'notification' => 'NewsLetter Subscribe successfully!',
        ];
    
        return response()->json($response);
    }

//--------------=============================== newsleatter ==========================================-------------------------


//--------------=============================== other feature ====================================---------------------
    /*
    public function search(Request $request){

        $query = $request->input('query');

        $blogs = Blog::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('title', 'like', "%$query%")
                ->orWhere('short_description', 'like', "%$query%")
                ->orWhere('content', 'like', "%$query%");
        })->where('status', 1)->get();
        
        $practiceAreas = PracticeArea::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('title', 'like', "%$query%")
                ->orWhere('short_description', 'like', "%$query%")
                ->orWhere('content', 'like', "%$query%");
        })->where('status', 1)->get();

        return view('frontend.pages.search.index', compact('blogs','practiceAreas'));
    }
    */

    public function comment_save(Request $request)
    {
        $commentData = $request->all();
    
        // Create the contact record
        BlogComment::create($commentData);
    
        $response = [
            'status' => true,
            'notification' => 'Comment added successfully!',
        ];
    
        return response()->json($response);
    }

// =====================--------------- Privacy Policy -------------====================

    public function terms_page(){
        return view('frontend.pages.terms.index');
    }

    public function refund_policy(){
        return view('frontend.pages.refund_policy.index');
    }

// =================--------------------- NEW ---------------------=========================

    public function course_detail($slug){

        $cms = Cms::where('slug', $slug)->where('status', 1)->first();

        $detail = Course::where('id', $cms->course_id)->where('status', 1)->first();

        $batch = Batch::where('course_id', $cms->course_id)->where('status', 1)->first();
        $text_review = TextReview::where('course_id', $cms->course_id)->where('status', 1)->orderBy('id', 'DESC')->limit('10')->get();
        //$image_review= ImagesReview::where('course_id', $cms->course_id)->where('status', 1)->get();
        $video_review = VideoReview::where('course_id', $cms->course_id)->where('status', 1)->orderBy('id', 'DESC')->limit('8')->get();
        
        $faq = Faq::where('course_id', $cms->course_id)
        ->where('status', 1)
        ->where(function ($query) use ($cms) {
            if ($cms->zone == 1 || $cms->zone == 2) {
                $query->where('zone', 1);
            } else {
                $query->where('zone', 0);
            }
        })
        ->orderBy('title_no', 'ASC')        
        ->get();

        $syllabus = Syllabus::where('course_id', $cms->course_id)->where('status', 1)->orderBy('title_no', 'ASC')->get();
        $project_covered = ProjectCovered::where('course_id', $cms->course_id)->where('status', 1)->orderBy('title_no', 'ASC')->get();
        $certificate = Certificate::where('course_id', $cms->course_id)->where('status', 1)->orderBy('id', 'DESC')->get();

        return view('frontend.pages.courses.index', compact('cms','detail','batch','text_review','video_review','faq','syllabus','project_covered','certificate'));
    }

    public function success_stories(){
        return view('frontend.pages.success_stories.index');
    }

    public function reviews(){
        return view('frontend.pages.reviews.index');
    }

    public function batch(){
        return view('frontend.pages.batch.index');
    }

    public function training_option(){
        return view('frontend.pages.training_option.index');
    }



    public function photo_gallery(){
        return view('frontend.pages.photo_gallery.index');
    }

    public function learning(){
        return view('frontend.pages.learning.index');
    }

    // public function learning_detail($slug){
    //     $learning = Learnings::where('slug', $slug)->where('status', 1)->first();
    //     return view('frontend.pages.learning.detail', compact('learning'));
    // }
    public function learning_detail($slug){
        $learning = Learnings::where('slug', $slug)->where('status', 1)->first();
        $alias = null;
        if ($learning) {
            $course_id = $learning->course_id;
            $course = Course::where('id', $course_id)->first();
            if ($course) {
                $alias = $course->alias;
            }
        }
        return view('frontend.pages.learning.detail', compact('learning', 'alias'));
    }

}