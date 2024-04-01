@extends('frontend.layouts.app')

@php
    $meta_title = '';
    $meta_description = '';
    $meta_url = url()->current();
@endphp


@section('page.title', 'Reviews')

@section('page.description', 'Check out for Attari Classes reviews.')

@section('page.type', 'website')

@section('page.content')

    <!----------========== reviews start ===============-------------------->

    <section class="reviews_banner">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="breadcrums_section paddtb80">
                        <h1 class="sm-aboutus">Reviews</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                <li class="breadcrumb-item"><a>»</a></li>
                                <li class="breadcrumb-item"><a><b>Reviews</b></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-----------------------Reviews Section------------------------------>


    <section id="testimonials" class="testiminilas_sec pt-lg-5 pb-lg-5 pt-5 pb-5">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">VMwere Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme slider_content_dots">


                @php
                    $text_vm_review = DB::table('text_reviews')->where('status', 1)->where('course_id','5')->where('type','google')->get();

                    $course_schema_vm = DB::table('courses')->where('status', 1)->where('id','5')->get(['testimonials_section_schema'])->first();
                @endphp

                @if(!empty($text_vm_review))
                    @foreach ($text_vm_review as $row)
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial__header">
                                    <div class="row">
                                        <div class="col-lg-9 col-10">
                                            <div class="testimonial__image">
                                                <img data-src="{{ asset('storage/' . $row->thumbnail) }}" class="img-fluid d-block w-100 lazyload"
                                                    alt>
                                                <span class="testimonial__name">{{ $row->name }}</span>
                                            </div>
                                            <span>{{ $row->profile }}</span>
                                        </div>
                                        <div class="col-lg-3 col-2">
                                            <div class="testimonial__icon">
                                                <i aria-hidden="true" class="fab fa-google-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <div class="testimonial__text">
                                        @php echo html_entity_decode($row->description) @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

        <!--------------------- Text vm Review -------------------------------------->

        @php 
            echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]'],[$meta_title,$meta_description,$meta_url], html_entity_decode($course_schema_vm->testimonials_section_schema));
        @endphp

        <!--------------------- Text vm Review -------------------------------------->


                @endif

                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn mt-4 mt-lg-0">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">

                    @include('frontend.component.modal_form', [
                        'section' => 'VMwere Google Reviews - Reviews Page',
                        'form' => '1',
                        'title' => 'Book a FREE Demo'
                    ])

                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal1"> Book a Demo</button>
                </div>
            </div>
        </div>
    </section>




    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 gray_bgg1">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">AWS Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme slider_content_dots">

                @php
                    $text_aws_review = DB::table('text_reviews')->where('status', 1)->where('course_id','7')->where('type','google')->get();

                    $course_schema_aws = DB::table('courses')->where('status', 1)->where('id','7')->get(['testimonials_section_schema'])->first();
                @endphp

                @if(!empty($text_aws_review))
                    @foreach ($text_aws_review as $row)
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial__header">
                                    <div class="row">
                                        <div class="col-lg-9 col-10">
                                            <div class="testimonial__image">
                                                <img data-src="{{ asset('storage/' . $row->thumbnail) }}" class="img-fluid d-block w-100 lazyload"
                                                    alt>
                                                <span class="testimonial__name">{{ $row->name }}</span>
                                            </div>
                                            <span>{{ $row->profile }}</span>
                                        </div>
                                        <div class="col-lg-3 col-2">
                                            <div class="testimonial__icon">
                                                <i aria-hidden="true" class="fab fa-google-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <div class="testimonial__text">
                                        @php echo html_entity_decode($row->description) @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

    <!--------------------- Text aws Review -------------------------------------->

        @php 
            echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]'],[$meta_title,$meta_description,$meta_url], html_entity_decode($course_schema_aws->testimonials_section_schema));
        @endphp

    <!--------------------- Text aws Review -------------------------------------->


                @endif

                </div>
            </div>


            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn mt-4 mt-lg-0">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none ">

                    @include('frontend.component.modal_form', [
                        'section' => 'AWS Google Reviews - Reviews Page',
                        'form' => '2',
                        'title' => 'Book a FREE Demo'
                    ])

                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal2"> Book a Demo</button>
                </div>
            </div>

        </div>
    </section>

    <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
        <div class="container">
            @include('frontend.component.book_free_Demo_form',[
                'section' => 'Book a Free Demo - Mobile View',
            ])
        </div>
    </section>

    <section id="testimonials" class="testiminilas_sec pt-5 pb-5">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">Azure Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme slider_content_dots">

                @php
                    $text_azure_review = DB::table('text_reviews')->where('status', 1)->where('course_id','8')->where('type','google')->get();

                    $course_schema_azure = DB::table('courses')->where('status', 1)->where('id','8')->get(['testimonials_section_schema'])->first();
                @endphp

                @if(!empty($text_azure_review))
                    @foreach ($text_azure_review as $row)
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial__header">
                                    <div class="row">
                                        <div class="col-lg-9 col-10">
                                            <div class="testimonial__image">
                                                <img data-src="{{ asset('storage/' . $row->thumbnail) }}" class="img-fluid d-block w-100 lazyload"
                                                    alt>
                                                <span class="testimonial__name">{{ $row->name }}</span>
                                            </div>
                                            <span>{{ $row->profile }}</span>
                                        </div>
                                        <div class="col-lg-3 col-2">
                                            <div class="testimonial__icon">
                                                <i aria-hidden="true" class="fab fa-google-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <div class="testimonial__text">
                                        @php echo html_entity_decode($row->description) @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

