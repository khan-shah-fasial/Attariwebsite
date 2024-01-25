@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description',
    ' ')

@section('page.type', 'website')

@section('page.content')

    <!----------========== batch start ===============-------------------->

    <section class="sm-at banner1 batch_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrums_section paddtb80">
                        <h1 class="sm-aboutus">Batch Schedule</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url(route('about')) }}">Home</a></li>
                                <li class="breadcrumb-item"><a>»</a></li>
                                <li class="breadcrumb-item"><a><b>Batch Schedule</b></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="vm_nav batch_space" id="vm_nav">
        <div class="container">
            <nav>
                <ul>
                    <li> <a href="#vmware_batch">VMware Training Batch Schedule</a> </li>
                    <li> <a href="#aws_batch">AWS Training Batch Schedule</a> </li>
                    <li> <a href="#azure_batch">Azure Training Batch Schedule</a> </li>
                    <li> <a href="#mcse_batch">MCSE Training Batch Schedule</a> </li>
                    <li> <a href="#ccna_batch">CCNA Training Batch Schedule</a> </li>
                </ul>
            </nav>
        </div>
    </section>


<!---------=============================== VMware =========================-------------------->

    <!------------------========================== schedule ===============================-------------------->
    <section id="vmware_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>VMware Training Schedule</b></h4>
                </div>

                @php
                    $vmware_batch = DB::table('batches')->where('status', 1)->where('course_id','5')->get(['oc_pointer_list', 'batch_detail', 'status','course_id'])->first();
                    $oc_vm_pointer = json_decode($vmware_batch->oc_pointer_list);
                    $batch_vm_detail = json_decode($vmware_batch->batch_detail, true);
                @endphp

                @if(!empty($vmware_batch))
                    <div class="batch_shedule_box">
                        <div class="row">
                            <div class="col-md-9">

                                <ul>
                                    @foreach ($oc_vm_pointer as $row)
                                        <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp</li>
                                    @endforeach
                                </ul>
                                
                                @if(!empty($batch_vm_detail))
                                    <table class="batch_table table">
                                        <tbody>
                                            <tr>
                                                <td width="20">DATE</td>
                                                <td width="40">SCHEDULE </td>
                                                <td width="40">TIME </td>
                                            </tr>
                                            @foreach ($batch_vm_detail as $row)
                                                <tr>
                                                    <td>@php echo html_entity_decode($row['date']) @endphp</td>
                                                    <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">{{ $row['remark'] }}</span></td>
                                                    <td>@php echo html_entity_decode($row['time']) @endphp</td>
                                                </tr>
                                            @endforeach

                                            <tr>
                                                <td><b>24*7</b></td>
                                                <td>Self Paced Learning <span class="text_red">Live Recorded Lectures</span>
                                                </td>
                                                <td><b class="text_blue"><a href="https://lms.attariclasses.in/">Always
                                                            Available</a></b></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                @endif

                            </div>


                            <div class="col-md-3">
                                <div class="button_main getin_touch_bx paddingtop41">
                                    <h5>Get In Touch to Avail <span>21% OFF</span>
                                    </h5>
                                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                                        data-bs-target="#enquiry_modal"> Book a Demo</button>

                                    <a class="view_coursebtn"
                                        href="https://attariclasses.in/vmware-training-certification-online/"
                                        target="_blank">View Course Details <i aria-hidden="true"
                                            class="far fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>
    <!------------------========================== schedule ===============================-------------------->

    <!---------------------=========================== Testimonials ===============-------------------------->

    <section id="testimonials" class="testiminilas_sec gradiant_bg pt-5 pb-5 dot_clr_white">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">VMware Training Testimonials</h3>
    
    <!-----------============= video testimonials ===============---------------------------------->

    @php
        $video_vm_review = DB::table('video_reviews')->where('status', 1)->where('course_id','5')->get();
    @endphp
    
            @if(!empty($video_vm_review))
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme video_testiminials">

                        @foreach ($video_vm_review as $row)
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



    <!-----------============= video testimonials ===============---------------------------------->
    @php
        $text_vm_review = DB::table('text_reviews')->where('status', 1)->where('course_id','5')->get();
        $cms = DB::table('cms')->where('status', 1)->where('course_id','5')->get('replace_keyword')->first();
    @endphp
    
        @if(!empty($text_vm_review))
            <div class="large-12 columns slider_content_dots mt-4">
                <div class="owl-carousel owl-theme">

                    @foreach ($text_vm_review as $row)
    
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

    <!---------------------=========================== Testimonials ===============-------------------------->

