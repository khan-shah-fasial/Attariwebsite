@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description', ' ')

@section('page.type', 'website')

@section('page.content')
    <!-- -------------------- terms start ---------------- -->
    <style>
        .our_website {
            padding-top: 50px;
        }

        .privacy_heading {
            color: #012749;
            font-size: 30px;
            font-weight: 500;
            line-height: 1.2em;

        }

        .our_website .items {
            list-style: none;
            padding-left: 0px;
        }

        .our_website .items .item span i {
            font-size: 20px;
        }

        .our_website .items .item .list_text {
            font-size: 19px;
        }
    </style>
    <section class="privecy_policy">
        <section class="privecy_banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb">
                            <h1 class="sm-aboutus">Terms of Service</h1>
                            <p> <span class="home_breadcrumb"><a href="">Home</a></span> » <span
                                    class="first_breadcrumb"><a href="">Terms of Service</a></span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our_website">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="privacy_heading py-3">Our website</h3>
                        <ul class="items">
                            <li class="item d-flex align-items-center">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Our website address is: https://attariclasses.in & the Video
                                    Learning Management System is accessible via
                                    https://lms.attariclasses.in</span>
                            </li>
                        </ul>



                    </div>
                    <div class="col-12 mt-5">
                        <h3 class="privacy_heading py-3">Definitions of basic terms, rights and restriction:</h3>

                        <p class="my-4 fs-5">
                            Basic terms
                        </p>
                        <ul class="items">
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">These Terms of Service of Attari Classes constitute a binding
                                    contract between you (“Member” or “Customer” or “You”), regarding the terms under which
                                    the Company will provide you with access to online courses, classroom training or Video
                                    based courses purchased by You</span>
                            </li>

                        </ul>

                    </div>
                    <div class="col-12 mt-5">
                        <h3 class="privacy_heading py-3">Rights & restrictions</h3>


                        <ul class="items">
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Members are granted a time-limited, non-exclusive, revocable,
                                    nontransferable, and non-sublicensable right to access that course corresponding to the
                                    purchase made on LMS portal</span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">The portion of the course corresponding to the purchase will be
                                    available to the Member as long as the course is maintained by the Company</span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Registering on LMS portal is a one time process, so <b> changing
                                        Mobile no or email id is not permissible </b> </span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">The <b>videos course</b> available on our LMS portal needs to be
                                    <b>purchased separately</b> </span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">The videos available on our LMS portal are provided as a <b>video
                                        stream and are not downloadable.</b> </span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Access to Video Course on our LMS portal <b> if given </b> as <b>
                                        complimentary to students </b> enrolling for Instructor Led Training(ILT), no
                                    charges are taken for same, Only Instructor Led Training charges are taken, <b>so Video
                                        course access can be revoked</b> at any time for any student and <b>no question from
                                        students can be entertained as it was given as complimentary along with ILT</b>
                                </span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">By agreeing to grant such access, the Company does not obligate
                                    itself to maintain the course, or to maintain it in its present form. </span>
                            </li>
                        </ul>

                    </div>
                    <div class="col-12 mt-5">
                        <h3 class="privacy_heading py-3">Availability of Website</h3>


                        <ul class="items">
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Member recognizes that the traffic of data through the Internet may
                                    cause delays</span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">Member further acknowledges and accepts that the website will not be
                                    available on a continual twenty-four hour basis due to such delays, or delays caused by
                                    the Company’s upgrading, modification, or standard maintenance of the website.</span>
                            </li>

                        </ul>

                    </div>
                    <div class="col-12 mt-5">
                        <h3 class="privacy_heading py-3">Intellectual Property Rights</h3>


                        <ul class="items">
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">The online course is owned by the Company and is protected by Attari
                                    Classes</span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">No right, title or interest in or to the online course or any
                                    portion thereof, is transferred to any Member, and all rights not expressly granted
                                    herein, are reserved by the Company.</span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">The Company name, the Company logo, and all related names, logos,
                                    product and service names, designs and slogans, are trademarks of the Company. Member
                                    may not use such marks without the prior written permission of the Company.</span>
                            </li>


                        </ul>

                    </div>
                    <div class="col-12 mt-5">
                        <h3 class="privacy_heading py-3">Company Obligations</h3>


                        <ul class="items">
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">The Company will use commercially reasonable efforts to enable the
                                    online course to be accessible, except for scheduled maintenance and required repairs,
                                    and except for any interruption due to causes beyond the reasonable control of, or not
                                    reasonably foreseeable by the Company.</span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">In unfortunate circumstances if company is closed due to whatever
                                    reason, all the purchased services would be ceased to exists and in such a situation
                                    company or management would not be held responsible for the same, also refund for the
                                    service purchased would not be given</span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">In unfortunate death of the instructor the course might not be
                                    updated regularly, or might not be updated for ever or might be removed from website and
                                    in such a situation no refund can be granted</span>
                            </li>

                        </ul>

                    </div>
                    <div class="col-12">
                        <h3 class="privacy_heading py-3">Governing Law and Venue</h3>

                        <ul class="items">
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">These Terms of Service are construed and governed by the laws of
                                    Govt of India</span>
                            </li>
                            <li class="item d-flex align-items-center my-4">
                                <span class="me-3"><i aria-hidden="true"
                                        class="far fa-arrow-alt-circle-right"></i></span>
                                <span class="list_text">If any of the provisions, either in whole or in part, of the
                                    contract is or becomes invalid or unenforceable, this shall not serve to invalidate the
                                    remaining provisions thereof.</span>
                            </li>

                        </ul>

                    </div>
                    <p>
                        <i>last updated on June 2023</i>
                    </p>
                </div>
            </div>
        </section>
    </section>

    <!-- -------------------- terms end   ---------------- -->

@endsection
