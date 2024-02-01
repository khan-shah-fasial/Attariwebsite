@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description', ' ')

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
                    $vmware_batch = DB::table('batches')->where('status', 1)->where('course_id','5')->get(['oc_pointer_list', 'batch_detail', 'off_percentage', 'status','course_id'])->first();
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
                                                    <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">@php echo html_entity_decode($row['remark']) @endphp</span></td>
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
                                    <h5>Get In Touch to Avail <span>{{ $vmware_batch->off_percentage }} OFF</span>
                                    </h5>
                                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                                        data-bs-target="#enquiry_modal"> Book a Demo</button>

                                    <a class="view_coursebtn"
                                        href="{{ url('vmware-training-certification-online') }}"
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

                                    {{--@php
                                        // Use parse_url to get the path from the URL
                                        $path = parse_url($row->url, PHP_URL_PATH);

                                        $parts = explode('/', trim($path, '/'));
                                        $videoId = end($parts);
                                    @endphp --}}

                                    <a href="{{ $row->url }}" data-fancybox="gallery">
                                        <div class="pulse-button"></div>
                                        {{--<img data-src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                            class="img-fluid d-block w-100 lazyload" alt=""> --}}
                                        <img data-src="{{ asset('storage/' . $row->image) }}"
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
                                                @if($row->type == 'google')
                                                    <i aria-hidden="true" class="fab fa-google-plus"></i>
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
                    $aws_batch = DB::table('batches')->where('status', 1)->where('course_id','7')->get(['oc_pointer_list', 'batch_detail', 'off_percentage', 'status','course_id'])->first();
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
                                                    <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">@php echo html_entity_decode($row['remark']) @endphp</span></td>
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
                                    <h5>Get In Touch to Avail <span>{{ $aws_batch->off_percentage }} OFF</span>
                                    </h5>
                                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                                        data-bs-target="#enquiry_modal"> Book a Demo</button>

                                    <a class="view_coursebtn"
                                        href="{{ url('aws-certification-training-online') }}"
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

                                    {{--@php
                                        // Use parse_url to get the path from the URL
                                        $path = parse_url($row->url, PHP_URL_PATH);

                                        $parts = explode('/', trim($path, '/'));
                                        $videoId = end($parts);
                                    @endphp --}}

                                    <a href="{{ $row->url }}" data-fancybox="gallery">
                                        <div class="pulse-button"></div>
                                        {{--<img data-src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                            class="img-fluid d-block w-100 lazyload" alt=""> --}}
                                        <img data-src="{{ asset('storage/' . $row->image) }}"
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
                                                @if($row->type == 'google')
                                                    <i aria-hidden="true" class="fab fa-google-plus"></i>
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
                    $azure_batch = DB::table('batches')->where('status', 1)->where('course_id','8')->get(['oc_pointer_list', 'batch_detail','off_percentage','status','course_id'])->first();
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
                                                    <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">@php echo html_entity_decode($row['remark']) @endphp</span></td>
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
                                    <h5>Get In Touch to Avail <span>{{ $azure_batch->off_percentage }} OFF</span>
                                    </h5>
                                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                                        data-bs-target="#enquiry_modal"> Book a Demo</button>

                                    <a class="view_coursebtn"
                                        href="{{ url('microsoft-azure-certification-training-online') }}"
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

                                    {{--@php
                                        // Use parse_url to get the path from the URL
                                        $path = parse_url($row->url, PHP_URL_PATH);

                                        $parts = explode('/', trim($path, '/'));
                                        $videoId = end($parts);
                                    @endphp --}}

                                    <a href="{{ $row->url }}" data-fancybox="gallery">
                                        <div class="pulse-button"></div>
                                        {{--<img data-src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                            class="img-fluid d-block w-100 lazyload" alt=""> --}}
                                        <img data-src="{{ asset('storage/' . $row->image) }}"
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
                                                @if($row->type == 'google')
                                                    <i aria-hidden="true" class="fab fa-google-plus"></i>
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
        @endif
      
        </div>
    </section>

    <!---------------------=========================== Testimonials ===============-------------------------->

<!-------======================= azure =================----------------------------->




