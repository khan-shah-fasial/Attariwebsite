@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description',
    ' ')

@section('page.type', 'website')

@section('page.content')

    <!----------========== contact start ===============-------------------->
    <!-- ---------------------- Contact banner start ---------------- -->


    <section class="contact_banner">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="breadcrums_section paddtb80">
                        <h1 class="sm-aboutus">Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a>»</a></li>
                                <li class="breadcrumb-item"><a><b>Contact Us</b></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>


            </div>
        </div>
    </section>

    @php
        $session_data = json_decode(session('user_ip'), true);
    @endphp

    <!-------------------Contact Form------------------------------>
    <section class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2 form_container">
                    <h6 class="mb-md-5 mb-4 contact_form_heading">Fill out this form for booking a career guidance session
                    </h6>

                    <form id="add_contact_form" action="{{url(route('contact.create'))}}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                        <input type="hidden" name="section" value="Contact Us Form" data-aos-once="true" data-aos="fade-up" />
                        <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />

                        <input type="text" name="name" placeholder="Enter Name" required/>
                        <input type="email" name="email" placeholder="Enter E-mail" required/>
                        <input type="country" name="country" placeholder="Your Country" required/>
                        <input type="phone" name="phone" placeholder="Mobile no with Country code" required/>
                        <select name="services">
                            <option value="">--Select Course--</option>
                            <option value="VMwere">VMwere</option>
                            <option value="AWS Cloud">AWS Cloud</option>
                            <option value="Azure Cloud">Azure Cloud</option>
                            <option value="MSCE">MSCE</option>
                            <option value="CCNA">CCNA</option> 
                        </select>
                        <textarea placeholder="Message" name="description" rows="4"></textarea>

                        <input type="hidden" name="ip" value="{{ $session_data['ip'] }}" data-aos-once="true" data-aos="fade-up" />

                        <input type="hidden" name="ref_url" value="{{ url()->previous() }}" data-aos-once="true" data-aos="fade-up" />

                        <button type="submit">Send</button>

                    </form>

                </div>
                <div class="col-md-6 order-md-1  info_contact">
                    <h3 class="mb-4">Contact Information</h3>
                    <div class="icon_text_contact mb-4">
                        <div><i aria-hidden="true" class="fas fa-phone-alt"></i></div>
                        <div>
                            <p>+91 7738375431</p>
                            <p>+91 9987088551</p>
                        </div>
                    </div>
                    <div class="icon_text_contact mb-4">
                        <div><i aria-hidden="true" class="far fa-envelope"></i></div>
                        <div>
                            <p>info@attariclasses.in</p>
                        </div>
                    </div>
                    <h3 class="mb-4">Hour of operation</h3>
                    <p class="mb-3">All Day</p>
                    <div class="icon_text_contact">
                        <div><i aria-hidden="true" class="far fa-clock"></i></div>
                        <div>
                            <p>09:00 To 19:30 IST</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!------------------------------Google Map --------------------------------------->

    <section class="google_map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text_location_content">
                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                    <h3>Head Office</h3>
                    <p>
                        Attari Classes, Kanakia Zillion, F wing, 4th Floor, 438, LBS
                        Marg-CST Road Junction Kurla (West), Mumbai-400070 (Entry from
                        Gate No 2 on CST Road)
                    </p>
                </div>
                <div class="col-md-6 ppdd00">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.718263638187!2d72.87394717438183!3d19.076120851970384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c88d956c3b09%3A0xfc9b452c90e0db0a!2sAttari%20Classes%20VMwareMCSE%2FMCSA%2C%20AWS%2C%20Azure%2C%20CCNA%20Training%20Institute%20in%20Mumbai!5e0!3m2!1sen!2sin!4v1688557053565!5m2!1sen!2sin"
                        width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy"
                        class="iframe_map1" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2 text_location_content">
                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                    <h3>Branch Office</h3>
                    <p>
                        C Wing, Baitun Noor Appartment, 504-505, 5th, SG Barve Marg,
                        Mumbai, Maharashtra 400070
                    </p>
                </div>
                <div class="col-md-6 order-md-1 ppdd00">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.7367227153973!2d72.87629607438184!3d19.07530975199573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c960af8b7201%3A0x7131baacc5da6443!2sAttari%20IT%20Trainings%20%7C%20MCSE%20%7C%20CCNA%20%7C%20MCSA%20%7C%20Azure%20%7C%20VMwareAWS!5e0!3m2!1sen!2sin!4v1688557085824!5m2!1sen!2sin"
                        width="100%" height="400" style="border: 0" allowfullscreen="" class="iframe_map1"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>







    <!-----------------------------Contact Social Section------------------------------->

    <section class="social_media gray_bgg1">
        <div class="">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="text_content pt70">
                        <h3 class="socail_head">#Social Media</h3>
                        <p class="socail_para">
                            Social media refers to the means of interactions among people in which
                            they create, share, and/or exchange information and ideas in virtual
                            communities and networks.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-6 contact_pdd0">
                            <div class="icons">
                                <div class="facebook">
                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                    <h4>16K</h4>
                                    <p>Followers</p>
                                    <a target="_blank" href="https://www.facebook.com/AttariClass">Check Our Facebook</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 contact_pdd0">
                            <div class="icons">
                                <div class="instagram">
                                    <i aria-hidden="true" class="fab fa-instagram"></i>
                                    <h4>2.2K</h4>
                                    <p>Followers</p>
                                    <a target="_blank" href="https://www.instagram.com/attari.classes/">Check Our
                                        Instagram</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6 contact_pdd0">
                            <div class="icons">
                                <div class="linkedIn">
                                    <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                    <h4>6.3K</h4>
                                    <p>Followers</p>
                                    <a target="_blank"
                                        href="https://www.linkedin.com/company/attari-classes-vmware-aws-azure-mcsa-ccna-training-in-mumbai/">Check
                                        Our LinkedIn</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6 contact_pdd0">
                            <div class="icons">
                                <div class="youtupe">
                                    <i aria-hidden="true" class="fab fa-youtube"></i>
                                    <h4>10.3K</h4>
                                    <p>Subscribers</p>
                                    <a target="_blank" href="https://www.youtube.com/c/AttariClasses-IT-Trainings">Check
                                        Our YouTube Channel</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6 contact_pdd0">
                            <div class="icons">
                                <div class="telegram">
                                    <i aria-hidden="true" class="fab fa-telegram"></i>
                                    <h4>190+</h4>
                                    <p>Subscribers</p>
                                    <a target="_blank" href="https://t.me/attariclasses">Check Our Telegram</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-6 contact_pdd0">
                            <div class="icons">
                                <div class="twitter">
                                    <i aria-hidden="true" class="fab fa-twitter"></i>
                                    <h4>32+</h4>
                                    <p>Followers</p>
                                    <a target="_blank"
                                        href="https://twitter.com/i/flow/login?redirect_after_login=%2FAttariClasses">Check
                                        Our Twitter</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------=============== contact end =============== -------------------->

@endsection
