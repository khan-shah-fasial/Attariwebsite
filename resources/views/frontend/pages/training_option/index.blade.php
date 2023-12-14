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
                        <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a FREE Demo</button>
                    </div>
                </div>
                <div class="col-lg-6 img_content">
                    <div class="row">
                        <div class="col-6 padd4">
                            <div class="gallery_boxex img_transition">
                                <a href="images/vmvare_gllaery1.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/vmvare_gllaery1.jpg" data-src="/assets/frontend/images/vmvare_gllaery1.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-6 padd4">
                            <div class="gallery_boxex img_transition">
                                <a href="images/vmvare_gllaery2.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/vmvare_gllaery2.jpg" data-src="/assets/frontend/images/vmvare_gllaery2.jpg" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 padd4">
                            <div class="gallery_boxex img_transition">
                                <a href="images/vmvare_gllaery3.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/vmvare_gllaery3.jpg" data-src="/assets/frontend/images/vmvare_gllaery3.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-6 padd4">
                            <div class="gallery_boxex img_transition">
                                <a href="images/mcse_gllaery3.jpg" data-fancybox="gallery">
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

            <div class="large-12 columns mt-4">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-5-1.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Vivek Sharma</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Attari Classes is among the best training institute for IT
                                    training. I have thoroughly enjoyed the Azure training with good learning, trainer
                                    Mr.Zameer was delivered the program very professionally. he is a good communicator.
                                    Learning Management System (LMS) which Attari classes are providing is their USP. One
                                    can can access the training video later as well.</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Sandip Jondhale</span>
                                        </div>
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
                                    Attended online Vmware training at Attari classes. The lecture Starts & Ends with the
                                    beautiful lines "My Dear Friend". The trainer "Maqsood shaikha" is very friendly & much
                                    interactive, that I never felt like it's online training. It's highly recommended to
                                    join Attari Class.
                                    Below are the key features observed, which makes the training experience amazing at
                                    Attari Classes.</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-1-img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Pratik Joshi</span>
                                        </div>
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
                                    This was the second time i have joined Attari classes for AWS online training, first
                                    time it was VMware Professional classes which was in the classroom face to face with
                                    awesome trainer Mr Maqsood Sir.the way he thought us is very unique and very interactive
                                    trainer ever I had seen.
                                    He clear every concept with best example which students can easily understand and we can
                                    learn and understand technology in simpler function ... Thank you sir for your great
                                    contribution as a trainer, as a mentor.it's really help me to update my knowledge and IT
                                    skills.
                                    And also thanks to all Attari class Management to give us access to LMS so that we can
                                    repeat recorded lecture any time.
                                    Thank you ones agin to Maqsood Sir for their efforts. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-6.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Amol Avere</span>
                                        </div>
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
                                    I had joined MCSE online class in Attari classes and the overall experience was more
                                    than wonderful. All topics w ere industry-oriented and with the latest technology being
                                    used in the production environment. I had an amazing experience attending online
                                    interactive classes. Thanks to Zameer sir and the entire Attari classes team for
                                    everything. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-1-2.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">samir tijare</span>
                                        </div>
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

                                    Many Many Thanks to Zameer Sir.
                                    I have recently completed MSCE online course from Attari classes. The course went smooth
                                    and the style of teaching by Zameer sir is amazing, he makes sure that all the doubts
                                    are clear and all students are in sync while performing the lab practical's, sometimes
                                    the problem are solved via remote access.
                                    The LMS is cherry on top, where we get all the study material, recorded videos for
                                    revision. All thanks to Attari classes </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-2-2.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Sri Azhagar</span>
                                        </div>
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

                                    I did a MCSE course in attari, I am happy with the training classes. Zameer sir shares
                                    the best practices and he is more accessible to solve each doubts.There will be labs on
                                    virtually the concepts too which helps me to understand easily and professionally.
                                    Hoping to get placed in a good company. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-4-2.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Sammy Sk</span>
                                        </div>
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
                                    I have completed MCSE training online from the comfort of my home. This period has
                                    forced everybody to switch to online mode, but there is no hassle as Attari classes have
                                    created a perfect online lecture/practical mode. To mention the trainer - Mr. Zameer
                                    Sir, the most patient, helpful and joyous trainer. No matter whatever and how much ever
                                    the queries are, they are resolved patiently by the trainer. The beautiful and
                                    understandable way of explaining things by drawing diagrams and figures helps us imagine
                                    the situation and understanding well instead of just reading theory. Also the LMS -
                                    Learning management system portal online grants us unlimited access to the theoretical
                                    and training videos, which can be used anytime to revise those topics at our
                                    convenience.
                                    All in all it have been a really good experience. Even the support team of classes have
                                    helped me in guidance and better understanding of the course and career path.
                                    Thank you Attari classes and Zameer Sir for your sincere hardwork. Shall repay you by
                                    getting a good job ahead and spreading the word. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-3-1.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Vinayak Wayade</span>
                                        </div>
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
                                    I attended MCSC training online course and I learned a lot in this training with online
                                    class and practicals.
                                    The trainer has an in depth knowledge and experience in this field.
                                    The way of explaining each and every topic is very simple and understandable.
                                    Overall it was a great experience and a very good learning.
                                    Thank you attari classes and the trainer for all your support and guidance. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
        <div class="container">
            <form class="" method="action">
                <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="your_country" placeholder="Your Country"
                        required />
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="mobile_code"
                        placeholder="Mobile no with country code" required />
                </div>

                <div class="form-group">
                    <select aria-labelledby="-Select Course-" class="form-select form-control" required>
                        <option selected>-Select Course-</option>
                        <option value="1">VMware</option>
                        <option value="2">AWS Cloud</option>
                        <option value="3">Azure Cloud</option>
                        <option value="4">MCSE</option>
                        <option value="5">CCNA</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea aria-labelledby="Message" class="form-control" placeholder="Message"></textarea>
                </div>

                <div class="form-group text-center">
                    <input class="btn btn-primary submit_button" type="submit" value="send" />
                </div>

            </form>
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
                        <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a FREE Demo</button>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 img_content">
                    <div class="row">
                        <div class="col-6 padd4">
                            <div class="gallery_boxex">
                                <a href="images/35.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/35.jpg" data-src="/assets/frontend/images/35.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-6 padd4">
                            <div class="gallery_boxex">
                                <a href="images/36.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/36.jpg" data-src="/assets/frontend/images/36.jpg" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 padd4">
                            <div class="gallery_boxex">
                                <a href="images/16.jpg" data-fancybox="gallery">
                                    <img src="/assets/frontend/images/16.jpg" data-src="/assets/frontend/images/16.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="col-6 padd4">
                            <div class="gallery_boxex">
                                <a href="images/17.jpg" data-fancybox="gallery">
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

            <div class="large-12 columns mt-4">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-6.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Amol Avere</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I had joined MCSE online class in Attari classes and the
                                    overall experience was more than wonderful. All topics w ere industry-oriented and with
                                    the latest technology being used in the production environment. I had an amazing
                                    experience attending online interactive classes. Thanks to Zameer sir and the entire
                                    Attari classes team for everything. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-2-1.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Ajmal M A</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I have enrolled for azure administrator course and is
                                    nearing to an end. The trainer Mr. Zameer make sure all the attendees are able to
                                    understand the concepts on the course through a hands on experience and also helps them
                                    with the practicals when we are stuck.
                                    They provide the access to lms, which helps us to practice and refresh what is studied.
                                    This helped me alot.
                                    Am also planning to do more courses with them.
                                    Thanks for the amazing support from attari classes. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Sandip Jondhale</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Attended online Vmware training at Attari classes. The
                                    lecture Starts & Ends with the beautiful lines "My Dear Friend". The trainer "Maqsood
                                    shaikha" is very friendly & much interactive, that I never felt like it's online
                                    training. It's highly recommended to join Attari Class.
                                    Below are the key features observed, which makes the training experience amazing at
                                    Attari Classes.</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-1-img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Pratik Joshi</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">This was the second time i have joined Attari classes for
                                    AWS online training, first time it was VMware Professional classes which was in the
                                    classroom face to face with awesome trainer Mr Maqsood Sir.the way he thought us is very
                                    unique and very interactive trainer ever I had seen.
                                    He clear every concept with best example which students can easily understand and we can
                                    learn and understand technology in simpler function ... Thank you sir for your great
                                    contribution as a trainer, as a mentor.it's really help me to update my knowledge and IT
                                    skills.
                                    And also thanks to all Attari class Management to give us access to LMS so that we can
                                    repeat recorded lecture any time.
                                    Thank you ones agin to Maqsood Sir for their efforts. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-4.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Milind Phulmali</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I have attended AWS Solution Architect course Online,
                                    maqsood sir's unique style of teaching made the session enjoyable. Maqsood sir clears
                                    all your doubts until you understand the concept by giving real life exampls.
                                    LMS Learnig portal is very useful to revise the concepts, i have recommended Attari
                                    classes to others.
                                    Thank you Maqsood sir for wonderful session </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-1-2.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">samir tijare</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Many Many Thanks to Zameer Sir.
                                    I have recently completed MSCE online course from Attari classes. The course went smooth
                                    and the style of teaching by Zameer sir is amazing, he makes sure that all the doubts
                                    are clear and all students are in sync while performing the lab practical's, sometimes
                                    the problem are solved via remote access.
                                    The LMS is cherry on top, where we get all the study material, recorded videos for
                                    revision. All thanks to Attari classes </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-3-2.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">amol hedalkar</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Thank you Attari classes for such a professional way of
                                    taking training. This is the 2nd time I am taking training from your classes and both
                                    times I got same expected result. Before 3 years back I took VMware training and I
                                    cracked all interviews and got a new Job. This time I have taken MCSE and the result is
                                    same. For MCSE the way Zameer Sir is teaching is really awesome. Complicated topics in
                                    very easy way. Thank you!
                                    Self investment always gives best result and if anyone wants a good package job switch
                                    is must. Attari class helps me to upgrade my knowledge which helps me twice to get new
                                    job and good package in IT. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-3-1.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Vinayak Wayade</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I attended MCSC training online course and I learned a lot
                                    in this training with online class and practicals.
                                    The trainer has an in depth knowledge and experience in this field.
                                    The way of explaining each and every topic is very simple and understandable.
                                    Overall it was a great experience and a very good learning.
                                    Thank you attari classes and the trainer for all your support and guidance. </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

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

            <div class="large-12 columns mt-4">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-6 (1).jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Pankaj Kathoke</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I have attended VMware online training at Attari Classes.
                                    Overall experience was fabulous, The trainer Maqsood sir has explained each and every
                                    point very well and with great examples. All topics are explained with hands-on
                                    practical, with supported real-time examples. The LMS portal provided by Attari classes
                                    is best for revision & practicing anytime. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Sandip Jondhale</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Attended online Vmware training at Attari classes. The
                                    lecture Starts & Ends with the beautiful lines "My Dear Friend". The trainer "Maqsood
                                    shaikha" is very friendly & much interactive, that I never felt like it's online
                                    training. It's highly recommended to join Attari Class.
                                    Below are the key features observed, which makes the training experience amazing at
                                    Attari Classes.</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-1.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Joshua</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I have completed my VMware virtualization course at Attari
                                    classes, Really Maqsood sir is the fantastic trainer and got cleared everything
                                    including previous versions of VMware and advanced topics also in hands on lab (HOL), I
                                    was ZERO In VMWare and I feel like I am experienced in VMware now, I recommend to
                                    everyone that VMware means Attari classes “Maqsood Sir”! Thanks you so much sir for the
                                    great knowledge that you have provided to us!</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-2.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Pankaj Patil</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I have attended VMware online training at Attari Classes.
                                    VMware training from Attari Classes has more than met my expectations.
                                    This is my first experience with a remote instructor. I was not sure what to expect
                                    because the class was taught remotely, but I was quite impressed with the entire
                                    process. Great way to receive training without having to travel any distances.
                                    The trainer, Mr. Maqsood Sir is an expert and is very clear in his method of teaching.
                                    All my questions were answered and the class interaction was very good.
                                    The LMS portal provided by Attari classes is excellent for revision & practicing
                                    anytime.
                                    I would take another more course with Attari Classes. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-7.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Pankaj Singh</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Attari Classes is on the Best Training Institute, I have
                                    done Online VMware Training from Attarti Classes, Maqsood Sir the Trainer for VMware and
                                    AWS is extremely Knowledgeable and Professional Person, He explains all the Topic in
                                    very simple way, They Provided Practical Trainings of all Topics, Even they Provide the
                                    Recordings of the Training online which is very Nice, Incase if you miss the Lectures
                                    you can refer the Recorded Lectures.
                                    Overall I am very Happy with the Training. Thank you Attari Classes and Maqsood sir for
                                    Wonderful Training. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/user_ion.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Poonam Ahire</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">It was my first experience to attend online course which I
                                    joined
                                    for VMware vSphere.
                                    Maqsood Sir has taken great effort to explain us the concept and clear each and every
                                    doubt. LMS portal which is provided live recorded lectures, if you missed any lecture
                                    you can refer from LMS and clear doubt.
                                    Thank you Maqsood sir and Team. </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/unnamed-4 (3).jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Sirajuddin Khan</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I took VMware training from Attari Classes long ago and it
                                    helped me alot in my professional growth, I already knew the teaching way of Maqsood Sir
                                    so there was no second thought before joining AWS batch, even though it was online
                                    session due to Pandemic it was 100% interactive and completely hands-on session with
                                    real life examples. No matter the number of time you ask question Sir make sure to clear
                                    them out and if someone get stuck during practicals Sir make sure to take the remote and
                                    guide them to fix the problems so that no one stays behind.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/user_ion.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Rajni Pandey</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon">
                                            <i aria-hidden="true" class="fab fa-google-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I have attended VMware online training at Attari Classes.
                                    Maqsood sir has explained each and every point very well and with unique examples so
                                    that you can always remember the related topics. Also while training if you miss any
                                    point then Sir will repeat that point and wait for you to complete the same on HOL.The
                                    LMS portal provided by Attari classes is best for revision & practicing anytime.
                                    Thank you Maqsood Sir and Attari Classes. </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
        <div class="container">
            <form class="" method="action">
                <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="your_country" placeholder="Your Country"
                        required />
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="mobile_code"
                        placeholder="Mobile no with country code" required />
                </div>

                <div class="form-group">
                    <select aria-labelledby="-Select Course-" class="form-select form-control" required>
                        <option selected>-Select Course-</option>
                        <option value="1">VMware</option>
                        <option value="2">AWS Cloud</option>
                        <option value="3">Azure Cloud</option>
                        <option value="4">MCSE</option>
                        <option value="5">CCNA</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea aria-labelledby="Message" class="form-control" placeholder="Message"></textarea>
                </div>

                <div class="form-group text-center">
                    <input class="btn btn-primary submit_button" type="submit" value="send" />
                </div>

            </form>
        </div>
    </section>


    <!-------------=============== training option end =============== -------------------->

@endsection
