@extends('frontend.layouts.app')

@section('page.title', $cms->title)

@section('page.description', $cms->description)

@section('page.type', 'website')

@section('page.content')

    <!----------========== courses start ===============-------------------->
    <section class="vm_banner pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-9 width70">

                    <div class="col-12">
                        <div class="breadcrums_section pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                    <li class="breadcrumb-item"><a>»</a></li>
                                    <li class="breadcrumb-item"><a><b>{{ $cms->breadcrumb_title }}</b></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>


                    <div class="top_content_section">
                        <h1>{{ $cms->title }}</h1>
                        <p class="rating"> {{ $cms->rating }} <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> ({{ $cms->total_review }}) Rating
                        </p>
                        <div class="desc pe-5"> 
                            @php echo ReplaceKeyword($cms->description, $cms->replace_keyword) @endphp
                        </div>
                    </div>

                    <button type="button" class="btn coursepg_enquiryform" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal_coursepg"> Enquire Now</button>

                    <a href="#syllabuse" class="check_curriculum"> Check Curriculum </a>
                </div>
                <div class="col-3 width30 imagebox d-flex align-items-center justify-content-center">
                    <a href="https://youtu.be/iTGqlC2X-CQ" data-fancybox="gallery">
                        <img data-src="/assets/frontend/images/1280-720-5.jpg" class="lazyload" alt="">
                        <div class="pulse-button space_1"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="vm_nav" id="vm_nav">
        <div class="container">
            <div id="version" class="version highlight-bar">
                <nav class="nav-sections">
                    <ul class="menu34">
                        <li class="menu-item">
                            <a class="menu-item-link active" href="#key_features">Key Feature</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#overviews">Overview</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#syllabuse">Course Content</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#project_cover">Project</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#certificate_section">Certificate</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#batch_shedule">Batch Schedule</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#faqs">FAQ</a>
                        </li>
                        <div class="active-line"></div>
                    </ul>
                </nav>
            </div>
        </div>
    </section>


    <!-----------------key features---------------------->

    <div class="page-sections">
        <section id="key_features" class="page-section key_features py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="section_heading pb-3 text-center textcolor_blck mb-3">{{ $cms->breadcrumb_title }} Key
                            Features
                        </h4>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <p> Instructor led live Training </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-laptop"></i>
                            </div>
                            <p> Hands-on Practical Training </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <p> Trainer Support on WhatsApp </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <p> Recorded lectures on LMS </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i aria-hidden="true" class="fas fa-book-open"></i>
                            </div>
                            <p> Access to Learning Portal </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-file"></i>
                            </div>
                            <p> Certificate from Attari classes </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <p> Access to forum for new Job Openings </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <p> Support Desk for Training & Certification </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--overviews------------------------------->
        <section id="overviews" class="page-section overview py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 width70">
                        <h4 class="section_heading pb-3 text-center textcolor_blck"> {{ $detail->overview_section_heading }}
                        </h4>
                        <div>
                            @php echo ReplaceKeyword($detail->course_overview, $cms->replace_keyword) @endphp
                        </div>

                        @if(!empty($detail->faq))
                        <div class="accordion main_accrdion_cls" id="accordionExample">

                            @php
                                $course_faq = json_decode($detail->faq);
                                $i = 1;
                            @endphp

                            @foreach($course_faq as $faq1)
                                @foreach ($faq1 as $title => $description)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $i }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $i }}" aria-expanded="@if($i == 1) true @else false @endif" aria-controls="collapse{{ $i }}">
                                                {{ $title }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1) show @endif"
                                            aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                @php echo ReplaceKeyword($description, $cms->replace_keyword) @endphp
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @php $i++ @endphp
                            @endforeach

                        </div>
                        @endif


                    </div>
                    <div class="col-md-3 width30 position_sticky">
                        <div class="talktous_box">
                            <i class="fa-sharp fa-solid fa-phone"></i>
                            <p>Talk To Us</p>
                            <p>
                                <a href="tel:+917738375431">+91 7738375431</a>
                            </p>
                            <p>
                                <a href="mailto:info@attariclasses.in">info@attariclasses.in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--syllabas section -->


        <section id="syllabuse" class="page-section syllabus_section gradiant_bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 width70">
                        <h4 class="section_heading pb-3 textcolor_wht float_left"> {{ $detail->syllabus_section_heading }} </h4>
                        <div class="download_carricullam float_right"><a class="" href="{{ asset('storage/' . $detail->curriculum_pdf) }}" download="Curriculum"><img
                                    data-src="/assets/frontend/images/pdf.webp" class="lazyload" alt=""> Download Curriculum</a>
                        </div>

                        <div style="clear:both"></div>
                        @if(!empty($syllabus))
                        <div class="accordion main_accrdion_cls" id="Syllabus">
                            @php $i = 1; @endphp

                            @foreach ($syllabus as $row)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $i }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $i }}" aria-expanded="@if($i == 1) true @else false @endif" aria-controls="collapse{{ $i }}">
                                            Module {{ $i }}:- {{ $row->title }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1) show @endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#Syllabus">
                                        <div class="accordion-body">
                                            @php echo ReplaceKeyword($row->description, $cms->replace_keyword) @endphp
                                        </div>
                                    </div>
                                </div>
                                @php $i++ @endphp
                            @endforeach



                        </div>
                        @endif

                    </div>


                    <div class="col-md-3 width30 position_sticky">
                        <div class="bookdemofreeform_course gray_bgg1 margin-top55">
                            <h4 class="text-center">Book a <b>FREE</b> Demo</h4>

                            @include('frontend.component.course_demo_form', ['courseName' => $cms->breadcrumb_title, 'form' => '1'])

                        </div>
                    </div>

                    
                </div>
            </div>
        </section>



        <!--Projects Covered section -->
        @if(!empty($project_covered))
        <section id="project_cover" class="page-section prje_cove_section light_gray_bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="section_heading pb-3 text-center">{{ $detail->project_section_heading }}</h4>
                        <div class="owl-carousel owl-theme projects-covered">

                            @foreach ($project_covered as $row)
                                
                                <div class="item">
                                    <div class="projects_covered_box">
                                        <div class="projects_covered__header">
                                            <div class="row">
                                                <div class="col-lg-9 col-10">
                                                    <div class="projects_covered__image">
                                                        <span class="projects_covered__name">{{ $row->title }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-2">
                                                    <div class="projects_covered__icon">
                                                        <img src="{{ asset('storage/' . $row->icon) }}" style="width: 27px;" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="projects_covered__content">
                                            <div class="projects_covered__text">
                                                <div class="proj-cov">
                                                    @php echo ReplaceKeyword($row->description, $cms->replace_keyword) @endphp
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        @if(!empty($certificate))
            <section id="certificate_section" class="page-section certificate_section pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="section_heading pb-3 text-center">{{ $detail->certificate_section_heading }}</h4>
                            <div class="owl-carousel owl-theme professional_students">

                                @foreach ($certificate as $row)
                                    
                                    <div class="item">
                                        <div class="cirtificate_img">
                                            <img data-src="{{ asset('storage/' . $row->image) }}" class="lazyload"
                                                alt="{{ $row->alt_image }}">
                                        </div>
                                    </div>

                                @endforeach 

                            </div>

                        </div>
                    </div>
                </div>
            </section>
        @endif

       
        <section id="testimonials" class="page-section testiminilas_sec gradiant_bg pt-5 pb-5 dot_clr_white">
            <div class="container">
                <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht">
                    {{ $detail->testimonials_section_heading }}
                </h3>

                @if(!empty($video_review))
                    <div class="large-12 columns">
                        <div class="owl-carousel owl-theme video_testiminials">

                            @foreach ($video_review as $row)
                                <div class="item">
                                    <div class="testimonial_video">

                                        @php
                                            // Use parse_url to get the path from the URL
                                            $path = parse_url($row->url, PHP_URL_PATH);

                                            $parts = explode('/', trim($path, '/'));
                                            $videoId = end($parts);

                                        @endphp 

                                        <a href="{{ $row->url }}" data-fancybox="gallery">
                                            <div class="pulse-button"></div>
                                            <img data-src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                                class="img-fluid d-block w-100 lazyload" alt="">
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endif
                
                @if(!empty($text_review))
                    <div class="large-12 columns mt-4 slider_content_dots">
                        <div class="owl-carousel owl-theme">

                            @foreach ($text_review as $row)
    
                                <div class="item">
                                    <div class="testimonial_box">
                                        <div class="testimonial__header">
                                            <div class="row">
                                                <div class="col-lg-6 col-10">
                                                    <div class="testimonial__image">
                                                        <img data-src="{{ asset('storage/' . $row->thumbnail) }}"
                                                            class="img-fluid d-block w-100 lazyload" alt="">
                                                        <span class="testimonial__name">{{ $row->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-2">
                                                    <div class="testimonial__icon">
                                                        <i aria-hidden="true" class="fab fa-google-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial__content">
                                            <div class="testimonial__text">
                                                @php echo ReplaceKeyword($row->description, $cms->replace_keyword) @endphp
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                @endif

            </div>
        </section>

        @if(!empty($batch))
            <section id="batch_shedule" class="page-section prje_cove_section light_gray_bg pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="section_heading pb-3 text-center">  {{ $detail->batch_section_heading }}</h4>
                        </div>

                        <div class="batch_shedule_box">
                            <div class="row">
                                <div class="col-md-9">
                                    <h5 class="batch_subhed">{{ $batch->paced_title }}</h5>
                                    @php $paced_pointer = json_decode($batch->paced_pointer_list) @endphp
                                    <ul>
                                        @foreach ($paced_pointer as $row)
                                            <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <div class="button_main">
                                        <a href="https://lms.attariclasses.in/" target="_blank">Visit Video Portal</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="batch_shedule_box">
                            <div class="row">
                                <div class="col-md-9">
                                    <h5 class="batch_subhed">{{ $batch->oc_title }}  <spam>Preferred</spam>
                                    </h5>
                                    @php $oc_pointer = json_decode($batch->paced_pointer_list) @endphp
                                    <ul>
                                        @foreach ($oc_pointer as $row)
                                            <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp</li>
                                        @endforeach
                                    </ul>
                                    @php 
                                        $batch_detail = json_decode($batch->batch_detail, true);
                                    @endphp

                                    @if(!empty($batch_detail))
                                        <table class="batch_table table">
                                            <tbody>
                                                <tr>
                                                    <td width="20">DATE</td>
                                                    <td width="40">SCHEDULE </td>
                                                    <td width="40">TIME </td>
                                                </tr>
                                                @foreach ($batch_detail as $row)
                                                    <tr>
                                                        <td>@php echo html_entity_decode($row['date']) @endphp</td>
                                                        <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">{{ $row['remark'] }}</span></td>
                                                        <td>@php echo html_entity_decode($row['time']) @endphp</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <div class="button_main getin_touch_bx">
                                        <h5>Get In Touch to Avail <span>20% OFF</span></h5>
                                        <a data-bs-toggle="modal" data-bs-target="#enquiry_modal_coursepg">Book a Demo</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="batch_shedule_box">
                            <div class="row">
                                <div class="col-md-9">
                                    <h5 class="batch_subhed">{{ $batch->corp_title }}</h5>
                                    @php $corp_pointer = json_decode($batch->corp_pointer_list) @endphp
                                    <ul>
                                        @foreach ($corp_pointer as $row)
                                            <li>
                                                <i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <div class="button_main">
                                        <a data-bs-toggle="modal" data-bs-target="#enquiry_modal_coursepg">Enquire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </section>
        @endif


    <!--Faq section-->


    <section id="faqs" class="page-section overview py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 width70">
                    <h4 class="section_heading pb-3 text-center textcolor_blck">  {{ $detail->faq_section_heading }} </h4>

                    @if(!empty($faq))
                    <div class="accordion--container accordion_style">
                        
                        @foreach ($faq as $row)
                            <li class="accordion">
                                <span>{{ $row->question }}<i class="fa fa-angle-up"></i>
                                </span>
                                <ul>
                                    <div class="txt">
                                        @php echo ReplaceKeyword($row->answer, $cms->replace_keyword) @endphp
                                    </div>
                                </ul>
                            </li>
                        @endforeach


                    </div>
                    @endif


                    <div class="gradiant_bg bookdemofreeform_course mt-4">
                        <h4 class="text-left textcolor_wht pb-2">Book a <b>FREE</b> Demo</h4>
                        @include('frontend.component.course_demo_form', ['courseName' => $cms->breadcrumb_title, 'form' => '2'])
                    </div>


                </div>
                <div class="col-md-3 width30 position_sticky">
                    <div class="talktous_box margin-top55">
                        <i class="fa-sharp fa-solid fa-phone"></i>
                        <p>Talk To Us</p>
                        <p>
                            <a href="tel:+917738375431">+91 7738375431</a>
                        </p>
                        <p>
                            <a href="mailto:info@attariclasses.in">info@attariclasses.in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    <section class="other_courses light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> Other Courses We Offer</h4>
                    <div class="owl-carousel owl-theme other_courses_slider">

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""> <img data-src="/assets/frontend/images/aws.jpg" class="lazyload" alt=""></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img data-src="/assets/frontend/images/azure.jpg" class="lazyload"
                                        alt="" /></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""> <img data-src="/assets/frontend/images/microsft.jpg" class="lazyload"
                                        alt="" /></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img data-src="/assets/frontend/images/ccna.jpg" class="lazyload"
                                        alt="" /></a>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="location_section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="location_box">
                        <h5>
                            Find VMware Certification Training Course in other Cities:
                        </h5>

                        <ul class="">
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-mumbai/">
                                    <span>Mumbai</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-pune/">
                                    <span>Pune</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-bangalore/">
                                    <span>Bangalore</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ahmedabad/">
                                    <span>Ahmedabad</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-delhi/">
                                    <span>Delhi</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-noida/">
                                    <span>Noida</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-jaipur/">
                                    <span>Jaipur</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-nagpur/">
                                    <span>Nagpur</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kolkata/">
                                    <span>Kolkata</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-hyderabad/">
                                    <span>Hyderabad</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-chennai/">
                                    <span>Chennai</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-baroda/">
                                    <span>Baroda</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-surat">
                                    <span>Surat</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-rajkot">
                                    <span>Rajkot</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-thane">
                                    <span>Thane</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-nashik/">
                                    <span>Nashik</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-aurangabad/">
                                    <span>Aurangabad</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kolhapur/">
                                    <span>Kolhapur</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="location_box">
                        <h5>
                            Find VMware Certification Training Course in other Country:
                        </h5>

                        <ul class="elementor-icon-list-items">
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-bangladesh/">
                                    <span>Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-dubai/">
                                    <span>Dubai</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-singapore/">
                                    <span>Singapore</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-new-york/">
                                    <span>New York</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-sydney/">
                                    <span>Sydney</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-toronto/">
                                    <span>Toronto</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-canada/">
                                    <span>Canada</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-saudi-arabia/">
                                    <span>Saudi Arabia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kuwait/">
                                    <span>Kuwait</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-virginia/">
                                    <span>Virginia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-california">
                                    <span>California</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-iowa/">
                                    <span>Iowa</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-qatar/">
                                    <span>Qatar</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-north-carolina">
                                    <span>North Carolina</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-texas/">
                                    <span>Texas</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-england/">
                                    <span>England</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-australia/">
                                    <span>Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-germany/">
                                    <span>Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-oman/">
                                    <span>Oman</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-srilanka/">
                                    <span>Srilanka</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-netherlands/">
                                    <span>Netherlands</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-new-zealand/">
                                    <span>New Zealand</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-malaysia/">
                                    <span>Malaysia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-hong-kong/">
                                    <span>Hong Kong</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-indonesia/">
                                    <span>Indonesia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-philippines/">
                                    <span>Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-nepal/">
                                    <span>Nepal</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-bahrain/">
                                    <span>Bahrain</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-sweden/">
                                    <span>Sweden</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ireland/">
                                    <span>Ireland</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-japan/">
                                    <span>Japan</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-zambia/">
                                    <span>Zambia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kenya/">
                                    <span>Kenya</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-nigeria/">
                                    <span>Nigeria</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ghana/">
                                    <span>Ghana</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-norway/">
                                    <span>Norway</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ethiopia/">
                                    <span>Ethiopia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-sudan/">
                                    <span>Sudan</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-poland/">
                                    <span>Poland</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-finland/">
                                    <span>Finland</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-denmark/">
                                    <span>Denmark</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-fiji/">
                                    <span>Fiji</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-namibia/">
                                    <span>Namibia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-somalia/">
                                    <span>Somalia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-florida/">
                                    <span>Florida</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ohio/">
                                    <span>Ohio</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-new-jersey/">
                                    <span>New Jersey</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-arizona/">
                                    <span>Arizona</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-georgia/">
                                    <span>Georgia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-utah/">
                                    <span>Utah</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-idaho/">
                                    <span>Idaho</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kansas/">
                                    <span>Kansas</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-indiana/">
                                    <span>Indiana</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('frontend.component.course_enquire_form', ['courseName' => $cms->breadcrumb_title])

    <!-------------=============== courses end =============== -------------------->

@endsection