<!------------=================================== VMware ==========================---------------------------->





<!-------================================== AWS =============================----------------------------------->

    <!------------------========================== schedule ===============================-------------------->
    <section id="aws_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>AWS Training Schedule</b></h4>
                </div>

                @php
                    $aws_batch = DB::table('batches')->where('status', 1)->where('course_id','7')->get(['oc_pointer_list', 'batch_detail', 'status','course_id'])->first();
                    $oc_aws_pointer = json_decode($aws_batch->oc_pointer_list);
                    $batch_aws_detail = json_decode($aws_batch->batch_detail, true);
                @endphp

                @if(!empty($aws_batch))
                    <div class="batch_shedule_box">
                        <div class="row">
                            <div class="col-md-9">

                                <ul>
                                    @foreach ($oc_aws_pointer as $row)
                                        <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp</li>
                                    @endforeach
                                </ul>
                                
                                @if(!empty($batch_aws_detail))
                                    <table class="batch_table table">
                                        <tbody>
                                            <tr>
                                                <td width="20">DATE</td>
                                                <td width="40">SCHEDULE </td>
                                                <td width="40">TIME </td>
                                            </tr>
                                            @foreach ($batch_aws_detail as $row)
                                                <tr>
                                                    <td>@php echo html_entity_decode($row['date']) @endphp</td>
                                                    <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">{{ $row['remark'] }}</span></td>
                                                    <td>@php echo html_entity_decode($row['time']) @endphp</td>
                                                </tr>
                                            @endforeach

                                            <tr>
                                                <td><b>24*7</b></td>
                                                <td>Self Paced Learning <span class="text_red">Live Recorded Lectures</span>
                                                </td>
                                                <td><b class="text_blue"><a href="https://lms.attariclasses.in/">Always
                                                            Available</a></b></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                @endif

                            </div>


                            <div class="col-md-3">
                                <div class="button_main getin_touch_bx paddingtop41">
                                    <h5>Get In Touch to Avail <span>21% OFF</span>
                                    </h5>
                                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                                        data-bs-target="#enquiry_modal"> Book a Demo</button>

                                    <a class="view_coursebtn"
                                        href="https://attariclasses.in/aws-training-certification-online/"
                                        target="_blank">View Course Details <i aria-hidden="true"
                                            class="far fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>
    <!------------------========================== schedule ===============================-------------------->

    <!---------------------=========================== Testimonials ===============-------------------------->

    <section id="testimonials" class="testiminilas_sec gradiant_bg pt-5 pb-5 dot_clr_white">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">AWS Cloud Training Testimonials</h3>
    
    <!-----------============= video testimonials ===============---------------------------------->

    @php
        $video_aws_review = DB::table('video_reviews')->where('status', 1)->where('course_id','7')->get();
    @endphp
    
            @if(!empty($video_aws_review))
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme video_testiminials">

                        @foreach ($video_aws_review as $row)
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



    <!-----------============= video testimonials ===============---------------------------------->
    @php
        $text_aws_review = DB::table('text_reviews')->where('status', 1)->where('course_id','7')->get();
        $cms = DB::table('cms')->where('status', 1)->where('course_id','7')->get('replace_keyword')->first();
    @endphp
    
        @if(!empty($text_aws_review))
            <div class="large-12 columns slider_content_dots mt-4">
                <div class="owl-carousel owl-theme">

                    @foreach ($text_aws_review as $row)
    
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

    <!---------------------=========================== Testimonials ===============-------------------------->

