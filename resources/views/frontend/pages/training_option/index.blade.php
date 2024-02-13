@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description',
    ' ')

@section('page.type', 'website')

@section('page.content')

    <!----------========== training option start ===============-------------------->

    <section class="training_banner">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="breadcrums_section paddtb80">
                        <h1 class="sm-aboutus">Training Option</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                <li class="breadcrumb-item"><a>»</a></li>
                                <li class="breadcrumb-item"><a><b>Training Option</b></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------------------Online Training ---------------->

    <section class="training pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="training_heading">
                        Online Training with Live Hands-on Practical
                    </h2>
                    <p class="training_para">
                        Labs and Software are available on Cloud for practicals,you can
                        Interact with trainer live during the training and resolve
                        queires, also get access to topic wise Live Recorded Lectures on
                        our Learning Management System(LMS)
                    </p>
                    <div class="row mt-5">
                        <div class="col-md-3 col-6  training_icons_box">
                            <img src="/assets/frontend/images/cloud_softwere.webp" alt="" />
                            <p class="para">Free Cloud Labs & Software</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/hand_practical.webp" alt="" />
                            <p class="para">Live hands-on Practicals</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/teacher-1.svg" alt="" />
                            <p class="para">Instructor-Led</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/free_practice.webp" alt="" />
                            <p class="para">Free Practice Tests</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/modules.webp" alt="" />
                            <p class="para">Interactive Modules</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box ppdd00">
                            <img src="/assets/frontend/images/live_record.webp" alt="" />
                            <p class="para">Topic wise Live Recorded Lectures</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/Online-Training.webp" alt="" />
                            <p class="para">Online Training Material</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/whatsapp.png" alt="" />
                            <p class="para">Trainer Support on WhatsApp</p>
                        </div>
                    </div>
                    <div class="training_btn none">

                        @include('frontend.component.modal_form', [
                            'section' => 'Online Training - Training Options Page',
                            'form' => '1',
                            'title' => 'Book a FREE Demo'
                        ])

                        <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal1"> Book a FREE Demo</button>
                    </div>
                </div>
                <div class="col-lg-6 img_content">
                    <div class="row">
                        <div class="col-6 padd4 marginleftright0">
                            <div class="gallery_boxex img_transition">
                                <a href="/assets/frontend/images/vmvare_gllaery1.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/vmvare_gllaery1.jpg" data-src="/assets/frontend/images/vmvare_gllaery1.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-6 padd4 marginleftright0">
                            <div class="gallery_boxex img_transition">
                                <a href="/assets/frontend/images/vmvare_gllaery2.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/vmvare_gllaery2.jpg" data-src="/assets/frontend/images/vmvare_gllaery2.jpg" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 padd4 marginleftright0">
                            <div class="gallery_boxex img_transition">
                                <a href="/assets/frontend/images/vmvare_gllaery3.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/vmvare_gllaery3.jpg" data-src="/assets/frontend/images/vmvare_gllaery3.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-6 padd4 marginleftright0">
                            <div class="gallery_boxex img_transition">
                                <a href="/assets/frontend/images/mcse_gllaery3.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/mcse_gllaery3.jpg" data-src="/assets/frontend/images/mcse_gllaery3.jpg" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------Testimonial ------------------------ -->



    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 gray_bgg1 slider_content_dots">
        <div class="container">
            <h3 class="main_heads text-center mb-3">
                What Our Students Says About Online Training 

            </h3>

            @include('frontend.component.review_random')

        </div>
    </section>

    <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
        <div class="container">
            @include('frontend.component.book_free_Demo_form',[
                'section' => 'Book a Free Demo - Mobile View',
            ])
        </div>
    </section>
    <!-- ----------------------Training online classs------------------------------->

    <section class="training pb-5 pt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 right order-lg-2 ps-md-4">
                    <h2 class="training_heading">
                        Classroom Training with Hands-on Practical
                    </h2>
                    <p class="training_para">
                        We have High tech Infrastructure in our Classrooms, using High end labs candidates can perform live
                        practical’s along with the trainer, also get access to topic wise Live Recorded Lectures on our
                        Learning Management System(LMS)
                    </p>
                    <div class="row mt-5">
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/cloud_softwere.webp" alt="" />
                            <p class="para">Free Cloud Labs & Software</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/hand_practical.webp" alt="" />
                            <p class="para">Live hands-on Practicals</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/teacher-1.svg" alt="" />
                            <p class="para">Instructor-Led</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/free_practice.webp" alt="" />
                            <p class="para">Free Practice Tests</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3 col-6  training_icons_box">
                            <img src="/assets/frontend/images/modules.webp" alt="" />
                            <p class="para">Interactive Modules</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box ppdd00">
                            <img src="/assets/frontend/images/live_record.webp" alt="" />
                            <p class="para">Topic wise Live Recorded Lectures</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/Online-Training.webp" alt="" />
                            <p class="para">Online Training Material</p>
                        </div>
                        <div class="col-md-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/whatsapp.png" alt="" />
                            <p class="para">Trainer Support on WhatsApp</p>
                        </div>
                    </div>
                    <div class="training_btn none">

                        @include('frontend.component.modal_form', [
                            'section' => 'Classroom Training - Training Options Page',
                            'form' => '2',
                            'title' => 'Book a FREE Demo'
                        ])

                        <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal2"> Book a FREE Demo</button>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 img_content">
                    <div class="row">
                        <div class="col-6 padd4 marginleftright0">
                            <div class="gallery_boxex">
                                <a href="/assets/frontend/images/35.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/35.jpg" data-src="/assets/frontend/images/35.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-6 padd4 marginleftright0">
                            <div class="gallery_boxex">
                                <a href="/assets/frontend/images/36.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/36.jpg" data-src="/assets/frontend/images/36.jpg" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 padd4 marginleftright0">
                            <div class="gallery_boxex">
                                <a href="/assets/frontend/images/16.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/16.jpg" data-src="/assets/frontend/images/16.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-6 padd4 marginleftright0">
                            <div class="gallery_boxex">
                                <a href="/assets/frontend/images/17.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/17.jpg" data-src="/assets/frontend/images/17.jpg" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------Testimonial ------------------------ -->

    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 gray_bgg1 slider_content_dots">
        <div class="container">
            <h3 class="main_heads text-center mb-3">
                What Our Students Says About Classroom Training

            </h3>

            @include('frontend.component.review_random')

        </div>
    </section>




    <!-- -------------Free learning --------------- -->

    <section class="lms training pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="lms_heading">
                        Self Paced Learning -
                        <strong>Live Recorded Video Lectures</strong>
                    </h2>
                    <p class="lms_para">
                        You get access to topic wise Live Recorded Lectures of our
                        courses on Learning Management System(LMS), lectures on LMS are
                        updated regularly and even new topics are added whenever
                        required, you can access LMS even after course is completed, so
                        revision and upgrading yourself in future is easy
                    </p>
                    <div class="row">
                        <div class="col-lg-3 col-6 training_icons_box ppdd00">
                            <img src="/assets/frontend/images/live_record.webp" alt="" />
                            <p class="para">Topic wise Live Recorded Lectures</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box ppdd00">
                            <img src="/assets/frontend/images/online_classroom_trainign.webp" alt="" />
                            <p class="para">Upgrade to Online or Classroom Training</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/regulary.webp" alt="" />
                            <p class="para">LMS updated regulary</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box">
                            <img src="/assets/frontend/images/3442194.webp" alt="" />
                            <p class="para">Online Learning Portal</p>
                        </div>
                    </div>
                    <div class="training_btn">
                        <a target="_blank" href="https://lms.attariclasses.in/">Visit Video Portal</a>

                    </div>
                </div>
                <div class="col-md-6 lms_img">
                    <img src="/assets/frontend/images/lms_images-1024x750.webp" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- -----------------adv lms ------------------------- -->

    <section class="adv_lms">
        <div class="bg_adv">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="pb-3 fw-normal">Advantages of LMS</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6 lms_box"> <i class="far fa-clock"></i>
                                <p>24*7 Learning</p>
                            </div>
                            <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-laptop"></i>
                                <p>Live Recorded Lectures</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-chalkboard-teacher"></i>
                                <p>Premium Content</p>
                            </div>
                            <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-laptop-code"></i>
                                <p>Learn At Your Own Pace</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-globe-africa"></i>
                                <p>Access From Anywhere, Any Device</p>
                            </div>
                            <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-certificate"></i>
                                <p>Course Completion Certificate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-6 lms_box"> <i aria-hidden="true" class="far fa-edit"></i>
                                <p>Free Practice Exam</p>
                            </div>
                            <div class="col-6 lms_box"> <i aria-hidden="true" class="fas fa-exchange-alt"></i>
                                <p>Revise & Learn Multiple Times</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-------------------------------Testimonial ------------------------ -->

    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 slider_content_dots">
        <div class="container">
            <h3 class="main_heads text-center mb-3">
                What Our Students Says About LMS
            </h3>

            @include('frontend.component.review_random')

        </div>
    </section>

    <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
        <div class="container">
            @include('frontend.component.book_free_Demo_form',[
                'section' => 'Book a Free Demo - Mobile View',
            ])
        </div>
    </section>


    <!-------------=============== training option end =============== -------------------->

@endsection
