@extends('frontend.layouts.app')



@php 
    $page_title = ReplaceKeyword($detail->meta_title, $cms->replace_keyword);
    $page_description = ReplaceKeyword($detail->meta_description, $cms->replace_keyword);  
@endphp

@php

    $description = strip_tags(html_entity_decode($page_description));
    $description = html_entity_decode($description);
    $wordLimit = 155; // Set your desired word limit

    // Split the string into an array of words
    $words = preg_split('/\s+/', $description, -1, PREG_SPLIT_NO_EMPTY);

    // Limit the array to the desired number of words
    $limitedWords = array_slice($words, 0, $wordLimit);

    // Join the limited words back into a string
    $tem_desc = implode(' ', $limitedWords); 
    

    $meta_title = $cms->title;
    $meta_description = $tem_desc;
    $meta_url = url()->current();
@endphp 

@section('page.title', $page_title)

@section('page.description', $tem_desc)

@section('page.type', 'website')

@section('page.content')

    <!----------========== courses start ===============-------------------->
    <section class="vm_banner pb-lg-5 pt-lg-5 pb-4 pt-4">
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
                        <p class="rating"> {{ $detail->rating }} <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> ({{ $detail->total_review }}) Rating
                        </p>

                        <div class="show_mobileview imagebox d-flex align-items-center justify-content-center">

                    @php
                        // Assuming $row->url contains the YouTube URL
                        if (strpos($detail->url, 'embed/') === false) {
                            $videoID = basename($detail->url);
                            $youtube_url_detail = 'https://youtu.be/embed/' . $videoID; // Corrected the concatenation
                        } else {
                            $youtube_url_detail = $detail->url; // URL already in the correct format
                        }
                    @endphp


                    <a href="{{ $youtube_url_detail }}" data-fancybox="gallery">
                        <img src="{{ asset('storage/' . $detail->other_thumbnail) }}"
                            class="img-fluid d-block w-100 lazyload" alt="">
                        <div class="pulse-button space_1"></div>
                    </a>

                </div>


                        <div class="desc pe-lg-5 pe-0">
                            @php echo ReplaceKeyword($cms->description, $cms->replace_keyword) @endphp
                        </div>
                    </div>
                    <button type="button" class="btn coursepg_enquiryform" onclick="formModal('{{ url(route('component.form')) }}?section=Enquire Form Top - course Page&title=Enquire Now&current_page={{ urlencode(url()->current()) }}&course_name={{$cms->breadcrumb_title}}')"> Enquire Now </button>
                    <div class="check_carriculam"><a href="#syllabuse" class="check_curriculum"> Check Curriculum </a></div>
                </div>
                <div class="show_desktopview col-3 width30 imagebox d-flex align-items-center justify-content-center">

                    @php
                        // Assuming $row->url contains the YouTube URL
                        if (strpos($detail->url, 'embed/') === false) {
                            $videoID = basename($detail->url);
                            $youtube_url_detail = 'https://youtu.be/embed/' . $videoID; // Corrected the concatenation
                        } else {
                            $youtube_url_detail = $detail->url; // URL already in the correct format
                        }
                    @endphp


                    <a href="{{ $youtube_url_detail }}" data-fancybox="gallery">
                        <img src="{{ asset('storage/' . $detail->other_thumbnail) }}"
                            class="img-fluid d-block w-100 lazyload" alt="">
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
                        @if (!empty($faq) && $faq->count() > 0)
                        <li class="menu-item">
                            <a class="menu-item-link" href="#faqs">FAQ</a>
                        </li>
                        @endif
                        
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
                        <h4 class="section_heading pb-lg-3 pb-0 text-center textcolor_blck mb-3">{{ $detail->key_title }} Key
                            Features
                        </h4>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-md-2">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <p> Instructor led live Training </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-md-2">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-laptop"></i>
                            </div>
                            <p> Hands-on Practical Training </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-md-2">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <p> Trainer Support on WhatsApp </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-md-2">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <p> Recorded lectures on LMS </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-md-2">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i aria-hidden="true" class="fas fa-book-open"></i>
                            </div>
                            <p> Access to Learning Portal </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-md-2">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-file"></i>
                            </div>
                            <p> Certificate from Attari classes </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-md-2">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <p> Access to forum for new Job Openings </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-md-2">
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

        <!---------============== overviews ====================----------------------->

        <section id="overviews" class="page-section overview py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 width70">
                        <h4 class="section_heading pb-3 text-center textcolor_blck">
                            {{ $detail->overview_section_heading }}
                        </h4>
                        <div>
                            @php echo ReplaceKeyword($detail->course_overview, $cms->replace_keyword) @endphp
                        </div>

                        @if (!empty($detail->faq))
                            <div class="accordion--container1 accordion_style1">

                                @php
                                    $course_faq = json_decode($detail->faq);
                                    $i = 1;
                                @endphp

                                @foreach ($course_faq as $faq1)
                                    @foreach ($faq1 as $title => $description)
                                        <li class="accordion1">
                                            <span> @php echo ReplaceKeyword($title, $cms->replace_keyword) @endphp <i class="fa fa-angle-up"></i>
                                            </span>
                                            <div class="contentsillabus_div">
                                                <div class="txt">
                                                    @php echo ReplaceKeyword($description, $cms->replace_keyword) @endphp
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endforeach

                            </div>
                        @endif


                    </div>
                    <div class="col-md-3 width30 position_sticky">
                        <div class="talktous_box">
                            <i class="fa-sharp fa-solid fa-phone"></i>
                            <p class="mb-3">Talk To Us</p> 
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



    <!---------===================== syllabas section ==================-------------------------------->


        <section id="syllabuse" class="page-section syllabus_section gradiant_bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 width70">
                        <h4 class="section_heading pb-3 textcolor_wht float_left"> {{ $detail->syllabus_section_heading }}
                        </h4>
                        
                        @if(!empty($detail->curriculum_pdf))
                            <div class="download_carricullam float_right"><a class=""
                                    href="{{ asset('storage/' . $detail->curriculum_pdf) }}" download="Curriculum"><img
                                        data-src="/assets/frontend/images/pdf.webp" class="lazyload" alt=""> Download
                                    Curriculum</a>
                            </div>
                        @endif


                        <div style="clear:both"></div>

                                @php $i = 1; @endphp

                                @if (!empty($syllabus))
                                    <div class="accordion--container1 accordion_style1">
        
                                        @foreach ($syllabus as $row)
                                            <li class="accordion1">
                                                <span> Module {{ $i }}:- @php echo ReplaceKeyword($row->title, $cms->replace_keyword) @endphp <i class="fa fa-angle-up"></i>
                                                </span>
                                                <div class="contentsillabus_div">
                                                    <div class="txt">
                                                        @php echo ReplaceKeyword($row->description, $cms->replace_keyword) @endphp
                                                    </div>
                                                </div>
                                            </li>
                                            @php $i++ @endphp
                                        @endforeach
        
        
                                    </div>
                                @endif



                    </div>

            <!----=============================== Syllabus Schema ==============------------------------------->

        @php
            $s = 1;    
        @endphp
        
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "ItemList",
                "itemListElement": [
                        @foreach ($syllabus as $row) @if($s <= 5)
                            {
                                "@type": "ListItem",
                                "position": {{ $s }},
                                "item": {
                                    "@type": "Course",
                                    "url":"{{ $meta_url }}#CourseContent",
                                    "name": "Module {{ $s }}:- @php echo ReplaceKeyword($row->title, $cms->replace_keyword) @endphp",
                                    "description": "@php echo schema_ReplaceKeyword($row->description, $cms->replace_keyword) @endphp",
                                    "provider": {
                                        "@type": "Organization",
                                        "name": "Attari Classes",
                                        "sameAs": "https://attariclasses.in/"
                                    }
                                }
                            },
                            @endif @php $s++ @endphp @endforeach
                ]
            }
        </script>



            <!----=============================== Syllabus Schema ==============------------------------------->  


                    <div class="col-md-3 width30 position_sticky">
                        <div class="bookdemofreeform_course gray_bgg1 margin-top55">
                            <h4 class="text-center">Book a <b>FREE</b> Demo</h4>

                            @include('frontend.component.common_form', [
                                'section' => 'Book a FREE Demo - Course Page',
                                'title'  => '',  
                                'course_name' => $cms->breadcrumb_title,
                                'msgfield' => '0',
                            ])
                        </div>
                    </div>


                </div>
            </div>
        </section>

    <!---------===================== syllabas section ==================-------------------------------->

        <!--Projects Covered section -->
        @if (!empty($project_covered))
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
                                                            <span
                                                                class="projects_covered__name">{{ $row->title }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-2">
                                                        <div class="projects_covered__icon">
                                                            <img src="{{ asset('storage/' . $row->icon) }}"
                                                                />
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

        @if (!empty($certificate))
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

                @if (!empty($video_review))
                    <div class="large-12 columns">
                        <div class="owl-carousel owl-theme video_testiminials">

                            @foreach ($video_review as $row)
                                <div class="item">
                                    <div class="testimonial_video">

                                        @php
                                            // Assuming $row->url contains the YouTube URL
                                            if (strpos($row->url, 'embed/') === false) {
                                                $videoID = basename($row->url);
                                                $youtube_url = 'https://youtu.be/embed/' . $videoID; // Corrected the concatenation
                                            } else {
                                                $youtube_url = $row->url; // URL already in the correct format
                                            }
                                        @endphp

                                        <a href="{{ $youtube_url }}" data-fancybox="gallery">
                                            <div class="pulse-button"></div>
                                            {{-- <img data-src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                                class="img-fluid d-block w-100 lazyload" alt=""> --}}

                                            <img data-src="{{ asset('storage/' . $row->image) }}"
                                                class="img-fluid d-block w-100 lazyload" alt="">

                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!--------------------- video Review -------------------------------------->

                    @php 
                    echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]'],[$meta_title,$meta_description,$meta_url], html_entity_decode($detail->video_section_schema));
                    @endphp

                    <!--------------------- video Review -------------------------------------->

                @endif


                @if (!empty($text_review))
                    <div class="large-12 columns mt-4 ">
                        <div class="owl-carousel owl-theme slider_content_dots">

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
                                                        @if ($row->type == 'google')
                                                            <a href="{{ $row->url }}"><i aria-hidden="true" class="fab fa-google-plus"></i></a>
                                                        @endif
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

                    <!--------------------- Text Review -------------------------------------->

                    @php 
                    echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]'],[$meta_title,$meta_description,$meta_url], html_entity_decode($detail->testimonials_section_schema));
                    @endphp

                    <!--------------------- Text Review -------------------------------------->

                @endif



            </div>
        </section>

        @if (!empty($batch))
            <section id="batch_shedule" class="page-section prje_cove_section light_gray_bg pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="section_heading pb-3 text-center"> {{ $detail->batch_section_heading }}</h4>
                        </div>

                        <div class="batch_shedule_box">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <h5 class="batch_subhed">{{ $batch->paced_title }}</h5>
                                    @php $paced_pointer = json_decode($batch->paced_pointer_list) @endphp
                                    <ul>
                                        @foreach ($paced_pointer as $row)
                                            <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <div class="button_main mt-2 mt-lg-0">
                                        <a href="https://lms.attariclasses.in/" target="_blank">Visit Video Portal</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="batch_shedule_box">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <h5 class="batch_subhed">{{ $batch->oc_title }} <spam>Preferred</spam>
                                    </h5>
                                    @php $oc_pointer = json_decode($batch->oc_pointer_list) @endphp
                                    <ul>
                                        @foreach ($oc_pointer as $row)
                                            <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp
                                            </li>
                                        @endforeach
                                    </ul>
                                    @php

                                        $batch_detail = json_decode($batch->batch_detail, true);
                                        $batch_dates = array_column($batch_detail, 'date');

                                        

                                        //sort($batch_dates);

                                        // Get the start and end dates
                                        $batch_start_date = reset($batch_dates); // Get the first date
                                        $batch_start_date2 = end($batch_dates); // Get the last date

                                        $batch_end_date = date('Y-m-d H:i:s', strtotime($batch_start_date . ' +5 weeks'));
                                        $batch_end_date2 = date('Y-m-d H:i:s', strtotime($batch_start_date2 . ' +5 weeks'));

                                    @endphp

                                    @if (!empty($batch_detail))
                                        <table class="batch_table table">
                                            <tbody>
                                                <tr class="pdd_14">
                                                    <td width="20"><div class="">DATE</div></td>
                                                    <td width="40"><div class="">SCHEDULE </div></td>
                                                    <td width="40"><div class="">TIME </div></td>
                                                </tr>
                                                @foreach ($batch_detail as $row)
                                                    <tr class="pdd_19">
                                                        <td><div class="">{{ formatDate($row['date']) }}</div></td>
                                                        <td><div class="">@php echo html_entity_decode($row['schedule']) @endphp<span
                                                                class="text_red">@php echo html_entity_decode($row['remark']) @endphp</span></div></td>
                                                        <td><div class="">@php echo html_entity_decode($row['time']) @endphp</div></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <div class="button_main getin_touch_bx">
                                        <h5 class="pb-2">Get In Touch to Avail <span>{{ $batch->off_percentage }} OFF</span></h5>

                                        <a onclick="formModal('{{ url(route('component.form')) }}?section=Online / Classroom - course Page&title=Book a Demo&current_page={{ urlencode(url()->current()) }}&course_name={{$cms->breadcrumb_title}}')">Book a Demo</a>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="batch_shedule_box">
                            <div class="row align-items-center">
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
                                        <a onclick="formModal('{{ url(route('component.form')) }}?section={{$batch->corp_title. ' - course Page'}}&current_page={{ urlencode(url()->current()) }}&title=Enquire Now&course_name={{$cms->breadcrumb_title}}')">Enquire Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </div>
    </section>

    <!-----------------================== Batch Schema =========================------------------------------>

    @php 
        echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]','[{start_date1}]','[{start_date2}]','[{end_date1}]','[{end_date2}]'],[$meta_title, $meta_description, $meta_url, $batch_start_date, $batch_start_date2, $batch_end_date, $batch_end_date2], html_entity_decode($detail->batch_section_schema));
    @endphp

    <!-----------------================== Batch Schema =========================------------------------------>

    @endif


    <!--Faq section-->

        <section id="faqs" class="page-section overview py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 width70">
                    @if (!empty($faq) && $faq->count() > 0)
                        <h2 class="section_heading pb-3 text-center textcolor_blck"> {{ $detail->faq_section_heading }} </h2>
                    @endif
  
                        @if (!empty($faq))
                            <div class="accordion--container accordion_style">

                                @foreach ($faq as $row)
                                    <li class="accordion">
                                        <span> @php echo ReplaceKeyword($row->question, $cms->replace_keyword) @endphp <i class="fa fa-angle-up"></i>
                                        </span>
                                        <ul>
                                            <div class="txt">
                                                @php echo ReplaceKeyword($row->answer, $cms->replace_keyword) @endphp
                                            </div>
                                        </ul>
                                    </li>
                                @endforeach


                            </div>
                    <!----================== Faq Schema ==================------------------->
                            @php
                                $f = 1;
                            @endphp
                            
                            <script type="application/ld+json">
                            {
                                "@context": "https://schema.org",
                                "@type": "FAQPage",
                                "mainEntity": [
                                    @foreach ($faq as $row)
                                        @if ($f <= 5)
                                            {
                                                "@type": "Question",
                                                "name": "@php echo ReplaceKeyword($row->question, $cms->replace_keyword) @endphp",
                                                "acceptedAnswer": {
                                                    "@type": "Answer",
                                                    "text": "@php echo ReplaceKeyword($row->answer, $cms->replace_keyword) @endphp"
                                                }
                                            }
                                            @if ($f < 5),
                                            @endif
                                        @endif
                                        @php
                                            $f++;
                                        @endphp
                                    @endforeach
                                ]
                            }
                            </script>

                    <!----================== Faq Schema ==================------------------->

                        @endif

                        <div class="gradiant_bg bookdemofreeform_course course_buttom_form mt-4">
                            <h4 class="text-center textcolor_wht pb-2">Book a <b>FREE</b> Demo</h4>
                            @include('frontend.component.common_form', [
                                'section' => 'Book a FREE Demo - Course Page',
                                'title'  => '',  
                                'course_name' => $cms->breadcrumb_title,
                                'msgfield' => '0',
                                'param1' => NULL,
                                'param2' => NULL,
                                'param3' => NULL,
                            ])
                        </div>


                    </div>
                    <div class="col-md-3 width30 position_sticky">
                        <div class="talktous_box margin-top55">
                            <i class="fa-sharp fa-solid fa-phone"></i>
                            <p class="mb-3">Talk To Us</p>
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

    @php
        $cms_course = DB::table('cms')->where('status', 1)->where('zone', 0)->whereNot('id', $cms->id)->get(['course_id', 'slug']);
    @endphp

    <section class="other_courses light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> Other Courses <strong>We Offer</strong></h4>
                    <div class="owl-carousel owl-theme other_courses_slider">

                        @foreach ($cms_course as $row)
                            <div class="item">
                                <div class="other_crs_box">
                                    <a href="{{ url(route('course.detail', ['slug' => $row->slug] )) }}">
                                        @php 
                                            $course = DB::table('courses')->where('id', $row->course_id)->get(['thumbnail'])->first();
                                        @endphp
                                        <img data-src="{{ asset('storage/' . $course->thumbnail) }}" class="lazyload" alt="">
                                    </a>
                                </div>
                            </div> 
                        @endforeach

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
                        @php

                            if($cms->course_id == '5'){
                                $course_name = 'VMware ';
                            } elseif ($cms->course_id == '7') {
                                $course_name = 'AWS';
                            } elseif ($cms->course_id == '8') {
                                $course_name = 'Azure';
                            } elseif ($cms->course_id == '9') {
                                $course_name = 'MCSE';
                            } else {
                                $course_name = 'CCNA';
                            }

                        @endphp

                        <h2>
                            Find {{ $course_name }} Certification Training Course in other Cities:
                        </h2>

                        @php
                            $cms_alias_city = DB::table('cms')->where('status', 1)->where('zone', 1)->where('course_id', $cms->course_id)->whereNot('id', $cms->id)->get(['alias', 'slug']);
                        @endphp

                        <ul class="">
                            @foreach ($cms_alias_city as $row)
                                <li>
                                    <a href="{{ url(route('course.detail', ['slug' => $row->slug] )) }}">
                                        <span>{{ $row->alias }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>


                    </div>

                    <div class="row" >
                        @php
                            $cms_alias_country = DB::table('cms')->where('status', 1)->where('zone', 2)->where('course_id', $cms->course_id)->whereNot('id', $cms->id)->get(['alias', 'slug']);
                        @endphp

                        @if(!empty($cms_alias_country))


                            @if($cms_alias_country->isNotEmpty())
                                <div class="location_box">
                                    <h2>
                                        Find {{ $course_name }} Certification Training Course in other Country:
                                    </h2>
                                    <ul class="elementor-icon-list-items">
                                        @foreach ($cms_alias_country as $row)
                                            <li>
                                                <a href="{{ url(route('course.detail', ['slug' => $row->slug])) }}">
                                                    <span>{{ $row->alias }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                            @endif
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>

    

    <!-------------=============== courses end =============== -------------------->

@endsection
