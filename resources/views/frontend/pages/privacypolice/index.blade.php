@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description', ' ')

@section('page.type', 'website')

@section('page.content')
    <!-- -------------------- privacy policy start ---------------- -->
    <style>
        .our_website {
            padding-top: 50px;
        }

        .privacy_heading {
            color: #012749;
            font-weight: 500;
            line-height: 1.2em;

        }

        .our_website .items {
            list-style: none;
            padding-left: 0px;
        }
    </style>
    <section class="privecy_policy">
        <section class="privecy_banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb">
                            <h1 class="sm-aboutus">Privacy Policy</h1>
                            <p>
                                <span class="home_breadcrumb"><a href="{{ url(route('index')) }}">Home</a></span> »
                                <span class="first_breadcrumb"><a href="">Privacy Policy</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our_website">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="privacy_heading py-1">Our website</h4>
                        <ul class="items">
                            <li class="item d-flex align-items-center">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Our website address is: https://attariclasses.in & the
                                    Video Learning Management System is accessible via
                                    https://lms.attariclasses.in</span>
                            </li>
                        </ul>
                        <p class="my-2">
                            This Privacy Policy is applicable for any one who does the
                            registration or course engagement at Attari Classes for
                        </p>
                        <ul class="items">
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Online Courses</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Classroom Trainings or</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Video Learning via https://lms.attariclasses.in</span>
                            </li>
                        </ul>
                        <p class="lh-base">
                            This privacy policy sets out how Attari Classes uses and
                            protects any information that you give Attari Classes when you
                            use this website. Attari Classes is committed to ensuring that
                            your privacy is protected. Should we ask you to provide certain
                            information by which you can be identified when using this
                            website, then you can be assured that it will only be used in
                            accordance with this privacy statement. Attari Classes may
                            change this policy from time to time by updating this page. You
                            should check this page from time to time to ensure that you are
                            happy with any changes.
                        </p>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="privacy_heading py-1">What we collect</h4>

                        <p class="my-2">We may collect the following information:</p>
                        <ul class="items">
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Contact information including email address</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Demographic information such as postcode, preferences and
                                    interests</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Other information relevant to customer surveys and/or
                                    offers</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">For the exhaustive list of cookies we collect see the List
                                    of cookies we collect section.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="privacy_heading py-1">
                            What we do with the information we gather
                        </h4>

                        <p class="my-2">
                            We require this information to understand your needs and provide
                            you with a better service, and in particular for the following
                            reasons:
                        </p>
                        <ul class="items">
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Internal record keeping.</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">We may use the information to improve our products and
                                    services.</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">We may periodically send promotional emails about new
                                    products, special offers or other information which we think
                                    you may find interesting using the email address which you
                                    have provided.</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">From time to time, we may also use your information to
                                    contact you for market research purposes. We may contact you
                                    by email, phone, fax or mail. We may use the information to
                                    customise the website according to your interests.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="privacy_heading py-1">Security</h4>

                        <ul class="items">
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">We are committed to ensuring that your information is
                                    secure. In order to prevent unauthorised access or
                                    disclosure, we have put in place suitable physical,
                                    electronic and managerial procedures to safeguard and secure
                                    the information we collect online.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="privacy_heading py-1">How we use cookies</h4>

                        <ul class="items">
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">A cookie is a small file which asks permission to be placed
                                    on your computer's hard drive. Once you agree, the file is
                                    added and the cookie helps analyse web traffic or lets you
                                    know when you visit a particular site. Cookies allow web
                                    applications to respond to you as an individual. The web
                                    application can tailor its operations to your needs, likes
                                    and dislikes by gathering and remembering information about
                                    your preferences.</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">We use traffic log cookies to identify which pages are
                                    being used. This helps us analyse data about web page
                                    traffic and improve our website in order to tailor it to
                                    customer needs. We only use this information for statistical
                                    analysis purposes and then the data is removed from the
                                    system.</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Overall, cookies help us provide you with a better website,
                                    by enabling us to monitor which pages you find useful and
                                    which you do not. A cookie in no way gives us access to your
                                    computer or any information about you, other than the data
                                    you choose to share with us. You can choose to accept or
                                    decline cookies. Most web browsers automatically accept
                                    cookies, but you can usually modify your browser setting to
                                    decline cookies if you prefer. This may prevent you from
                                    taking full advantage of the website.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-2">
                        <h4 class="privacy_heading py-1">Links to other websites</h4>

                        <ul class="items">
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Our website may contain links to other websites of
                                    interest. However, once you have used these links to leave
                                    our site, you should note that we do not have any control
                                    over that other website. Therefore, we cannot be responsible
                                    for the protection and privacy of any information which you
                                    provide whilst visiting such sites and such sites are not
                                    governed by this privacy statement. You should exercise
                                    caution and look at the privacy statement applicable to the
                                    website in question.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h4 class="privacy_heading py-1">
                            Controlling your personal information
                        </h4>

                        <ul class="items">
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">You may choose to restrict the collection or use of your
                                    personal information in the following ways:</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">If you have previously agreed to us using your personal
                                    information for direct marketing purposes, you may change
                                    your mind at any time by writing to or emailing us at
                                    info@attariclasses.in
                                </span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">We will not sell, distribute or lease your personal
                                    information to third parties unless we have your permission
                                    or are required by law to do so. We may use your personal
                                    information to send you promotional information about our
                                    courses which we think you may find interesting if you tell
                                    us that you wish this to happen.</span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">You may request details of personal information which we
                                    hold about you, A small fee will be payable. If you would
                                    like a copy of the information held on you please write to
                                    info@attariclasses.in
                                </span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">If you believe that any information we are holding on you
                                    is incorrect or incomplete, please write to or email us as
                                    soon as possible, at the above address. We will promptly
                                    correct any information found to be incorrect.
                                </span>
                            </li>
                            <li class="item d-flex align-items-center my-2">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">If you want to get all your info deleted, you can write a
                                    mail to us at info@attariclasses.in and we would delete all
                                    the info provided by you from our database (Note- After
                                    deletion you will not be able to login and access the LMS
                                    platform, in future if you wish to access our LMS platform
                                    at
                                </span>
                            </li>
                        </ul>
                    </div>
                    <p>
                        <i>last updated on May 20, 2021</i>
                    </p>
                </div>
            </div>
        </section>
    </section>


    <!-- -------------------- privacy policy  end   ---------------- -->





@endsection