<!-------================================== MCSE =============================----------------------------------->

    <!------------------========================== schedule ===============================-------------------->
    <section id="mcse_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>MCSE Training Schedule</b></h4>
                </div>

                @php
                    $mcse_batch = DB::table('batches')->where('status', 1)->where('course_id','9')->get(['oc_pointer_list', 'batch_detail', 'off_percentage', 'status','course_id'])->first();
                    $oc_mcse_pointer = json_decode($mcse_batch->oc_pointer_list);
                    $batch_mcse_detail = json_decode($mcse_batch->batch_detail, true);
                @endphp

                @if(!empty($mcse_batch))
                    <div class="batch_shedule_box">
                        <div class="row">
                            <div class="col-md-9">

                                <ul>
                                    @foreach ($oc_mcse_pointer as $row)
                                        <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp</li>
                                    @endforeach
                                </ul>
                                
                                @if(!empty($batch_mcse_detail))
                                    <table class="batch_table table">
                                        <tbody>
                                            <tr>
                                                <td width="20">DATE</td>
                                                <td width="40">SCHEDULE </td>
                                                <td width="40">TIME </td>
                                            </tr>
                                            @foreach ($batch_mcse_detail as $row)
                                                <tr>
                                                    <td>@php echo html_entity_decode($row['date']) @endphp</td>
                                                    <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">@php echo html_entity_decode($row['remark']) @endphp</span></td>
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
                                    <h5>Get In Touch to Avail <span>{{ $mcse_batch->off_percentage }} OFF</span>
                                    </h5>
                                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                                        data-bs-target="#enquiry_modal"> Book a Demo</button>

                                    <a class="view_coursebtn"
                                        href="{{ url('mcsa-mcse-windows-server-training-online') }}"
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
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">MCSE Cloud Training Testimonials</h3>
    
    <!-----------============= video testimonials ===============---------------------------------->

    @php
        $video_mcse_review = DB::table('video_reviews')->where('status', 1)->where('course_id','9')->get();
    @endphp
    
            @if(!empty($video_mcse_review))
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme video_testiminials">

                        @foreach ($video_mcse_review as $row)
                            <div class="item">
                                <div class="testimonial_video">

                                    {{--@php
                                        // Use parse_url to get the path from the URL
                                        $path = parse_url($row->url, PHP_URL_PATH);

                                        $parts = explode('/', trim($path, '/'));
                                        $videoId = end($parts);
                                    @endphp --}}

                                    <a href="{{ $row->url }}" data-fancybox="gallery">
                                        <div class="pulse-button"></div>
                                        {{--<img data-src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                            class="img-fluid d-block w-100 lazyload" alt=""> --}}
                                        <img data-src="{{ asset('storage/' . $row->image) }}"
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
        $text_mcse_review = DB::table('text_reviews')->where('status', 1)->where('course_id','9')->get();
        $cms = DB::table('cms')->where('status', 1)->where('course_id','9')->get('replace_keyword')->first();
    @endphp
    
        @if(!empty($text_mcse_review))
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
                                                @if($row->type == 'google')
                                                    <i aria-hidden="true" class="fab fa-google-plus"></i>
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
        @endif
      
        </div>
    </section>

    <!---------------------=========================== Testimonials ===============-------------------------->

<!-----------------=============================== MCSE ======================================------------------------>



<!-------================================== CCNA =============================----------------------------------->

    <!------------------========================== schedule ===============================-------------------->
    <section id="ccna_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>CCNA Training Schedule</b></h4>
                </div>

                @php
                    $ccna_batch = DB::table('batches')->where('status', 1)->where('course_id','10')->get(['oc_pointer_list', 'batch_detail', 'off_percentage', 'status','course_id'])->first();
                    $oc_ccna_pointer = json_decode($ccna_batch->oc_pointer_list);
                    $batch_ccna_detail = json_decode($ccna_batch->batch_detail, true);
                @endphp

                @if(!empty($ccna_batch))
                    <div class="batch_shedule_box">
                        <div class="row">
                            <div class="col-md-9">

                                <ul>
                                    @foreach ($oc_ccna_pointer as $row)
                                        <li><i aria-hidden="true" class="far fa-check-circle"></i> @php echo html_entity_decode($row) @endphp</li>
                                    @endforeach
                                </ul>
                                
                                @if(!empty($batch_ccna_detail))
                                    <table class="batch_table table">
                                        <tbody>
                                            <tr>
                                                <td width="20">DATE</td>
                                                <td width="40">SCHEDULE </td>
                                                <td width="40">TIME </td>
                                            </tr>
                                            @foreach ($batch_ccna_detail as $row)
                                                <tr>
                                                    <td>@php echo html_entity_decode($row['date']) @endphp</td>
                                                    <td>@php echo html_entity_decode($row['schedule']) @endphp<span class="text_red">@php echo html_entity_decode($row['remark']) @endphp</span></td>
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
                                    <h5>Get In Touch to Avail <span>{{ $ccna_batch->off_percentage }} OFF</span>
                                    </h5>
                                    <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                                        data-bs-target="#enquiry_modal"> Book a Demo</button>

                                    <a class="view_coursebtn"
                                        href="{{ url('ccna-training-certification-online') }}"
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
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">CCNA Cloud Training Testimonials</h3>
    
    <!-----------============= video testimonials ===============---------------------------------->

    @php
        $video_ccna_review = DB::table('video_reviews')->where('status', 1)->where('course_id','10')->get();
    @endphp
    
            @if(!empty($video_ccna_review))
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme video_testiminials">

                        @foreach ($video_ccna_review as $row)
                            <div class="item">
                                <div class="testimonial_video">

                                    {{--@php
                                        // Use parse_url to get the path from the URL
                                        $path = parse_url($row->url, PHP_URL_PATH);

                                        $parts = explode('/', trim($path, '/'));
                                        $videoId = end($parts);
                                    @endphp --}}

                                    <a href="{{ $row->url }}" data-fancybox="gallery">
                                        <div class="pulse-button"></div>
                                        {{--<img data-src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                            class="img-fluid d-block w-100 lazyload" alt=""> --}}
                                        <img data-src="{{ asset('storage/' . $row->image) }}"
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
        $text_ccna_review = DB::table('text_reviews')->where('status', 1)->where('course_id','10')->get();
        $cms = DB::table('cms')->where('status', 1)->where('course_id','10')->get('replace_keyword')->first();
    @endphp
    
        @if(!empty($text_ccna_review))
            <div class="large-12 columns slider_content_dots mt-4">
                <div class="owl-carousel owl-theme">

                    @foreach ($text_ccna_review as $row)
    
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
                                                @if($row->type == 'google')
                                                    <i aria-hidden="true" class="fab fa-google-plus"></i>
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
        @endif
      
        </div>
    </section>

    <!---------------------=========================== Testimonials ===============-------------------------->

<!-----------------=============================== CCNA ======================================------------------------>


<!-------------=============== batch end =============== -------------------->

@endsection
