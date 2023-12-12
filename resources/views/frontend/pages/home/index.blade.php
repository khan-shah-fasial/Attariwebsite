@extends('frontend.layouts.app')

@section('page.title', 'VMware, AWS, Azure, MCSE & CCNA Training Institute, Book Free DEMO - Attari Classes')

@section('page.description',
    'Attari Classes provides Hands-on Practical Training, Book FREE DEMO, Topic wise Recorded
    Lectures on LMS, Online & Classroom Training options')

@section('page.type', 'website')

@section('page.content')

    <!-----======================= home content start============---->

    <div class="banner_slider1">
        <picture>
            <source srcset="/assets/frontend/images/make_it_happen_responsive.jpg" width="600" height="600"
                media="(max-width: 767px)">
            <source srcset="/assets/frontend/images/make_it_happen_banner.jpg"> <img class="slide-image"
                src="/assets/frontend/images/make_it_happen_banner.jpg" alt="Banner">
        </picture>
        <div class="container">
            <div class="text-center">
                <div class="banner_content">
                    <button type="button" class="btn enquire_now_btn" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal"> Enquire Now </button>
                </div>
            </div>
        </div>
    </div>

    <!----------- Virtualization & Cloud Computing ------------->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3 mt-5">
                    <h4 class="services_headign">Virtualization & Cloud Computing</h4>
                </div>
                <div class="col-md-4 box_services"> <img data-src="/assets/frontend/images/vmvare_coursimg.webp"
                        width="380" height="224" class="lazyload image_width1" alt="VMware vSphere 7 ">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            VMware vSphere 7
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </div>
                <div class="col-md-4 box_services"> <img data-src="/assets/frontend/images/aws_courseimg.webp"
                        width="380" height="224" class="lazyload image_width1" alt="AWS Cloud Solution Architect">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            AWS Cloud Solution Architect
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </div>
                <div class="col-md-4 box_services"> <img data-src="/assets/frontend/images/azure_courseimg.webp"
                        width="380" height="224" class="lazyload image_width1" alt="AZURE Cloud Administrator">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            AZURE Cloud Administrator
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------Server & Networking------------------  -->
    <section class="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center mt-1 mb-3">
                    <h4 class="services_headign">Server & Networking</h4>
                </div>
                <div class="col-md-4 box_services"> <img data-src="/assets/frontend/images/mcse_courseimg.webp"
                        width="380" height="224" class="lazyload image_width1" alt="Microsoft Windows Server MCSE">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            Microsoft Windows Server MCSE
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </div>
                <div class="col-md-4 box_services"> <img data-src="/assets/frontend/images/ccna_courseimg.webp"
                        width="380" height="224" class="lazyload image_width1" alt="Cisco Networking CCNA">
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            Cisco Networking CCNA
                        </h5>
                        <p class="text_services_para"> <i class="far fa-clock"></i> 40+ Hours
                            <br /> <i class="far fa-calendar-check"></i> View Batch Schedule
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------- Online Training ------------------ -->
    <section class="training">
        <div class="container">
            <div class="row">
                <div class="col-md-7 training_text_box">
                    <h2 class="training_heading">
                        Instructor-Led Online Training with live Hands-on Practical
                    </h2>
                    <p class="training_para"> Labs and Software are available on Cloud for practicals,you can Interact with
                        trainer live during the training and resolve queires, also get access to topic wise Live Recorded
                        Lectures on our Learning Management System(LMS) </p>
                    <div class="row">
                        <div class="col-lg-3 col-6 training_icons_box"> <img
                                data-src="/assets/frontend/images/teacher-1.svg" width="40" height="40"
                                class="lazyload" alt="Instructor-Led">
                            <p class="para">Instructor-Led</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box"> <img data-src="/assets/frontend/images/lab.webp"
                                width="40" height="40" class="lazyload" alt="Access to Cloud Labs">
                            <p class="para">Access to Cloud Labs</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box"> <img
                                data-src="/assets/frontend/images/Online-Training.webp" width="40" height="40"
                                class="lazyload" alt="Online Training Material">
                            <p class="para">Online Training Material</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box"> <img
                                data-src="/assets/frontend/images/whatsapp.png" width="40" height="40"
                                class="lazyload" alt="Trainer Support on WhatsApp">
                            <p class="para">Trainer Support on WhatsApp</p>
                        </div>
                    </div>
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo </button>
                    </div>
                </div>
                <div class="col-md-5 img_box"> <img data-src="/assets/frontend/images/dsvdfb.jpg" width="399"
                        height="600" class="lazyload" alt="Lab Image"> </div>
            </div>
        </div>
    </section>
    <!-- ------------------ Counter ------------------- -->
    <section class="counter pt-lg-5 pt-4 pb-3" id="counter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="counter_heading mb-3">Why Attari Classes</h2>
                </div>
                <div class="col-md-2 col-6 counter_box">
                    <div class="counter_inner_box">
                        <h2 class="counter-value" data-count="5000">1000</h2>
                        <p>Sessions</p>
                    </div>
                </div>
                <div class="col-md-2 col-6 counter_box">
                    <div class="counter_inner_box">
                        <h2 class="counter-value" data-count="10">0</h2>
                        <p>Years of Delivering Innovative Training</p>
                    </div>
                </div>
                <div class="col-md-2 col-6 counter_box">
                    <div class="counter_inner_box">
                        <h2 class="counter-value" data-count="7000">2000</h2>
                        <p>Candidates Trained</p>
                    </div>
                </div>
                <div class="col-md-2 col-6 counter_box">
                    <div class="counter_inner_box">
                        <h2 class="counter-value" data-count="1000">100</h2>
                        <p>Students Working in Top MNCs</p>
                    </div>
                </div>
                <div class="col-md-2 col-6 counter_box">
                    <div class="counter_inner_box">
                        <h2 class="counter-value" data-count="4.9">0.0</h2>
                        <p>Google Rating</p>
                    </div>
                </div>
                <div class="col-md-2 col-6 counter_box">
                    <div class="counter_inner_box">
                        <h2 class="counter-value" data-count="4.9">0.0</h2>
                        <p>Facebook Rating</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------- Class Room ------------------------ -->
    <section class="classroom">
        <div class="container">
            <div class="row">

                <div class="col-md-6 classroom_text_box order-md-2">
                    <h2 class="training_heading">
                        Classroom Training with live Hands-on Practical
                    </h2>
                    <p class="training_para"> We have High tech Infrastructure in our Classrooms, using High end labs
                        candidates can perform live practical’s along with the trainer, also get access to topic wise Live
                        Recorded Lectures on our Learning Management System(LMS)</p>
                    <div class="row">
                        <div class="col-lg-3 col-6 training_icons_box"><img
                                data-src="/assets/frontend/images/teacher-1.svg" width="40" height="40"
                                class="lazyload" alt="Instructor-Led">
                            <p class="para">Instructor-Led</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box"> <img data-src="/assets/frontend/images/lab.webp"
                                width="40" height="40" class="lazyload" alt="Access to Cloud Labs">
                            <p class="para">Access to Cloud Labs</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box"> <img
                                data-src="/assets/frontend/images/Online-Training.webp" width="40" height="40"
                                class="lazyload" alt="Online Training Material">
                            <p class="para">Online Training Material</p>
                        </div>
                        <div class="col-lg-3 col-6 training_icons_box"> <img
                                data-src="/assets/frontend/images/whatsapp.png" width="40" height="40"
                                class="lazyload" alt="Trainer Support on WhatsApp">
                            <p class="para">Trainer Support on WhatsApp</p>
                        </div>
                    </div>
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo </button>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade ">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img data-src="/assets/frontend/images/16.jpg"
                                    width="576" height="432" class="lazyload d-block w-100"
                                    alt="Cirtificate Image 1"></div>
                            <div class="carousel-item"> <img data-src="/assets/frontend/images/17.jpg" width="576"
                                    height="432" class="lazyload d-block w-100" alt="Cirtificate Image 2"></div>
                            <div class="carousel-item"> <img data-src="/assets/frontend/images/27.jpg" width="576"
                                    height="432" class="lazyload d-block w-100" alt="Cirtificate Image 3"></div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span> </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span> </button>
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
    <!-- -------------Free learning --------------- -->
    <section class="lms pt-lg-5 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="lms_heading pt-md-4 pt-0">
                        Free Learning Management System(LMS) Included with Training
                    </h2>
                    <p class="lms_para"> You get access to topic wise Live Recorded Lectures of our courses on Learning
                        Management System(LMS), lectures on LMS are updated regularly and even new topics are added whenever
                        required, you can access LMS even after course is completed, so revision and upgrading yourself in
                        future is easy </p>
                    <div class="training_btn"> <a target="_blank" href="https://lms.attariclasses.in/">Visit Video
                            Portal</a> </div>
                </div>
                <div class="col-md-6 lms_img"><img data-src="/assets/frontend/images/lms_images123.png" width="576"
                        height="422" class="lazyload" alt="Learning Image"> </div>
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
    <!-- ----------------------Certificate -------------------- -->
    <section class="Certificate">
        <div class="container">
            <div class="row">
                <div class="col-md-6 Certificate_box">
                    <h2 class="Certificate_heading pt-md-5 mt-md-3">
                        Earn Industry-Recognized Credentials
                    </h2>
                    <p class="Certificate_para mb-md-5 mb-4"> Certification plays an Important role in proving your skills,
                        Hands-on practical training at Attari Classes will clear your concepts and make you exam ready. We
                        provide Practice exams and learning material for free which prepares you to answer the question
                        asked in actual exam, most of the candidates have passed exam in one attempt </p>
                    <div class="training_btn none">
                        <button type="button" class="btn bookfreedemo_button" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Get Certified</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000"> <img
                                    data-src="/assets/frontend/images/Nikhil-rajiv-1.webp" width="576" height="450"
                                    class="lazyload d-block w-100" alt=""></div>
                            <div class="carousel-item" data-bs-interval="2000"> <img
                                    data-src="/assets/frontend/images/Bhavesh-khedekar-2.webp" width="576"
                                    height="450" class="lazyload d-block w-100" alt="Certification Image 1"> </div>
                            <div class="carousel-item"> <img data-src="/assets/frontend/images/Mohammed-3.jpeg"
                                    class="lazyload d-block w-100" width="576" height="450"
                                    alt="Certification Image 1"></div>
                            <div class="carousel-item"> <img data-src="/assets/frontend/images/Farook-4.jpeg"
                                    class="lazyload d-block w-100" width="576" height="450"
                                    alt="Certification Image 2"></div>
                            <div class="carousel-item"> <img data-src="/assets/frontend/images/Ashraf-5.webp"
                                    class="lazyload d-block w-100" width="576" height="450"
                                    alt="Certification Image 3"></div>
                            <div class="carousel-item"> <img data-src="/assets/frontend/images/Peateek-6.webp"
                                    class="lazyload d-block w-100" width="576" height="450"
                                    alt="Certification Image 4"></div>
                            <div class="carousel-item"> <img data-src="/assets/frontend/images/Mayuresh-7.jpg"
                                    class="lazyload d-block w-100" width="576" height="450"
                                    alt="Certification Image 5"></div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span> </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span> </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------ Testimonial --------- -->
    <section id="testimonials" class="testiminilas_sec pt-md-5 pt-3 pb-md-5 pb-3 gray_bgg1">
        <div class="container">
            <h3 class="main_heads text-center mb-4">
                What our <strong>Students</strong> says?
            </h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme video_testiminials">
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/watch?v=T9PrVAio31k&t=11s"
                                aria-label="Testimonial Video Link" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img data-src="/assets/frontend/images/amar_pandey_review.jpg" width="352"
                                    height="198" class="lazyload d-block w-100" alt="Amar Pandey">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/watch?v=jKTdqn_0prk" aria-label="Testimonial Video Link"
                                data-fancybox="gallery">
                                <div class="pulse-button"></div> <img
                                    data-src="/assets/frontend/images/Satish-Mishra-Aws-Thumbnail.jpg" width="352"
                                    height="198" class="lazyload d-block w-100" alt="Satish Mishra">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/watch?v=R-NDHE2FYZ0&t=1s" aria-label="Testimonial Video Link"
                                data-fancybox="gallery">
                                <div class="pulse-button"></div><img
                                    data-src="/assets/frontend/images/Shabir-Ali-AWS-Azure-1.jpg" width="352"
                                    height="198" class="lazyload d-block w-100" alt="Shabir Ali">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/watch?v=9y-Oiet2HBE" aria-label="Testimonial Video Link"
                                data-fancybox="gallery">
                                <div class="pulse-button"></div> <img data-src="/assets/frontend/images/Sohail-MCSE.jpg"
                                    width="352" height="198" class="lazyload d-block w-100" alt="Sohail">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/watch?v=EqTLrlzQwkI&t=1s" aria-label="Testimonial Video Link"
                                data-fancybox="gallery">
                                <div class="pulse-button"></div> <img data-src="/assets/frontend/images/Vinayak-CCNA.jpg"
                                    width="352" height="198" class="lazyload d-block w-100" alt="Vinayak">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/watch?v=R-NDHE2FYZ0&t=2s" aria-label="Testimonial Video Link"
                                data-fancybox="gallery">
                                <div class="pulse-button"></div> <img data-src="/assets/frontend/images/Mixed-Reviews.jpg"
                                    width="352" height="198" class="lazyload d-block w-100" alt="Mixed">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-12 columns mt-4 slider_content_dots">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image"> <img
                                                data-src="/assets/frontend/images/unnamed-6-1.webp"
                                                class="lazyload d-block w-100" alt="unnamed"> <span
                                                class="testimonial__name">Amol Avere</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon"> <i aria-hidden="true"
                                                class="fab fa-google-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I had joined MCSE online class in Attari classes and the
                                    overall experience was more than wonderful. All topics w ere industry-oriented and with
                                    the latest technology being used in the production environment. I had an amazing
                                    experience attending online interactive classes. Thanks to Zameer sir and the entire
                                    Attari classes team for everything.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image"> <img
                                                data-src="/assets/frontend/images/unnamed-1-img.webp"
                                                class="lazyload d-block w-100" alt="unnamed"><span
                                                class="testimonial__name">Akash Girdhar</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon"> <i aria-hidden="true"
                                                class="fab fa-google-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">My experience of AZURE training by Zameer sir was really
                                    amazing. He explains every topic in a detailed way and also very descriptive while
                                    sharing knowledge. A very calm and patient teacher, also helps to understand concepts
                                    deeply. My experience with Attari classes has been 10/10 till now as I have also done
                                    VMware training before which was with the expert Maqsood Sir!</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image"> <img
                                                data-src="/assets/frontend/images/unnamed-7.webp"
                                                class="lazyload d-block w-100" alt="unnamed"> <span
                                                class="testimonial__name">Pankaj Singh</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon"> <i aria-hidden="true"
                                                class="fab fa-google-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Attari Classes is on the Best Training Institute, I have
                                    done Online VMware Training from Attarti Classes, Maqsood Sir the Trainer for VMware and
                                    AWS is extremely Knowledgeable and Professional Person, He explains all the Topic in
                                    very simple way, They Provided Practical Trainings of all Topics, Even they Provide the
                                    Recordings of the Training online which is very Nice, Incase if you miss the Lectures
                                    you can refer the Recorded Lectures. Overall I am very Happy with the Training. Thank
                                    you Attari Classes and Maqsood sir for Wonderful Training. </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image"> <img
                                                data-src="/assets/frontend/images/unnamed.webp"
                                                class="lazyload d-block w-100" alt="unnamed"> <span
                                                class="testimonial__name">Sandip Jondhale</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon"> <i aria-hidden="true"
                                                class="fab fa-google-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Attended online Vmware training at Attari classes. The
                                    lecture Starts & Ends with the beautiful lines "My Dear Friend". The trainer "Maqsood
                                    shaikha" is very friendly & much interactive, that I never felt like it's online
                                    training. It's highly recommended to join Attari Class. Below are the key features
                                    observed, which makes the training experience amazing at Attari Classes.</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image"> <img
                                                data-src="/assets/frontend/images/unnamed-3-1.webp"
                                                class="lazyload d-block w-100" alt="unnamed"> <span
                                                class="testimonial__name">Sunil Khanolkar</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon"> <i aria-hidden="true"
                                                class="fab fa-google-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text"> Maqsood sir, is best trainer and his speciality is
                                    providing training in Aws cloud computing and other professional trainings. His teaching
                                    skill set is very very professional. His way of teaching is interactive, Sporting and
                                    command over the subject is outstanding. Solves doubt and difficulty in macro level.
                                    Best part of his training is balanced between theory and practical based in real world
                                    scenario. So every one gets benefitted and aware about production scenarios. I ever saw
                                    such a professional, interactive virtual classroom training center in my 15years
                                    professional career. Beauty about training is "ATTARI classes" also provide LMS(learning
                                    management system) facility with course , so students can refer any topics at any given
                                    time . I would like to thank Maqsood sir, for making me a part of the training. I would
                                    recommend others also who want to choose cloud computing as professional career. My Best
                                    wishes to ATTARI Classes. </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image"> <img
                                                data-src="/assets/frontend/images/unnamed-4.webp"
                                                class="lazyload d-block w-100" alt="unnamed"> <span
                                                class="testimonial__name">Milind Phulmali</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon"> <i aria-hidden="true"
                                                class="fab fa-google-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text"> I have attended AWS Solution Architect course Online,
                                    maqsood sir's unique style of teaching made the session enjoyable. Maqsood sir clears
                                    all your doubts until you understand the concept by giving real life exampls. LMS
                                    Learnig portal is very useful to revise the concepts, i have recommended Attari classes
                                    to others. Thank you Maqsood sir for wonderful session</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image"> <img
                                                data-src="/assets/frontend/images/unnamed-2-3.webp"
                                                class="lazyload d-block w-100" alt="unnamed"> <span
                                                class="testimonial__name">021aadi</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon"> <i aria-hidden="true"
                                                class="fab fa-google-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">I have joined online class for the first time and I'm highly
                                    impressed by the teaching methodology of the institute. I have recently completed my
                                    CCNA course online and I would like to thanks Mr Zameer Sir My experience in Attari
                                    classes. It was fantastic journey from 1st lecture to last lecture. Management of
                                    Attarri classes is very nice. I would like to say big thank you to Zameer Sir for
                                    sharing their knowledge Looking forward to gain knowledge on more courses with Attari
                                    Classes. </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image"> <img
                                                data-src="/assets/frontend/images/unnamed-3-4.webp"
                                                class="lazyload d-block w-100" alt="unnamed"> <span
                                                class="testimonial__name">Yogesh Pasalkar</span> </div>
                                    </div>
                                    <div class="col-lg-3 col-2">
                                        <div class="testimonial__icon"> <i aria-hidden="true"
                                                class="fab fa-google-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__content">
                                <div class="testimonial__text">Finished my CCNA course yesterday and trust me, it was
                                    wonderful experience. In the beginning, i was not quite sure how the online training
                                    would go compare to well equipped training facility attari class has but you did not
                                    disappoint me. Trainer was great and explained things in very lucid language. I would
                                    highly recommend to join the class if you are looking for CCNA or VMware training.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view_allbutton text-center"> <a href="https://webtesting.pw/attari-website/reviews.php"> View All
                    <i class="fas fa-arrow-right" aria-hidden="true"></i></a></div>
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
    <!-- -------------- FAQ ----------------- -->
    <section class="faq pt-md-5 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 faq_box">
                    <div class="question">
                        <h1 class="text_services_heading1">
                            Best Institute for VMware, AWS, AZURE, MCSE, CCNA Training in
                            Mumbai
                        </h1> <i class="fas fa-arrow-right"></i>
                    </div>
                    <div class="answer">
                        <p> Attari Classes is the preferred Training Institute for VMware VCP certification training in
                            India. We provide latest trending courses like AWS Cloud Solution Architect, Aure Cloud
                            Administrator, CCNA-Networking Course and MCSE- Windows Server course. </p>
                        <p> Attari Classes provides both classroom and online training for domestic and international
                            students all over the world. We are one of the reliable and trustworthy learning centers for
                            VMware VCP Certification, Azure Certification AZ-104, AWS Solution Architect- Associate
                            Certification SAA-C02, and CCNA Certification Courses. We are also one of the leading, trusted,
                            and preferred Training providers to Corporates across India for various courses. </p>
                        <p> Attari Classes also provide options of Video learning using our Learning Management System(LMS)
                            for VMware vSphere, AWS Cloud, Azure Cloud, MCSE, and CCNA Courses, you can learn at your own
                            pace and do practicals using cloud-based labs or download the software required for labs using
                            the guidance given in our LMS. </p>
                        <h5 class="faq_inner_head">Attari Classes Training Programs</h5>
                        <div class="test_heading_inner"> <i> We provide Hands-on Live Practical training for</i> </div>
                        <ul class="test_ul">
                            <li> <a href="https://attariclasses.in/vmware-training-certification-online/">1. VMware
                                    vSphere</a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/aws-certification-training-online/">2. AWS Cloud Solution
                                    Architect</a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/microsoft-azure-certification-training-online/">3. Azure
                                    Cloud Administration</a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/mcsa-mcse-windows-server-training-online/">4. MCSE-
                                    Windows Server</a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/ccna-training-certification-online/">5. CCNA- Computer
                                    Networking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------- home content end --------------->
@endsection
