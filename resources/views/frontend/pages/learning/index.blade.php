@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description', ' ')

@section('page.type', 'website')

@section('page.content')

    <!----------========== Learning Page start ===============-------------------->


    <section class="sm-at banner1 learning_banner">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="breadcrums_section paddtb80">
                        <h1 class="sm-aboutus">Learning</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a>»</a></li>
                                <li class="breadcrumb-item"><a><b>Learning</b></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="services courses_learning">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1 class="services_headign">Virtualization & Cloud Computing</h1>
                </div>
                <div class="col-md-4 box_services">
                    <img src="/assets/frontend/images/vmvare_coursimg.jpg" alt="" />
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            <a href=""> VMware vSphere 7 </a>
                        </h5>
                        <div class="course_button">
                            <a href="{{ url(route('vmware-practice-test')) }}">Practice Test</a>
                            <a href="{{ url(route('vmware-books-guides')) }}">Books &amp; Guides</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 box_services">
                    <img src="/assets/frontend/images/azure_courseimg.jpg" alt="" />
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            <a href=""> AWS Cloud Solution Architect </a>
                        </h5>
                        <div class="course_button">
                            <a href="{{ url(route('aws-practice-test')) }}">Practice Test</a>
                            <a href="{{ url(route('aws-books-guides')) }}">Books &amp; Guides</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 box_services">
                    <img src="/assets/frontend/images/aws_courseimg.jpg" alt="" />
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            <a href="">AZURE Cloud Administrator</a>
                        </h5>
                        <div class="course_button">
                            <a href="{{ url(route('azure-practice-test')) }}">Practice Test</a>
                            <a href="{{ url(route('azure-books-guides')) }}">Books &amp; Guides</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------Server & Networking------------------  -->
    <section class="services courses_learning">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center my-4">
                    <h1 class="services_headign">Server & Networking</h1>
                </div>
                <div class="col-md-4 box_services">
                    <img src="/assets/frontend/images/vmvare_coursimg.jpg" alt="" />
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            <a href=""> Microsoft Windows Server MCSE </a>
                        </h5>
                        <div class="course_button">
                            <a href="{{ url(route('mcse-practice-test')) }}">Practice Test</a>
                            <a href="{{ url(route('mcse-books-guides')) }}">Books &amp; Guides</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 box_services">
                    <img src="/assets/frontend/images/azure_courseimg.jpg" alt="" />
                    <div class="text_box">
                        <h5 class="text_services_heading">
                            <a href=""> Cisco Networking CCNA </a>
                        </h5>
                        <div class="course_button">
                            <a href="ccna-practice-test.php">Practice Test</a>
                            <a href="ccna-books-guides.php">Books &amp; Guides</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-------------=============== Learning Page end =============== -------------------->

@endsection