<!--------------------- Text azure Review -------------------------------------->

    @php 
        echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]'],[$meta_title,$meta_description,$meta_url], html_entity_decode($course_schema_azure->testimonials_section_schema));
    @endphp

<!--------------------- Text azure Review -------------------------------------->



                @endif

                </div>
            </div>


            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn mt-4 mt-lg-0">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">

                    @include('frontend.component.modal_form', [
                        'section' => 'Azure Google Reviews - Reviews Page',
                        'form' => '3',
                        'title' => 'Book a FREE Demo'
                    ])

                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal3"> Book a Demo</button>
                </div>
            </div>

        </div>
    </section>



    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 gray_bgg1">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">MCSE Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme slider_content_dots">

                @php
                    $text_mcse_review = DB::table('text_reviews')->where('status', 1)->where('course_id','9')->where('type','google')->get();

                    $course_schema_mcse = DB::table('courses')->where('status', 1)->where('id','9')->get(['testimonials_section_schema'])->first();
                @endphp

                @if(!empty($text_mcse_review))
                    @foreach ($text_mcse_review as $row)
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial__header">
                                    <div class="row">
                                        <div class="col-lg-9 col-10">
                                            <div class="testimonial__image">
                                                <img data-src="{{ asset('storage/' . $row->thumbnail) }}" class="img-fluid d-block w-100 lazyload"
                                                    alt>
                                                <span class="testimonial__name">{{ $row->name }}</span>
                                            </div>
                                            <span>{{ $row->profile }}</span>
                                        </div>
                                        <div class="col-lg-3 col-2">
                                            <div class="testimonial__icon">
                                                <i aria-hidden="true" class="fab fa-google-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <div class="testimonial__text">
                                        @php echo html_entity_decode($row->description) @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

<!--------------------- Text mcse Review -------------------------------------->

    @php 
        echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]'],[$meta_title,$meta_description,$meta_url], html_entity_decode($course_schema_mcse->testimonials_section_schema));
    @endphp

<!--------------------- Text mcse Review -------------------------------------->


                @endif

                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn mt-4 mt-lg-0">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">

                    @include('frontend.component.modal_form', [
                        'section' => 'MCSE Google Reviews - Reviews Page',
                        'form' => '4',
                        'title' => 'Book a FREE Demo'
                    ])

                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal4"> Book a Demo</button>
                </div>
            </div>
        </div>
    </section>



    <section id="testimonials" class="testiminilas_sec pt-5 pb-5">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">CCNA Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme slider_content_dots">

                @php
                    $text_ccna_review = DB::table('text_reviews')->where('status', 1)->where('course_id','10')->where('type','google')->get();

                    $course_schema_ccna = DB::table('courses')->where('status', 1)->where('id','10')->get(['testimonials_section_schema'])->first();
                @endphp

                @if(!empty($text_ccna_review))
                    @foreach ($text_ccna_review as $row)
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial__header">
                                    <div class="row">
                                        <div class="col-lg-9 col-10">
                                            <div class="testimonial__image">
                                                <img data-src="{{ asset('storage/' . $row->thumbnail) }}" class="img-fluid d-block w-100 lazyload"
                                                    alt>
                                                <span class="testimonial__name">{{ $row->name }}</span>
                                            </div>
                                            <span>{{ $row->profile }}</span>
                                        </div>
                                        <div class="col-lg-3 col-2">
                                            <div class="testimonial__icon">
                                                <i aria-hidden="true" class="fab fa-google-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <div class="testimonial__text">
                                        @php echo html_entity_decode($row->description) @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
