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


    <!-- <section class="vm_nav" id="vm_nav">-->
    <!--  <div class="container">-->
    <!--    <div id="version" class="version highlight-bar">-->
    <!--      <nav class="nav-sections">-->
    <!--        <ul class="menu34">-->
    <!--          <li class="menu-item">-->
    <!--            <a class="menu-item-link active" href="#key_features">Key Feature</a>-->
    <!--          </li>-->
    <!--          <li class="menu-item">-->
    <!--            <a class="menu-item-link" href="#overviews">Overview</a>-->
    <!--          </li>-->
    <!--          <li class="menu-item">-->
    <!--            <a class="menu-item-link" href="#syllabuse">Course Content</a>-->
    <!--          </li>-->
    <!--          <li class="menu-item">-->
    <!--            <a class="menu-item-link" href="#project_cover">Project</a>-->
    <!--          </li>-->
    <!--          <li class="menu-item">-->
    <!--            <a class="menu-item-link" href="#certificate_section">Certificate</a>-->
    <!--          </li>-->
    <!--          <li class="menu-item">-->
    <!--            <a class="menu-item-link" href="#testimonials">Testimonials</a>-->
    <!--          </li>-->
    <!--          <li class="menu-item">-->
    <!--            <a class="menu-item-link" href="#batch_shedule">Batch Schedule</a>-->
    <!--          </li>-->
    <!--          <li class="menu-item">-->
    <!--            <a class="menu-item-link" href="#faqs">FAQ</a>-->
    <!--          </li>-->
    <!--          <div class="active-line"></div>-->
    <!--        </ul>-->
    <!--      </nav>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->




    <section id="vmware_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>VMware Training Schedule</b></h4>
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
                                    <i aria-hidden="true" class="far fa-check-circle"></i> Perform live practicals with the
                                    the Trainer
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
                                            <b>6th AUGUST</b>
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
                                        <td><b class="text_blue"><a href="https://lms.attariclasses.in/">Always
                                                    Available</a></b></td>
                                    </tr>
                                </tbody>
                            </table>
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

            </div>
        </div>
    </section>



    <section id="testimonials" class="testiminilas_sec gradiant_bg pt-5 pb-5 dot_clr_white">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">VMware Training Testimonials</h3>
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
                            <a href="https://www.youtube.com/watch?v=lfsCd6d_xvo" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/Qatar-VMware-Group.jpg" class="img-fluid d-block w-100 lazyload" alt>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_video">
                            <a href="https://www.youtube.com/watch?v=3qYV1wMQzwU" data-fancybox="gallery">
                                <div class="pulse-button"></div>
                                <img src="/assets/frontend/images/Mixed-Reviews.jpg" class="img-fluid d-block w-100 lazyload" alt>
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
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Suryakant Mishra</span>
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
                                <div class="testimonial__text">I've taken VMware online training here, I was bit afraid
                                    about it at the beginning but the trainer Mr. Maqsood has made it really smooth and
                                    easy. The training is all about hands on practice, 100% practical approach. Thanks to
                                    Attari classes and Maqsood sir. </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/nityanand_img.jpg"
                                                class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Pravinkumar Devanpalli</span>
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
                                <div class="testimonial__text">I have joine Attari classes for the second time. First time
                                    it was classroom based training for VMware and now online course for AWS.I would say the
                                    quality of this classes is one of the best in terms of sharing the practical approach
                                    and explaining the theory. This concept is very less.
                                    If a person wants to learn VMware and AWS along with Practicals, then I would recommend
                                    him or her to join Attari Classes and bring a turning point in his career.
                                    Each and every concept will be thought at Attari Classes.
                                    Thank You Maqsood Sir. </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/vinay_yadau_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Gajanan Powar</span>
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
                                <div class="testimonial__text">Attari Class is Best institute to learn VMware.
                                    "The training was excellent and deep knowledge was received in a friendly environment.
                                    Maqsood sir have excellent teaching skills .Got to know so many hidden concept from
                                    VMware perspective.
                                    Practical lab & Training center
                                    Over all very satisfied with the training & highly appreciated with the trainer
                                    knowledge.
                                    I will definitely join the another new course cloud </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/asif_img.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Shailesh kadam</span>
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
                                <div class="testimonial__text">It was a good experience for learning VMware online at
                                    Attari Classes. Maqsood Sir are knowledgeable and are capable of clearing all doubts.
                                    They will teach you from very basic to advanced levels. Highly recommended. </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/udaysinh_img.png" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Bhaskar Koli</span>
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
                                    It was a good experience for learning VMware online at Attari Classes.
                                    Maqsood Sir are knowledgeable and are capable of clearing all doubts.
                                    They will teach you from very basic to advanced levels.
                                    <br>
                                    <br>

                                    online training for AWS is worth it and i can follow the lecture and practicals without
                                    any lag.Also i would appreciate the efforts to implement the new learning portal (LMS)
                                    to review the classes for my reference.
                                    <br>
                                    <br>

                                    I highly recommend VMware training from Attari classes
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
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Mahesh Pandey</span>
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
                                <div class="testimonial__text">Today I am very happy becoz I have completed my VMware
                                    course in attari classes,I would say thanks to Maqsood sir becoz his teaching style will
                                    help you to clear your doubts as well as it was my first experience on online platform,
                                    but Maqsood sir taking care very well with theorical and practical lectures.i will
                                    recommend to my friends and colleagues to joint attari classes.</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Gaurav Neware</span>
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
                                    The experience with the Attari classes is very Awesome as well as Trainer for VMware
                                    VCP7 (Maqsood Sheikha Sir) is very knowledgeable, he has clear all doubt and with Online
                                    Practical's, to learn Vmware I recommend to join Attari Classes India's Best Institute
                                    for Vmware.
                                    <br>
                                    <br>
                                    Thanks Attari Classes.
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
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Yogesh Meherwade</span>
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
                                <div class="testimonial__text">I have taking online training on Vmware 7,
                                    With HOL it's very easy to sync with trainer and do practical on your own. Maqsood sir
                                    is pro he share best knowledge which is very useful in production environment as well.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="aws_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>AWS Training Schedule</b></h4>
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
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">VMware Training Testimonials</h3>
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




    <section id="azure_batch" class="prje_cove_section light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> <b>Azure Training Schedule</b></h4>
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
            <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht ">Azure Training Testimonials</h3>
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
