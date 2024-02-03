@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description', ' ')

@section('page.type', 'website')

@section('page.content')

    <!-- -------------------- About banner start ---------------- -->

    <section class="about_page">
        <section class="sm-at banner1 about_banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrums_section paddtb80">
                            <h1 class="sm-aboutus">About Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                    <li class="breadcrumb-item"><a>»</a></li>
                                    <li class="breadcrumb-item"><a><b>About Us</b></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_attari_classes">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h4 class="aboutpg_hed"> Attari <span class="dark">Classes</span> </h4>
                        <p> Attari Classes is an IT training institute for VMware, AWS, AZURE, MCSE & CCNA courses </p>
                        <p> We provide Instructor led Live Online training to candidates across the globe & Classroom
                            Training in Mumbai, we also have self paced training options (Video Learning) </p>
                        <p> The world class training at Attari Classes is offered through several innovative learning
                            methods and delivery models to cater the unique requirements of a global customer base which
                            emphasize on maximum practical learning </p>
                    </div>
                    <div class="col-md-6 image"> <img src="/assets/frontend/images/Photo-Gallery-6.jpg" alt="" /> </div>
                </div>
            </div>
        </section>
        <!-- --------Our Mission------------ -->
        <section class="about_mission">
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="aboutpg_hed white_color"> Our <span class="light">Mission</span> </h4>
                            <p class="fs-18"> Our mission is to provide quality education with hands-on practical and make
                                understand practical scenarios, all this at very affordable fees. Unlike many others we are
                                specialized in providing training only on few courses so quality is never compromised </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------- Our Achivement---------------------- -->
        <section class="our_achivement">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text_content">
                        <h4 class="aboutpg_hed pt-4"> Our <span class="light display_black">Achievements</span> </h4>
                        <p> Today the name Attari Classes is brand for IT Trainings in Mumbai, we have trained more than
                            6000 candidates working in IT companies like Wipro, TCS, Infosys, Accenture, Capgemeini, etc
                        </p>
                        <p> We have trained candidates across India and other countries like UAE, Oman, Australia,
                            Singapore, USA, Canada, UK, etc. </p>
                        <p> With high end IT infra for practical’s, Attari Classes have fulfilled the demand of candidates
                            for hands-on practical training </p>
                        <button type="button" class="btn bookfreedemo_button none" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a FREE Demo </button>
                    </div>
                    <div class="col-md-6">
                        <div class="about_our_slider">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"> <img src="/assets/frontend/images/our_achivement_1.jpeg"
                                            class="d-block w-100" alt="..." /> </div>
                                    <div class="carousel-item"> <img src="/assets/frontend/images/our_achivement_2.jpeg"
                                            class="d-block w-100" alt="..." /> </div>
                                    <div class="carousel-item"> <img src="/assets/frontend/images/our_achivement_3.webp"
                                            class="d-block w-100" alt="..." /> </div>
                                    <div class="carousel-item"> <img src="/assets/frontend/images/our_achivement_4.webp"
                                            class="d-block w-100" alt="..." /> </div>
                                    <div class="carousel-item"> <img src="/assets/frontend/images/our_achivement_5.jpg" class="d-block w-100"
                                            alt="..." /> </div>
                                    <div class="carousel-item"> <img src="/assets/frontend/images/vmware_course_img1.webp"
                                            class="d-block w-100" alt="..." /> </div>
                                    <div class="carousel-item"> <img src="/assets/frontend/images/vmware_course_img2.webp"
                                            class="d-block w-100" alt="..." /> </div>
                                    <div class="carousel-item"> <img src="/assets/frontend/images/vmware_course_img3.webp"
                                            class="d-block w-100" alt="..." /> </div>
                                    <div class="carousel-item"> <img src="/assets/frontend/images/vmware_course_img4.webp"
                                            class="d-block w-100" alt="..." /> </div>
                                </div>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next"> <span
                                        class="carousel-control-next-icon" aria-hidden="true"></span> <span
                                        class="visually-hidden">Next</span> </button>
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

        <!-- ------------------------ our infras------------------->
        <section class="our_infras gray_bgg1">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 d-flex pt-md-5 ps-md-5 justify-content-center flex-column order-md-2">
                        <h4 class="aboutpg_hed"> Our <span class="light display_black">Infrastructure</span> </h4>
                        <p class="para"> We Provide High end Labs for Hands-on practical training </p>
                        <button type="button" class="btn bookfreedemo_button none" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Enquire Now </button>
                    </div>



                    <div class="col-md-7 img_content order-md-1">
                        <div class="row">
                            <div class="col-6 padd4 marginleftright0">
                                <div class="gallery_boxex">
                                    <a href="images/our_infraimg5.jpg" data-fancybox="gallery"> <img
                                            src="/assets/frontend/images/our_infraimg5.jpg" data-src="/assets/frontend/images/our_infraimg5.jpg" /> </a>
                                </div>
                            </div>
                            <div class="col-6 padd4 marginleftright0">
                                <div class="gallery_boxex">
                                    <a href="images/our_infraimg6.jpg" data-fancybox="gallery"> <img
                                            src="/assets/frontend/images/our_infraimg6.jpg" data-src="/assets/frontend/images/our_infraimg6.jpg" /> </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 padd4 marginleftright0">
                                <div class="gallery_boxex">
                                    <a href="images/our_infraimg7.jpg" data-fancybox="gallery"> <img
                                            src="/assets/frontend/images/our_infraimg7.jpg" data-src="/assets/frontend/images/our_infraimg7.jpg" /> </a>
                                </div>
                            </div>
                            <div class="col-6 padd4 marginleftright0">
                                <div class="gallery_boxex">
                                    <a href="images/our_infraimg8.jpg" data-fancybox="gallery"> <img
                                            src="/assets/frontend/images/our_infraimg8.jpg" data-src="/assets/frontend/images/our_infraimg8.jpg" /> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!---------------------------------location---------------------->
        <section class="about_location">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 location_box_1 d-flex pt-md-5 pe-5 justify-content-center flex-column">
                        <h4 class="aboutpg_hed pt-md-4"> Our <span class="light display_black">Location</span> </h4>
                        <p> We are at located at one of the finest location in Mumbai at Kanakia Zillion </p>
                        <div class="mt-4"> <a>
                                View On Google
                                <i aria-hidden="true" class="fas fa-arrow-right"></i>
                            </a> </div>
                        <a href="contact.php" class="btn bookfreedemo_button mt-4 none"> Contact Us </a>
                    </div>
                    <div class="col-md-7 img_content">
                        <div class="row">
                            <div class="col-6 padd4 marginleftright0">
                                <div class="gallery_boxex">
                                    <a href="images/Photo-Gallery-4.jpg" data-fancybox="gallery"> <img
                                            src="/assets/frontend/images/Photo-Gallery-4.jpg" data-src="/assets/frontend/images/Photo-Gallery-4.jpg" /> </a>
                                </div>
                            </div>
                            <div class="col-6 padd4 marginleftright0">
                                <div class="gallery_boxex">
                                    <a href="images/Photo-Gallery-11.jpg" data-fancybox="gallery"> <img
                                            src="/assets/frontend/images/Photo-Gallery-11.jpg" data-src="/assets/frontend/images/Photo-Gallery-11.jpg" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 padd4 marginleftright0">
                                <div class="gallery_boxex">
                                    <a href="images/Photo-Gallery-6.jpg" data-fancybox="gallery"> <img
                                            src="/assets/frontend/images/Photo-Gallery-6.jpg" data-src="/assets/frontend/images/Photo-Gallery-6.jpg" /> </a>
                                </div>
                            </div>
                            <div class="col-6 padd4 marginleftright0">
                                <div class="gallery_boxex">
                                    <a href="images/Photo-Gallery-2.jpg" data-fancybox="gallery"> <img
                                            src="/assets/frontend/images/Photo-Gallery-2.jpg" data-src="/assets/frontend/images/Photo-Gallery-2.jpg" /> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
        <div class="container">
            <form class="" method="action">
                <h5 class="text-center color_white">Contact Us</h5>

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

@endsection