<!--------------------- Text ccna Review -------------------------------------->

    @php 
        echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]'],[$meta_title,$meta_description,$meta_url], html_entity_decode($course_schema_ccna->testimonials_section_schema));
    @endphp

<!--------------------- Text ccna Review -------------------------------------->


                @endif

                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn mt-4 mt-lg-0">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">

                    @include('frontend.component.modal_form', [
                        'section' => 'CCNA Google Reviews - Reviews Page',
                        'form' => '5',
                        'title' => 'Book a FREE Demo'
                    ])

                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal5"> Book a Demo</button>
                </div>
            </div>
        </div>
    </section>

    <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
        <div class="container">
            @include('frontend.component.book_free_Demo_form',[
                'section' => 'Book a Free Demo - Mobile View',
            ])
        </div>
    </section>

    <section id="testimonials" class="testiminilas_sec gray_bgg1 pt-5 pb-5">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">Video Reviews</h3>

            @include('frontend.component.review_video');

            @php
                $course_schema_video = DB::table('courses')->where('status', 1)->whereNotNull('video_section_schema')
                ->get(['video_section_schema']);
            @endphp


            <!--------------------- video Review schema -------------------------------------->

                @php 
                    foreach($course_schema_video as $row){
                        echo str_replace(['[{meta_title}]','[{meta_desc}]','[{current_url}]'],[$meta_title,$meta_description,$meta_url], html_entity_decode($row->video_section_schema));
                    }
                @endphp

            <!--------------------- video Review schema -------------------------------------->




            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn mt-4 mt-lg-0">
                    <a target="_blank" href="https://www.youtube.com/channel/UCvY5iTFZdZ0I5FpzZL8g8Yw"> View more on
                        YouTube <i aria-hidden="true" class="fab fa-youtube"></i></a>
                </div>

                @include('frontend.component.modal_form', [
                    'section' => 'Video Reviews - Reviews Page',
                    'form' => '6',
                    'title' => 'Book a FREE Demo'
                ])

                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal6"> Book a Demo</button>
                </div>
            </div>


        </div>
    </section>


    <section id="testimonials" class="testiminilas_sec pt-5 pb-5">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">Facebook Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme slider_content_dots">

                @php
                    $text_facebook_review = DB::table('text_reviews')->where('status', 1)->where('type','facebook')->get();
                @endphp

                @if(!empty($text_facebook_review))
                    @foreach ($text_facebook_review as $row)
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="testimonial__header">
                                    <div class="row">
                                        <div class="col-lg-9 col-10">
                                            <div class="testimonial__image">
                                                <img data-src="{{ asset('storage/' . $row->thumbnail) }}" class="img-fluid d-block w-100 lazyload"
                                                    alt>
                                                <span class="testimonial__name">{{ $row->name }}</span>
                                            </div>
                                            <span>{{ $row->profile }}</span>
                                        </div>
                                        <div class="col-lg-3 col-2">
                                            <div class="testimonial__icon">
                                                {{--<i aria-hidden="true" class="fab fa-google-plus"></i>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content">
                                    <div class="testimonial__text">
                                        @php echo html_entity_decode($row->description) @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                </div>
            </div>


            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn mt-4 mt-lg-0">
                    <a target="_blank" href="https://www.facebook.com/AttariClass/reviews"> View more on Facebook <i
                            aria-hidden="true" class="fab fa-facebook-square"></i></a>
                </div>

                @include('frontend.component.modal_form', [
                    'section' => 'Facebook Reviews - Reviews Page',
                    'form' => '7',
                    'title' => 'Book a FREE Demo'
                ])

                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal7"> Book a Demo</button>
                </div>
            </div>

        </div>
    </section>

    <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
        <div class="container">
            @include('frontend.component.book_free_Demo_form',[
                'section' => 'Book a Free Demo - Mobile View',
            ])
        </div>
    </section>

    <!-------------=============== reviews end =============== -------------------->

@endsection