<!-----------------=============================== AWS ======================================------------------------>







<!------------===================== azure =================================---------------------------->


    <!------------------========================== schedule ===============================-------------------->
    <section id="azure_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>Azure Training Schedule</b></h4>
                </div>

                @php
                    $azure_batch = DB::table('batches')->where('status', 1)->where('course_id','8')->get(['oc_pointer_list', 'batch_detail', 'status','course_id'])->first();
                    $oc_azure_pointer = json_decode($azure_batch->oc_pointer_list);
                    $batch_azure_detail = json_decode($azure_batch->batch_detail, true);
                @endphp

                @if(!empty($azure_batch))
                    <div class="batch_shedule_box">
                        <div class="row">
                            <div class="col-md-9">

                                <ul>
                                    @foreach ($oc_azure_pointer as $row)
                                        <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp</li>
                                    @endforeach
                                </ul>
                                
                                @if(!empty($batch_azure_detail))
                                    <table class="batch_table table">
                                        <tbody>
                                            <tr>
                                                <td width="20">DATE</td>
                                                <td width="40">SCHEDULE </td>
                                                <td width="40">TIME </td>
                                            </tr>
                                            @foreach ($batch_azure_detail as $row)
                                                <tr>
                                                    <td>@php echo html_entity_decode($row['date']) @endphp</td>
                                                    <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">{{ $row['remark'] }}</span></td>
                                                    <td>@php echo html_entity_decode($row['time']) @endphp</td>
                                                </tr>
                                            @endforeach

                                            <tr>
                                                <td><b>24*7</b></td>
                                                <td>Self Paced Learning <span class="text_red">Live Recorded Lectures</span>
                                                </td>
                                                <td><b class="text_blue"><a href="https://lms.attariclasses.in/">Always
                                                            Available</a></b></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                @endif

                            </div>


                            <div class="col-md-3">
                                <div class="button_main getin_touch_bx paddingtop41">
                                    <h5>Get In Touch to Avail <span>21% OFF</span>
                                    </h5>
                                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                                        data-bs-target="#enquiry_modal"> Book a Demo</button>

                                    <a class="view_coursebtn"
                                        href="https://attariclasses.in/azure-training-certification-online/"
                                        target="_blank">View Course Details <i aria-hidden="true"
                                            class="far fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>
    <!------------------========================== schedule ===============================-------------------->

    <!---------------------=========================== Testimonials ===============-------------------------->

    <section id="testimonials" class="testiminilas_sec gradiant_bg pt-5 pb-5 dot_clr_white">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">Azure Training Testimonials</h3>
    
    <!-----------============= video testimonials ===============---------------------------------->

    @php
        $video_azure_review = DB::table('video_reviews')->where('status', 1)->where('course_id','8')->get();
    @endphp
    
            @if(!empty($video_azure_review))
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme video_testiminials">

                        @foreach ($video_azure_review as $row)
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



    <!-----------============= video testimonials ===============---------------------------------->
    @php
        $text_azure_review = DB::table('text_reviews')->where('status', 1)->where('course_id','8')->get();
        $cms = DB::table('cms')->where('status', 1)->where('course_id','8')->get('replace_keyword')->first();
    @endphp
    
        @if(!empty($text_azure_review))
            <div class="large-12 columns slider_content_dots mt-4">
                <div class="owl-carousel owl-theme">

                    @foreach ($text_azure_review as $row)
    
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

    <!---------------------=========================== Testimonials ===============-------------------------->

