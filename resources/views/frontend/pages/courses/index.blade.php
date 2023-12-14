@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description',
    ' ')

@section('page.type', 'website')

@section('page.content')

    <!----------========== courses start ===============-------------------->
    <section class="vm_banner pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-9 width70">

                    <div class="col-12">
                        <div class="breadcrums_section pb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                    <li class="breadcrumb-item"><a>»</a></li>
                                    <li class="breadcrumb-item"><a><b>VMwere Training</b></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>


                    <div class="top_content_section">
                        <h1>VMware Training Certification Course</h1>
                        <p class="rating"> 4.9 <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i> (1012) Rating
                        </p>
                        <p class="desc pe-5"> VMware Online Training Classes will help you prepare for the VCP 7
                            certification exam,
                            with Attari Classes instructor-led sessions, you will be able to effectively architect and
                            deploy server on
                            vSphere 7. You will learn ESXi, vCenter, vMotion, SVMotion HA, DRS, FT and much more. You will
                            work with
                            various components of VMware and create highly available and fault-tolerant design. Learn from
                            top-rated
                            mentors to become a VMware administrator. Enroll for this VMware VCP Virtualization course today
                            and get a
                            head start in your career. </p>
                    </div>

                    <button type="button" class="btn coursepg_enquiryform" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal_coursepg"> Enquire Now</button>

                    <a href="#syllabuse" class="check_curriculum"> Check Curriculum </a>
                </div>
                <div class="col-3 width30 imagebox d-flex align-items-center justify-content-center">
                    <a href="https://youtu.be/iTGqlC2X-CQ" data-fancybox="gallery">
                        <img data-src="/assets/frontend/images/1280-720-5.jpg" class="lazyload" alt="">
                        <div class="pulse-button space_1"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="vm_nav" id="vm_nav">
        <div class="container">
            <div id="version" class="version highlight-bar">
                <nav class="nav-sections">
                    <ul class="menu34">
                        <li class="menu-item">
                            <a class="menu-item-link active" href="#key_features">Key Feature</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#overviews">Overview</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#syllabuse">Course Content</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#project_cover">Project</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#certificate_section">Certificate</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#batch_shedule">Batch Schedule</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#faqs">FAQ</a>
                        </li>
                        <div class="active-line"></div>
                    </ul>
                </nav>
            </div>
        </div>
    </section>


    <!-----------------key features---------------------->

    <div class="page-sections">
        <section id="key_features" class="page-section key_features py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="section_heading pb-3 text-center textcolor_blck mb-3">VMware Virtualization Training Key
                            Features
                        </h4>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <p> Instructor led live Training </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-laptop"></i>
                            </div>
                            <p> Hands-on Practical Training </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <p> Trainer Support on WhatsApp </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <p> Recorded lectures on LMS </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i aria-hidden="true" class="fas fa-book-open"></i>
                            </div>
                            <p> Access to Learning Portal </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-file"></i>
                            </div>
                            <p> Certificate from Attari classes </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <p> Access to forum for new Job Openings </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="key_boxes">
                            <div class="key_features_icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <p> Support Desk for Training & Certification </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--overviews------------------------------->
        <section id="overviews" class="page-section overview py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 width70">
                        <h4 class="section_heading pb-3 text-center textcolor_blck"> VMware Certification Course Overview
                        </h4>
                        <ul class="li_font">
                            <li> Take your VMware Skills to the next level with VMware learning from the Industry Experts.
                            </li>
                            <li> This VMware Virtualization certification training will help you to be VMware certified
                                professional
                                (VCP) </li>
                            <li> You will learn skills such as how to Install ESXi, Manage Data Center using vCenter,
                                Perform Live
                                migration of Servers and Storage, configure High availabiliy and Auto Load balancing of
                                server, Configure
                                Virtual Networking and Storage and much more by performing hands-on practical’s with the
                                trainer, </li>
                            <li> You will also learn the best practices to be followed while working on VMware projects in
                                the industry.
                            </li>
                        </ul>


                        <div class="accordion main_accrdion_cls" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Advantages of VMware Learning
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>VMware Virtualization is one of the fastest-growing areas of IT and<strong>
                                                vSphere 7</strong> is a
                                            proven and reliable Data Center Virtualization(VCP-DCV) platform, which is used
                                            by hundreds of
                                            thousands of customers. Learning skills that are in demand is a win/win
                                            scenario. VMware learning
                                            skills will leverage your existing experience with networking and/or servers,
                                            and build on that as
                                            you implement and manage virtualized environments.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Who Should go for VMware Virtualization Training
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>System Administrators having understanding/exposure of Microsoft Windows Server
                                            or Linux Server
                                            operating systems</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How will VMware vSphere Course help you in career
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>VCP-DCV 7 is a reliable and robust virtualization platform, having skill on
                                            vSphere can help you in
                                            getting good opportunities in today’s market</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-3 width30 position_sticky">
                        <div class="talktous_box">
                            <i class="fa-sharp fa-solid fa-phone"></i>
                            <p>Talk To Us</p>
                            <p>
                                <a href="tel:+917738375431">+91 7738375431</a>
                            </p>
                            <p>
                                <a href="mailto:info@attariclasses.in">info@attariclasses.in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--syllabas section -->


        <section id="syllabuse" class="page-section syllabus_section gradiant_bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 width70">
                        <h4 class="section_heading pb-3 textcolor_wht float_left"> VMware VCP 7 Classes Syllabus </h4>
                        <div class="download_carricullam float_right"><a class="" href=""><img
                                    data-src="/assets/frontend/images/pdf.webp" class="lazyload" alt=""> Download Curriculum</a>
                        </div>

                        <div style="clear:both"></div>

                        <div class="accordion main_accrdion_cls" id="Syllabus">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Module 1:- Basic of vSphere & Virtulization
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                Introduction to VMware vSphere 7 Data Center (VCP-DCV) Server
                                                Virtualization
                                            </li>
                                            <li>Storage Virtualization</li>
                                            <li>Network Virtualization</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Module 2:- Installing ESXi & Deploying vCenter Server
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>What is vSphere, ESXi & vCenter.</li>
                                            <li>vSphere Hypervisor(Free Version).</li>
                                            <li>Support & Upgrade of ESXi Free Version.</li>
                                            <li>Downloading, Installing & Configuring ESXi7.</li>
                                            <li>
                                                How to Download ESXi & vCenter 60 days Trial from VMware Website
                                                ESXi free version Support & Upgrade.
                                            </li>
                                            <li>Installing ESXi & DNS | Deploying VCSA-Stage1.</li>
                                            <li>Configuring VCSA-Stage2.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Module 3:- Configuring vCenter
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>How to configure vCenter.</li>
                                            <li>Create Cluster & Folders.</li>
                                            <li>ESXi Maintenance Mode.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Module 4:- Licensing/Pricing of vSphere & vCenter
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>vSphere & vCenter Licensing</li>
                                            <li>Assigning License to ESXi & vCenter</li>
                                            <li>vSphere & vCenter Pricing</li>
                                            <li>vSphere kits Licensing & Pricing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        Module 5:- VM Creation & Modification
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Create VM with Hot Add enabled</li>
                                            <li>Methods of mounting ISO image to boot the VM</li>
                                            <li>VM tools Installation</li>
                                            <li>Hot Add of RAM, CPU & HDD</li>
                                            <li>Hot Extend of HDD</li>
                                            <li>Register/Unregister VM</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        Module 6:- Basics of Cloud Computing
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Cloud Computing- IaaS, SaaS, PaaS</li>
                                            <li>How Server is Created in AWS Cloud</li>
                                            <li>Cloud is backbone of Virtualization</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Module 7:- Templates, Cloning, Snapshot & Content Library
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Exporting & Deploying OVF Template</li>
                                            <li>Converting VM to Template</li>
                                            <li>Creating Content Library</li>
                                            <li>Adding ISO images and Templates in Content Library</li>
                                            <li>VM files extension</li>
                                            <li>Cloning Options</li>
                                            <li>Guest OS Customization</li>
                                            <li>Suspended State of VM</li>
                                            <li>Difference between Backup & Snapshot</li>
                                            <li>Creating, Managing & Deleting Snapshot</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEleven" aria-expanded="false"
                                        aria-controls="collapseEleven">
                                        Module 8:- vSphere Security & Host Profile
                                    </button>
                                </h2>
                                <div id="collapseEleven" class="accordion-collapse collapse"
                                    aria-labelledby="headingEleven" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Basics of vSphere Security</li>
                                            <li>Adding AD Domain to SSO</li>
                                            <li>Assigning permission to SSO user and AD user</li>
                                            <li>Creating Roles</li>
                                            <li>Creating and Applying Host Profiles</li>
                                            <li>Reset ESXi root password using Host profile</li>
                                            <li>Exporting & Importing Host Profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwelve">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwelve" aria-expanded="false"
                                        aria-controls="collapseTwelve">
                                        Module 9:- vSphere Networking
                                    </button>
                                </h2>
                                <div id="collapseTwelve" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwelve" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>vSphere Virtual Networking Terminologies</li>
                                            <li>Discussion on Standard Switch</li>
                                            <li>Virtual Machine Port Group &amp; VMkernel Network Adapter</li>
                                            <li>
                                                Creating Virtual Machine Port Group, VMkernel Network Adapter
                                                &amp; Standard Switch
                                            </li>
                                            <li>Adding/Removing vmnic on vSwitch</li>
                                            <li>NIC Teaming &amp; Active/Passive Failover testing</li>
                                            <li>vSphere Advance Networking Scenarios</li>
                                            <li>VLAN Tagging</li>
                                            <li>Trunk Ports</li>
                                            <li>Seperating vMotion and FT Traffic</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThirteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThirteen" aria-expanded="false"
                                        aria-controls="collapseThirteen">
                                        Module 10:- vSphere Storage
                                    </button>
                                </h2>
                                <div id="collapseThirteen" class="accordion-collapse collapse"
                                    aria-labelledby="headingThirteen" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Datastore Concepts</li>
                                            <li>Shared Storage</li>
                                            <li>SAN vs NAS</li>
                                            <li>VMFS and NFS</li>
                                            <li>FC &amp; iSCSI SAN</li>
                                            <li>Thin Disk, Thick Lazy Disk &amp; Thick Eager Disk</li>
                                            <li>Basics of HCI-Hyper Converged Infrastructure</li>
                                            <li>Formatting Local Storage as VMFS</li>
                                            <li>Adding iSCSI SAN to ESXi host and Formatting as VMFS</li>
                                            <li>Mounting NFS storage on ESXi host</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFourteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFourteen" aria-expanded="false"
                                        aria-controls="collapseFourteen">
                                        Module 11:- vMotion & SVMotion
                                    </button>
                                </h2>
                                <div id="collapseFourteen" class="accordion-collapse collapse"
                                    aria-labelledby="headingFourteen" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Live Storage Migration using SVMotion</li>
                                            <li>Live Server Migration using vMotion</li>
                                            <li>
                                                Live Server &amp; Storage Migration without Shared Storage
                                                (vMotion+SVMotion)
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFifteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFifteen" aria-expanded="false"
                                        aria-controls="collapseFifteen">
                                        Module 12:- DRS & SDRS
                                    </button>
                                </h2>
                                <div id="collapseFifteen" class="accordion-collapse collapse"
                                    aria-labelledby="headingFifteen" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Load Balancing across ESXi hosts using DRS</li>
                                            <li>Enhanced vMotion Compatibility (EVC)</li>
                                            <li>Automation Levels in DRS</li>
                                            <li>DRS Rules to keep VM Separate &amp; Together</li>
                                            <li>DRS rule VM to Host</li>
                                            <li>Power Saving using DPM</li>
                                            <li>Load Balancing across Datastore using SVMotion</li>
                                            <li>Automation levels in SDRS</li>
                                            <li>SDRS VM Affinity &amp; vmdk Anti-Affinity rules</li>
                                            <li>
                                                Overriding SDRS cluster Setting for vmdk anti-affinity rule
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSixteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSixteen" aria-expanded="false"
                                        aria-controls="collapseSixteen">
                                        Module 13:- High Availability & Fault Tolerance
                                    </button>
                                </h2>
                                <div id="collapseSixteen" class="accordion-collapse collapse"
                                    aria-labelledby="headingSixteen" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Requirements &amp; Licensing for High Availability(HA)</li>
                                            <li>Election of Master &amp; Slave Host</li>
                                            <li>Configuring &amp; Testing HA</li>
                                            <li>Primary &amp; Secondary VM in FT</li>
                                            <li>Configuring &amp; Testing Fault Tolerance</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeventeen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeventeen" aria-expanded="false"
                                        aria-controls="collapseSeventeen">
                                        Module 14:- vSphere Distributed Switch
                                    </button>
                                </h2>
                                <div id="collapseSeventeen" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeventeen" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Creating Distributed Switch</li>
                                            <li>Adding ESXi Host to dvSwitch</li>
                                            <li>Migrating all VMs &amp; VMkernel to dvSwitch</li>
                                            <li>Migration from Standard to Distributed switch</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEighteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEighteen" aria-expanded="false"
                                        aria-controls="collapseEighteen">
                                        Module 15:- P2V Conversion, Backup of vCenter & Update Manager
                                    </button>
                                </h2>
                                <div id="collapseEighteen" class="accordion-collapse collapse"
                                    aria-labelledby="headingEighteen" data-bs-parent="#Syllabus">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>P2V/ V2V using VMware vCenter Converter Standalone</li>
                                            <li>Taking Backup of vCenter and Restoring Stage 1</li>
                                            <li>Taking Backup of vCenter and Restoring Stage 2</li>
                                            <li>
                                                Using VMware Lifecycle Manger to Upgrade and Patch ESXi host
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-3 width30 position_sticky">
                        <div class="bookdemofreeform_course gray_bgg1 margin-top55">
                            <h4 class="text-center">Book a <b>FREE</b> Demo</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" name="coursename" class="form-control"
                                        placeholder="VMware Training" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="coursename" class="form-control"
                                        placeholder="Enter Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="coursename" class="form-control"
                                        placeholder="Enter Email" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="coursename" class="form-control"
                                        placeholder="Your Country" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="coursename" class="form-control"
                                        placeholder="Mobile Number with Country code" required>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--Projects Covered section -->

        <section id="project_cover" class="page-section prje_cove_section light_gray_bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="section_heading pb-3 text-center"> VMware VCP-DCV 7 Projects Covered</h4>
                        <div class="owl-carousel owl-theme projects-covered">
                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Testing Free Licensing on
                                                        ESXi</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i aria-hidden="true" class="fab fa-google-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Login to ESXi using VMware Host Client</li>
                                                    <li>Apply Free License to ESXi from VMware website</li>
                                                    <li>Check the pros/cons of ESXi Free license</li>
                                                    <li>Remove Free License key and convert back to evaluation mode</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Configuring vCenter</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-link"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Create Datacenter</li>
                                                    <li>Add ESXi Host in Datacenter</li>
                                                    <li>Create Cluster and move ESXi Host inside Cluster</li>
                                                    <li>Put Host in Maintenance mode</li>
                                                    <li>Remove ESXi Host from Cluster</li>
                                                    <li>Create Folder and Move Virtulal objects IN/Out of folder</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Creating VM, Clones and
                                                        Template</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-server"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Create VM and Install OS</li>
                                                    <li>Test Hot add of RAM &amp; CPU</li>
                                                    <li>Test Hot Add of Hard disk &amp; Hot extend of Hard disk</li>
                                                    <li>Create Clone of VM</li>
                                                    <li>Create Template from VM</li>
                                                    <li>Create VM from Template</li>
                                                    <li>Register / Unregister VM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Content Library</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-tv"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Create Content Library</li>
                                                    <li>Push Templates in Content Library</li>
                                                    <li>Create VMs from Templates in Content Library</li>
                                                    <li>Upload other files in Content Library</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Snapshot</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-scale-balanced"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Take Snapshot of VM</li>
                                                    <li>Test different States of VM using Snapshot</li>
                                                    <li>Scheduling Snapshots</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">vSphere Security</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Creating user in SSO</li>
                                                    <li>Creating user in Microsoft Active Directory</li>
                                                    <li>Integrating Microsoft AD with vCenter</li>
                                                    <li>Testing Microsoft AD &amp; SSO user permission on vCenter</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Host Profile</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-sharp fa-solid fa-gears"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Configure ESXi Host</li>
                                                    <li>Create Host Profile from ESXi host</li>
                                                    <li>Attach Host profile &amp; Check Complaince</li>
                                                    <li>Apply Host profile to non-compliance Host</li>
                                                    <li>Reset Password of ESXi Host using Host Profile</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">vSphere Networking</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-gears"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Create VM Port Group</li>
                                                    <li>Create VM Kernal Network Adapter</li>
                                                    <li>Create new vSwitch</li>
                                                    <li>Move VM from one switch to another</li>
                                                    <li>NIC Teaming &amp; testing Failover</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Storage-SAN/NAS</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-gears"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Check Configured LUNs &amp; Shares in Storage</li>
                                                    <li>Format LUNs as VMFS and use on ESXi host</li>
                                                    <li>Mount NAS as NFS on multiple ESXi Host</li>
                                                    <li>Check Storage Connectivity on all ESXi Host</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">vMotion &amp; SVMotion</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-gears"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Configure vMotion</li>
                                                    <li>Perform Live Migration using vMotion</li>
                                                    <li>Configiure SVMotion</li>
                                                    <li>Perform Live Migration using SVMotion</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">HA &amp; DRS</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-gears"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Create Cluster and Configure HA</li>
                                                    <li>Test HA by making ESXi host down</li>
                                                    <li>Check VM Started on another ESXi host are available</li>
                                                    <li>Enable DRS on Cluster</li>
                                                    <li>Check Load Balancing of VM using DRS</li>
                                                    <li>Configure DRS rules and test</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">SDRS</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-gears"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Create Datastore cluster</li>
                                                    <li>Enable SDRS on Datastore Cluster</li>
                                                    <li>Check Load Balancing of VM acreoss datastore</li>
                                                    <li>Configure and test DRS VM Affinity rule</li>
                                                    <li>Configure and test DRS vmdk Anti-Affinty rule</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Fault Tolerance</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-gears"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Create a HA enabled cluster</li>
                                                    <li>Enable Fault Tolerance on VM</li>
                                                    <li>After Secondary is created test Failover</li>
                                                    <li>Make Primary VM down and check Actulal Failover</li>
                                                    <li>Disable FT to delete secondary VM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="projects_covered_box">
                                    <div class="projects_covered__header">
                                        <div class="row">
                                            <div class="col-lg-9 col-10">
                                                <div class="projects_covered__image">
                                                    <span class="projects_covered__name">Distributed Switch</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-2">
                                                <div class="projects_covered__icon">
                                                    <i class="fa-solid fa-gears"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="projects_covered__content">
                                        <div class="projects_covered__text">
                                            <div class="proj-cov">
                                                <ul>
                                                    <li>Create a Distributed Switch</li>
                                                    <li>Create DV Port Group</li>
                                                    <li>Migarte VM kernal Network adapter to vDS</li>
                                                    <li>Migrate VM to VDS</li>
                                                    <li>Traffic diversion to dedicated NIC cards </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="certificate_section" class="page-section certificate_section pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="section_heading pb-3 text-center"> Our VMware Certified Professional Students</h4>
                        <div class="owl-carousel owl-theme professional_students">
                            <div class="item">
                                <div class="cirtificate_img">
                                    <img data-src="/assets/frontend/images/vmware_course_img1-1024x806.webp" class="lazyload"
                                        alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="cirtificate_img">
                                    <img data-src="/assets/frontend/images/vmware_course_img2-1024x806.webp" class="lazyload"
                                        alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="cirtificate_img">
                                    <img data-src="/assets/frontend/images/vmware_course_img4-1024x806 (1).webp" class="lazyload"
                                        alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="cirtificate_img">
                                    <img data-src="/assets/frontend/images/vmware_course_img3-1024x806.webp" class="lazyload"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="testimonials" class="page-section testiminilas_sec gradiant_bg pt-5 pb-5 dot_clr_white">
            <div class="container">
                <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_wht">
                    VMware VCP Training Testimonials
                </h3>
                <div class="large-12 columns">
                    <div class="owl-carousel owl-theme video_testiminials">
                        <div class="item">
                            <div class="testimonial_video">
                                <a href="https://www.youtube.com/embed/T9PrVAio31k" data-fancybox="gallery">
                                    <div class="pulse-button"></div>
                                    <img data-src="/assets/frontend/images/amar_pandey_review.jpg"
                                        class="img-fluid d-block w-100 lazyload" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_video">
                                <a href="https://www.youtube.com/embed/Gx9iRvGxYsg" data-fancybox="gallery">
                                    <div class="pulse-button"></div>
                                    <img data-src="/assets/frontend/images/amar_pandey_review_2.jpg"
                                        class="img-fluid d-block w-100 lazyload" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_video">
                                <a href="https://www.youtube.com/embed/9y-Oiet2HBE" data-fancybox="gallery">
                                    <div class="pulse-button"></div>
                                    <img data-src="/assets/frontend/images/Sohail-MCSE.jpg" class="img-fluid d-block w-100 lazyload"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_video">
                                <a href="https://www.youtube.com/embed/EqTLrlzQwkI" data-fancybox="gallery">
                                    <div class="pulse-button"></div>

                                    <img data-src="/assets/frontend/images/Vinayak-CCNA.jpg" class="img-fluid d-block w-100 lazyload"
                                        alt="">
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
                                        <div class="col-lg-6 col-10">
                                            <div class="testimonial__image">
                                                <img data-src="/assets/frontend/images/Suryakant.png"
                                                    class="img-fluid d-block w-100 lazyload" alt="">
                                                <span class="testimonial__name">Suryakant Mishra</span>
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
                                    <div class="testimonial__text">
                                        I've taken VMware online training here, I was bit afraid
                                        about it at the beginning but the trainer Mr. Maqsood has
                                        made it really smooth and easy. The training is all about
                                        hands on practice, 100% practical approach. Thanks to Attari
                                        classes and Maqsood sir.
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
                                                <img data-src="/assets/frontend/images/unnamed-2.jpg"
                                                    class="img-fluid d-block w-100 lazyload" alt="">
                                                <span class="testimonial__name">Pravinkumar Devanpalli</span>
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
                                    <div class="testimonial__text">
                                        I have joine Attari classes for the second time. First time
                                        it was classroom based training for VMware and now online
                                        course for AWS. I would say the quality of this classes is
                                        one of the best in terms of sharing the practical approach
                                        and explaining the theory. This concept is very less. If a
                                        person wants to learn VMware and AWS along with Practicals,
                                        then I would recommend him or her to join Attari Classes and
                                        bring a turning point in his career. Each and every concept
                                        will be thought at Attari Classes. Thank You Maqsood Sir.
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
                                                <img data-src="/assets/frontend/images/powar.png"
                                                    class="img-fluid d-block w-100 lazyload" alt="">
                                                <span class="testimonial__name">Gajanan Powar</span>
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
                                    <div class="testimonial__text">
                                        Attari Class is Best institute to learn VMware. "The
                                        training was excellent and deep knowledge was received in a
                                        friendly environment. Maqsood sir have excellent teaching
                                        skills .Got to know so many hidden concept from VMware
                                        perspective. Practical lab & Training center Over all very
                                        satisfied with the training & highly appreciated with the
                                        trainer knowledge. I will definitely join the another new
                                        course cloud
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
                                                <img data-src="/assets/frontend/images/shallesh.png"
                                                    class="img-fluid d-block w-100 lazyload" alt="">
                                                <span class="testimonial__name">Shailesh kadam</span>
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
                                    <div class="testimonial__text">
                                        It was a good experience for learning VMware online at
                                        Attari Classes. Maqsood Sir are knowledgeable and are
                                        capable of clearing all doubts. They will teach you from
                                        very basic to advanced levels. Highly recommended.
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
                                                <img data-src="/assets/frontend/images/bhasker_koli.png"
                                                    class="img-fluid d-block w-100 lazyload" alt="">
                                                <span class="testimonial__name">Bhaskar Koli</span>
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
                                    <div class="testimonial__text">
                                        It was a good experience for learning VMware online at
                                        Attari Classes. Maqsood Sir are knowledgeable and are
                                        capable of clearing all doubts. They will teach you from
                                        very basic to advanced levels.

                                        <br />
                                        <br />

                                        online training for AWS is worth it and i can follow the
                                        lecture and practicals without any lag.Also i would
                                        appreciate the efforts to implement the new learning portal
                                        (LMS) to review the classes for my reference.
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
                                                <img data-src="/assets/frontend/images/mahesh_pandey.png"
                                                    class="img-fluid d-block w-100 lazyload" alt="">
                                                <span class="testimonial__name">Mahesh Pandey</span>
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
                                    <div class="testimonial__text">
                                        Today I am very happy becoz I have completed my VMware
                                        course in attari classes,I would say thanks to Maqsood sir
                                        becoz his teaching style will help you to clear your doubts
                                        as well as it was my first experience on online platform,
                                        but Maqsood sir taking care very well with theorical and
                                        practical lectures.i will recommend to my friends and
                                        colleagues to joint attari classes.
                                        <br />
                                        <br />

                                        Thanks Attari classes
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
                                                <img data-src="/assets/frontend/images/gaurav_imagfes.png"
                                                    class="img-fluid d-block w-100 lazyload" alt="">
                                                <span class="testimonial__name">Gaurav Neware</span>
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
                                    <div class="testimonial__text">
                                        The experience with the Attari classes is very Awesome as
                                        well as Trainer for VMware VCP7 (Maqsood Sheikha Sir) is
                                        very knowledgeable, he has clear all doubt and with Online
                                        Practical's, to learn Vmware I recommend to join Attari
                                        Classes India's Best Institute for Vmware.
                                        <br />
                                        <br />

                                        Thanks Attari Classes.
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

                                                <img data-src="/assets/frontend/images/mahesh.png"
                                                    class="img-fluid d-block w-100 lazyload" alt="">
                                                <span class="testimonial__name">Yogesh Meherwade</span>
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
                                    <div class="testimonial__text">
                                        I have taking online training on Vmware 7, With HOL it's
                                        very easy to sync with trainer and do practical on your own.
                                        Maqsood sir is pro he share best knowledge which is very
                                        useful in production environment as well.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="batch_shedule" class="page-section prje_cove_section light_gray_bg pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="section_heading pb-3 text-center"> VMware Training Batch Schedule</h4>
                    </div>
                    <div class="batch_shedule_box">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="batch_subhed">Self Paced Training</h5>
                                <ul>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> 40+ Hours e-learning</li>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> <b>Live Recorded
                                            Lectures</b></li>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> Get free Updates</li>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> Upgrade to Online/Classroom
                                        Training</li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <div class="button_main">
                                    <a href="https://lms.attariclasses.in/" target="_blank">Visit Video Portal</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="batch_shedule_box">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="batch_subhed">Online / Classroom <spam>Preferred</spam>
                                </h5>
                                <ul>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> Everything in self-paced,
                                        plus</li>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> <b>Free DEMO lecture</b>
                                    </li>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> 40+ Hours of live
                                        Insturctor led training
                                    </li>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> Perform live practicals
                                        with the the Trainer
                                    </li>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> Get Trainer Support on
                                        WhatsApp</li>
                                </ul>

                                <table class="batch_table table">
                                    <tbody>
                                        <tr>
                                            <td width="20">DATE</td>
                                            <td width="40">SCHEDULE </td>
                                            <td width="40">TIME </td>
                                        </tr>
                                        <tr>
                                            <td><b>30th JULY</b></td>
                                            <td><b>SAT &amp; SUN (6 WEEKS) </b><span class="text_red">Upcoming Weekend
                                                    Batch</span></td>
                                            <td><b>8:00 AM to 12:00 PM (IST)</b></td>
                                        </tr>
                                        <tr>
                                            <td>24th JUNE</td>
                                            <td>SAT &amp; SUN (6 WEEKS) <span class="text_blue">Batch Started</span></td>
                                            <td>1:00 PM to 5:00 PM (IST)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-3">
                                <div class="button_main getin_touch_bx">
                                    <h5>Get In Touch to Avail <span>20% OFF</span></h5>
                                    <a data-bs-toggle="modal" data-bs-target="#enquiry_modal_coursepg">Book a Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="batch_shedule_box">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="batch_subhed">VMware Corporate Training</h5>
                                <ul>
                                    <li><i aria-hidden="true" class="far fa-check-circle"></i> Self paced & Online/
                                        Classroom training
                                        option are available</li>
                                </ul>
                            </div>

                            <div class="col-md-3">
                                <div class="button_main">
                                    <a data-bs-toggle="modal" data-bs-target="#enquiry_modal_coursepg">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </section>


    <!--Faq section-->


    <section id="faqs" class="page-section overview py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 width70">
                    <h4 class="section_heading pb-3 text-center textcolor_blck"> FAQs on VMware VCP Training &
                        Certification </h4>

                    <div class="accordion--container accordion_style">
                        <li class="accordion">
                            <span>Is it possible to switch from Self-paced training to live
                                instructor-led training?<i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        Yes you can switch from self-paced training to live instructor-led
                                        training by simply paying the difference in fees
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>Who should go for Self paced training ?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        A system administrators, system operators, system engineers, and
                                        who are interested in Data center virtualization(VCP-DCV) can take
                                        this course. If our batch timing are not suitable or you want to
                                        learn fast at your own pace, you can learn using Learning
                                        Managment Sytem (LMS), in LMS you will get get access to live
                                        Recorded lecture and Trainers notes.
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>What if I have queries after VMware course is completed ?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        If you go for Instructor led training , trainer provide support on
                                        Whatsapp, You will have direct access to Trainer Whatsapp number ,
                                        For any queries you can ping trainer on Whatsapp
                                    </p>
                                </div>
                            </ul>
                        </li>

                        <li class="accordion">
                            <span>How to book a Demo Session?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>How to book a Demo Session?</p>
                                </div>
                            </ul>
                        </li>

                        <li class="accordion">
                            <span>Will I get a VMware vSphere 7 course completion certificate?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        Yes, upon completion of the course, you will get a course
                                        certificate from Attari Classes
                                    </p>
                                </div>
                            </ul>
                        </li>

                        <li class="accordion">
                            <span>How will I perform practical in this VMware Learning?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        It will be an Interactive session, you would be performing live
                                        practiclals along with the Trainer We will guide you how to create
                                        FREE tier account in VMware
                                    </p>
                                </div>
                            </ul>
                        </li>

                        <li class="accordion">
                            <span>What if i missed a Instructor led live Lecture?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        No worries, along with the course you get free Access to Learning
                                        Managment Sytem (LMS), where you get topic wise live recorded
                                        lecture and trainers notes
                                        <br />
                                        You can learn using LMS and be ready before the next lecture, for
                                        any queries you can ping trainer on WhatsApp
                                        <br />
                                        Also you can attend the missed session of Vmware course, in any
                                        other live batch
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>Is the access to LMS even after the course is over?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>Yes</p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>I need Career Guidance ?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        Call our Support desk on +91 9987088551 & our Techical Counsellor
                                        will guide you on your career path
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>Do I get support for VMware VCP Online Exam ?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        Yes we would provide you guidance and support for registering and
                                        passing the Data Center Virtualization (VCP-DCV) Exam
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>What will be the duration of VMware Training Course ?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>The Duration of this course is approx 40 hrs</p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>How difficult is to pass Data Center Virtualization (VCP-DCV) exam ?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        VMware training at Attari Classes prepares you to pass VMware
                                        vSphere 7 practical exam, we provide you with practice test so
                                        that you get idea on exam question pattern and easily pass the
                                        VMware Exam
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>Do you have any review from previous students?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>You can just search Attari Classes in Google to check reviews</p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>Do you provide placement assistance?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        Attari Classes is one of the best learning platforms, we make you
                                        Job ready. Since there is a big demand for IT professionals, as
                                        opening arises lots of recruitment firms and our ex-students
                                        contact us, we help our students who are looking for job to
                                        connect to prospective employers. We also help our students
                                        prepare their resumes and provide assistance for interview
                                        preparation, if you go through the course diligently you will be
                                        in a very good position to crack the interviews yourself and find
                                        a well-paid job, matching your profile
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>How much does VMware certification cost and what are payment options?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        For VMware certification cost you can contact us or fill our
                                        enquiry form. You can make payment using Debit Card / Credit Card
                                        /Netbanking/ UPI.
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>What kind of Projects are included in this Course?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        You will be working on exciting projects that will test your
                                        skills, learning capabilities, and practical knowledge, making you
                                        completely industry-ready as you know there is a huge demand for
                                        Certified VMware Professionals in IT market.
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>Can a beginners can go for VMware vSphere certification?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        At Attari classes we provide training to those who are interested
                                        in learning virtualization course so no doubt we offer VMware
                                        certification to beginners.
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>When are the VMware training batches scheduled?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        <span>You can check
                                            <a
                                                href="https://attariclasses.in/vmware-training-certification-online/#fees">here</a>
                                            for VMware batch timings.</span>
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>What is the best place to find more resources for learning VMware on
                                Attari Classes?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        Here are some free resources where you can learn more about VMware
                                    </p>
                                </div>
                            </ul>
                        </li>
                        <li class="accordion">
                            <span>What is the nearest VMware vSphere training offered by Attari
                                Classes?
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <ul>
                                <div class="txt">
                                    <p>
                                        Attari Classes offers VMware training in a number of countries and
                                        cities around the world like
                                        <strong><a
                                                href="https://attariclasses.in/vmware-training-certification-mumbai/">Mumbai</a>,
                                            <a
                                                href="https://attariclasses.in/vmware-training-certification-nagpur/">Nagpur</a>,
                                            <a
                                                href="https://attariclasses.in/vmware-training-certification-jaipur/">Jaipur</a>,
                                            <a
                                                href="https://attariclasses.in/vmware-training-certification-kolkata/">Kolkata</a>,
                                            <a href="https://attariclasses.in/vmware-training-certification-saudi-arabia/">Saudi
                                                Arabia</a>,
                                            <a
                                                href="https://attariclasses.in/vmware-training-certification-oman/">Oman</a>,
                                            <a
                                                href="https://attariclasses.in/vmware-training-certification-england/">England</a></strong>
                                        and other top countries.
                                    </p>
                                </div>
                            </ul>
                        </li>
                    </div>


                    <div class="gradiant_bg bookdemofreeform_course mt-4">
                        <h4 class="text-left textcolor_wht pb-2">Book a <b>FREE</b> Demo</h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="coursename" class="form-control"
                                            placeholder="VMware Training" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="coursename" class="form-control"
                                            placeholder="Enter Name" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="coursename" class="form-control"
                                            placeholder="Enter Email" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="coursename" class="form-control"
                                            placeholder="Your Country" required>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="coursename" class="form-control"
                                            placeholder="Mobile Number with Country code" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>


                </div>
                <div class="col-md-3 width30 position_sticky">
                    <div class="talktous_box margin-top55">
                        <i class="fa-sharp fa-solid fa-phone"></i>
                        <p>Talk To Us</p>
                        <p>
                            <a href="tel:+917738375431">+91 7738375431</a>
                        </p>
                        <p>
                            <a href="mailto:info@attariclasses.in">info@attariclasses.in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    <section class="other_courses light_gray_bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-center"> Other Courses We Offer</h4>
                    <div class="owl-carousel owl-theme other_courses_slider">
                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""> <img data-src="/assets/frontend/images/aws.jpg" class="lazyload" alt=""></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img data-src="images/azure.jpg" class="lazyload"
                                        alt="" /></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""> <img data-src="images/microsft.jpg" class="lazyload"
                                        alt="" /></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img data-src="images/ccna.jpg" class="lazyload"
                                        alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="location_section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="location_box">
                        <h5>
                            Find VMware Certification Training Course in other Cities:
                        </h5>

                        <ul class="">
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-mumbai/">
                                    <span>Mumbai</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-pune/">
                                    <span>Pune</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-bangalore/">
                                    <span>Bangalore</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ahmedabad/">
                                    <span>Ahmedabad</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-delhi/">
                                    <span>Delhi</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-noida/">
                                    <span>Noida</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-jaipur/">
                                    <span>Jaipur</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-nagpur/">
                                    <span>Nagpur</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kolkata/">
                                    <span>Kolkata</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-hyderabad/">
                                    <span>Hyderabad</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-chennai/">
                                    <span>Chennai</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-baroda/">
                                    <span>Baroda</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-surat">
                                    <span>Surat</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-rajkot">
                                    <span>Rajkot</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-thane">
                                    <span>Thane</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-nashik/">
                                    <span>Nashik</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-aurangabad/">
                                    <span>Aurangabad</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kolhapur/">
                                    <span>Kolhapur</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="location_box">
                        <h5>
                            Find VMware Certification Training Course in other Country:
                        </h5>

                        <ul class="elementor-icon-list-items">
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-bangladesh/">
                                    <span>Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-dubai/">
                                    <span>Dubai</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-singapore/">
                                    <span>Singapore</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-new-york/">
                                    <span>New York</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-sydney/">
                                    <span>Sydney</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-toronto/">
                                    <span>Toronto</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-canada/">
                                    <span>Canada</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-saudi-arabia/">
                                    <span>Saudi Arabia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kuwait/">
                                    <span>Kuwait</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-virginia/">
                                    <span>Virginia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-california">
                                    <span>California</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-iowa/">
                                    <span>Iowa</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-qatar/">
                                    <span>Qatar</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-north-carolina">
                                    <span>North Carolina</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-texas/">
                                    <span>Texas</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-england/">
                                    <span>England</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-australia/">
                                    <span>Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-germany/">
                                    <span>Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-oman/">
                                    <span>Oman</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-srilanka/">
                                    <span>Srilanka</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-netherlands/">
                                    <span>Netherlands</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-new-zealand/">
                                    <span>New Zealand</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-malaysia/">
                                    <span>Malaysia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-hong-kong/">
                                    <span>Hong Kong</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-indonesia/">
                                    <span>Indonesia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-philippines/">
                                    <span>Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-nepal/">
                                    <span>Nepal</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-bahrain/">
                                    <span>Bahrain</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-sweden/">
                                    <span>Sweden</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ireland/">
                                    <span>Ireland</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-japan/">
                                    <span>Japan</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-zambia/">
                                    <span>Zambia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kenya/">
                                    <span>Kenya</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-nigeria/">
                                    <span>Nigeria</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ghana/">
                                    <span>Ghana</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-norway/">
                                    <span>Norway</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ethiopia/">
                                    <span>Ethiopia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-sudan/">
                                    <span>Sudan</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-poland/">
                                    <span>Poland</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-finland/">
                                    <span>Finland</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-denmark/">
                                    <span>Denmark</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-fiji/">
                                    <span>Fiji</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-namibia/">
                                    <span>Namibia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-somalia/">
                                    <span>Somalia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-florida/">
                                    <span>Florida</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-ohio/">
                                    <span>Ohio</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-new-jersey/">
                                    <span>New Jersey</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-arizona/">
                                    <span>Arizona</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-georgia/">
                                    <span>Georgia</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-utah/">
                                    <span>Utah</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-idaho/">
                                    <span>Idaho</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-kansas/">
                                    <span>Kansas</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://attariclasses.in/vmware-training-certification-indiana/">
                                    <span>Indiana</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-------------=============== courses end =============== -------------------->

@endsection