<!-------======================= azure =================----------------------------->


    <section id="mcse_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>MCSE Training Schedule</b></h4>
                </div>

                <div class="batch_shedule_box">
                    <div class="row">
                        <div class="col-md-9">
                            <ul>
                                <li>
                                    <i aria-hidden="true" class="far fa-check-circle"></i> <b>Free DEMO lecture</b>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="far fa-check-circle"></i>
                                    40+ Hours of live Insturctor led training
                                </li>
                                <li>
                                    <i aria-hidden="true" class="far fa-check-circle"></i> Perform live practicals with
                                    the the Trainer
                                </li>
                                <li>
                                    <i aria-hidden="true" class="far fa-check-circle"></i> Get Trainer Support on WhatsApp
                                </li>
                            </ul>
                            <table class="batch_table table">
                                <tbody>
                                    <tr>
                                        <td width="20">DATE</td>
                                        <td width="40">SCHEDULE </td>
                                        <td width="40">TIME </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>30th JULY</b>
                                        </td>
                                        <td>
                                            <b>SAT &amp; SUN (6 WEEKS) </b>
                                            <span class="text_red">Upcoming Weekend Batch</span>
                                        </td>
                                        <td>
                                            <b>8:00 AM to 12:00 PM (IST)</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24th JUNE</td>
                                        <td>SAT &amp; SUN (6 WEEKS) <span class="text_blue">Batch Started</span>
                                        </td>
                                        <td>1:00 PM to 5:00 PM (IST)</td>
                                    </tr>

                                    <tr>
                                        <td><b>24*7</b></td>
                                        <td>Self Paced Learning <span class="text_red">Live Recorded Lectures</span>
                                        </td>
                                        <td><b class="text_blue"><a href="">Always Available</a></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <div class="button_main getin_touch_bx">
                                <h5>Get In Touch to Avail <span>20% OFF</span>
                                </h5>
                                <button type="button" class="btn bookfreedemo_button reviews_demo"
                                    data-bs-toggle="modal" data-bs-target="#enquiry_modal"> Book a Demo</button>
                                <a class="view_coursebtn"
                                    href="https://attariclasses.in/vmware-training-certification-online/"
                                    target="_blank">View Course Details <i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="testimonials" class="testiminilas_sec gradiant_bg pt-5 pb-5 dot_clr_white">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">MCSE Training Testimonials</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme video_testiminials">
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/embed/T9PrVAio31k" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/amar_pandey_review.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/embed/Gx9iRvGxYsg" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/amar_pandey_review_2.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/embed/9y-Oiet2HBE" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/Sohail-MCSE.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/embed/EqTLrlzQwkI" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/Vinayak-CCNA.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-12 columns slider_content_dots mt-4">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Badal Vishwakarma</span>
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
                                <div class="testimonial__text">I attended the VMware online training of Attari classes. It
                                    was a really awesome experience. Especially trainer Mr. Maqsood Sheikha gives training
                                    with superb example. His examples and way of teaching make your concepts very clear.
                                    Also, online LMS Tool is the best tool to revise concepts at any time. I am thankful to
                                    Maqsood Sir and Attari classes for their efforts.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/nityanand_img.jpg"
                                                class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Nityanand Pandey</span>
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
                                <div class="testimonial__text">I joined VMware at attari class. Attari Classes online
                                    training is 1 of the best way to improve knowledge and upgrade skill. The trainer Mr.
                                    Maqsood sir excellent in their fields and the way they explain the topics is amazing,
                                    specially example. The hard topics explained in so simple way by giving daily life
                                    examples. I will recommend all the new aspirants to join these classes if really want to
                                    have in-depth knowledge and confidence in the subject.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/vinay_yadau_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Vinay Yadav</span>
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
                                <div class="testimonial__text">One can blindly choose Attari Classes for VMware training. I
                                    have attended Online VMware vSphere training. It doesn’t matter you are attending
                                    offline lecture or online lecture when you have excellent trainer like Mr. Maqsood
                                    Sheikhas. He is very knowledgeable and a good trainer. The way he teaches is a fun and
                                    you will never get bored during lectures. <br> The most interesting and patent feature
                                    of Attari classes is LMS, which is beneficial for us when our online lectures got missed
                                    for any reasons then we can do theory and practical multiple times by watching recorded
                                    videos (LMS). </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/asif_img.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Asif</span>
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
                                <div class="testimonial__text">Have completed the online VMware class in Attari class.It
                                    was great experience I specially want to say thanks to Maqsood sir .His way of teaching
                                    is very understandable. The new one thing they have provide the LMS (Learning Management
                                    System ) in which they have uploaded all lectures recording is very helpful to do
                                    practice and and for the revision of any topic at any time .Thank you sir and Attari
                                    class .</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/udaysinh_img.png" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Udaysinh patil</span>
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
                                <div class="testimonial__text">VMware training at Attari Classes online. Maqsood Sir
                                    knowledge and course delivery is commendable. He ensures each student understand every
                                    concept, gives excellent examples, all hands on training. Attari Classes LMS is a great
                                    portal they have where you can watch videos and do lab trainings from recorded lectures.
                                    I thoroughly enjoyed the training and would highly recommend Attari Classes to everyone.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Anand Jade</span>
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
                                <div class="testimonial__text">I have completed the VMware online training of Attari
                                    Classes. It was a great learning experience by Masqood Sir who is having outstanding
                                    teaching skills with practical examples which are always relates with life and the best
                                    thing here is Live Practical with trainer. Attari classes provides LMS portal which is
                                    great for practice as well as for understanding remaining portion.</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Anand Jade</span>
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
                                <div class="testimonial__text">I have completed the VMware online training of Attari
                                    Classes. It was a great learning experience by Masqood Sir who is having outstanding
                                    teaching skills with practical examples which are always relates with life and the best
                                    thing here is Live Practical with trainer. Attari classes provides LMS portal which is
                                    great for practice as well as for understanding remaining portion.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="ccna_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>CCNA Training Schedule</b></h4>
                </div>

                <div class="batch_shedule_box">
                    <div class="row">
                        <div class="col-md-9">
                            <ul>
                                <li>
                                    <i aria-hidden="true" class="far fa-check-circle"></i> <b>Free DEMO lecture</b>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="far fa-check-circle"></i>
                                    40+ Hours of live Insturctor led training
                                </li>
                                <li>
                                    <i aria-hidden="true" class="far fa-check-circle"></i> Perform live practicals with
                                    the the Trainer
                                </li>
                                <li>
                                    <i aria-hidden="true" class="far fa-check-circle"></i> Get Trainer Support on WhatsApp
                                </li>
                            </ul>
                            <table class="batch_table table">
                                <tbody>
                                    <tr>
                                        <td width="20">DATE</td>
                                        <td width="40">SCHEDULE </td>
                                        <td width="40">TIME </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>30th JULY</b>
                                        </td>
                                        <td>
                                            <b>SAT &amp; SUN (6 WEEKS) </b>
                                            <span class="text_red">Upcoming Weekend Batch</span>
                                        </td>
                                        <td>
                                            <b>8:00 AM to 12:00 PM (IST)</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24th JUNE</td>
                                        <td>SAT &amp; SUN (6 WEEKS) <span class="text_blue">Batch Started</span>
                                        </td>
                                        <td>1:00 PM to 5:00 PM (IST)</td>
                                    </tr>

                                    <tr>
                                        <td><b>24*7</b></td>
                                        <td>Self Paced Learning <span class="text_red">Live Recorded Lectures</span>
                                        </td>
                                        <td><b class="text_blue"><a href="">Always Available</a></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <div class="button_main getin_touch_bx">
                                <h5>Get In Touch to Avail <span>20% OFF</span>
                                </h5>
                                <button type="button" class="btn bookfreedemo_button reviews_demo"
                                    data-bs-toggle="modal" data-bs-target="#enquiry_modal"> Book a Demo</button>
                                <a class="view_coursebtn"
                                    href="https://attariclasses.in/vmware-training-certification-online/"
                                    target="_blank">View Course Details <i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="testimonials" class="testiminilas_sec gradiant_bg pt-5 pb-5 dot_clr_white">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">CCNA Training Testimonials</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme video_testiminials">
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/embed/T9PrVAio31k" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/amar_pandey_review.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/embed/Gx9iRvGxYsg" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/amar_pandey_review_2.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/embed/9y-Oiet2HBE" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/Sohail-MCSE.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/embed/EqTLrlzQwkI" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/Vinayak-CCNA.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-12 columns slider_content_dots mt-4">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Badal Vishwakarma</span>
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
                                <div class="testimonial__text">I attended the VMware online training of Attari classes. It
                                    was a really awesome experience. Especially trainer Mr. Maqsood Sheikha gives training
                                    with superb example. His examples and way of teaching make your concepts very clear.
                                    Also, online LMS Tool is the best tool to revise concepts at any time. I am thankful to
                                    Maqsood Sir and Attari classes for their efforts.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/nityanand_img.jpg"
                                                class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Nityanand Pandey</span>
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
                                <div class="testimonial__text">I joined VMware at attari class. Attari Classes online
                                    training is 1 of the best way to improve knowledge and upgrade skill. The trainer Mr.
                                    Maqsood sir excellent in their fields and the way they explain the topics is amazing,
                                    specially example. The hard topics explained in so simple way by giving daily life
                                    examples. I will recommend all the new aspirants to join these classes if really want to
                                    have in-depth knowledge and confidence in the subject.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/vinay_yadau_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Vinay Yadav</span>
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
                                <div class="testimonial__text">One can blindly choose Attari Classes for VMware training. I
                                    have attended Online VMware vSphere training. It doesn’t matter you are attending
                                    offline lecture or online lecture when you have excellent trainer like Mr. Maqsood
                                    Sheikhas. He is very knowledgeable and a good trainer. The way he teaches is a fun and
                                    you will never get bored during lectures. <br> The most interesting and patent feature
                                    of Attari classes is LMS, which is beneficial for us when our online lectures got missed
                                    for any reasons then we can do theory and practical multiple times by watching recorded
                                    videos (LMS). </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/asif_img.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Asif</span>
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
                                <div class="testimonial__text">Have completed the online VMware class in Attari class.It
                                    was great experience I specially want to say thanks to Maqsood sir .His way of teaching
                                    is very understandable. The new one thing they have provide the LMS (Learning Management
                                    System ) in which they have uploaded all lectures recording is very helpful to do
                                    practice and and for the revision of any topic at any time .Thank you sir and Attari
                                    class .</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/udaysinh_img.png" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Udaysinh patil</span>
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
                                <div class="testimonial__text">VMware training at Attari Classes online. Maqsood Sir
                                    knowledge and course delivery is commendable. He ensures each student understand every
                                    concept, gives excellent examples, all hands on training. Attari Classes LMS is a great
                                    portal they have where you can watch videos and do lab trainings from recorded lectures.
                                    I thoroughly enjoyed the training and would highly recommend Attari Classes to everyone.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Anand Jade</span>
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
                                <div class="testimonial__text">I have completed the VMware online training of Attari
                                    Classes. It was a great learning experience by Masqood Sir who is having outstanding
                                    teaching skills with practical examples which are always relates with life and the best
                                    thing here is Live Practical with trainer. Attari classes provides LMS portal which is
                                    great for practice as well as for understanding remaining portion.</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-6 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Anand Jade</span>
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
                                <div class="testimonial__text">I have completed the VMware online training of Attari
                                    Classes. It was a great learning experience by Masqood Sir who is having outstanding
                                    teaching skills with practical examples which are always relates with life and the best
                                    thing here is Live Practical with trainer. Attari classes provides LMS portal which is
                                    great for practice as well as for understanding remaining portion.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-------------=============== batch end =============== -------------------->

@endsection
