@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description',
    ' ')

@section('page.type', 'website')

@section('page.content')

    <!----------========== reviews start ===============-------------------->

    <section class="reviews_banner">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="breadcrums_section paddtb80">
                        <h1 class="sm-aboutus">Reviews</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                <li class="breadcrumb-item"><a>»</a></li>
                                <li class="breadcrumb-item"><a><b>Reviews</b></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-----------------------Reviews Section------------------------------>


    <section id="testimonials" class="testiminilas_sec pt-lg-5 pb-lg-5 pt-4 pb-4 slider_content_dots">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">VMwere Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Vishal Gaikwad</span>
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
                                <div class="testimonial__text">"I have join the VMware classes at Attari Classes and I
                                    completed course. Thank you so much sir sharing your knowledge and teaching sharing with
                                    us...
                                    Its very good experience with lms portal and hol for practice. Thank you Maqsood Sir."
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
                                            <img data-src="/assets/frontend/images/nityanand_img.jpg"
                                                class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Azhar Shaikh</span>
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
                                <div class="testimonial__text">"I have attended VMware from Attari classes and can say
                                    Attari classes it training is one of best online and offline in the classroom training.
                                    Mr. Maqsood Shaikh sir is well experienced and very student friendly and try always to
                                    support student.
                                    thanks for the amazing support from Attari classes."</div>
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
                                            <span class="testimonial__name">Adam Hatodkar</span>
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
                                <div class="testimonial__text">"I had great experience in The ATTARI CLASSES. I attended
                                    VMWARE both online + Offline in the class room lectures BUT the class room experience
                                    was amazing and very helpful, also concentrate on class very well. Making new friends in
                                    IT Circle. Also LMS is the best way to practice.
                                    The way teaching Mr. MAQSOOD SIR it's extremely amazing, understanding and simplicity of
                                    teaching with lot's of example. Teaching from scratch. He had deep knowledge in IT
                                    Industry. Thank you MAQSOOD SIR for giving me so much knowledge.
                                    Hope we can learn more about VMWare and other things from you in the Future."</div>
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
                                            <span class="testimonial__name">Jeetendra Kharkar</span>
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
                                <div class="testimonial__text">"I am impressed your teaching skills and knowledge it's been
                                    Top Notch , i am very lucky guy that such kind trainer it's been worth and teaching of
                                    the VMware course it's been very precise and so essential with very ease. The concept of
                                    each and every topic which goes thoroughly each and every point it's been upto mark. Me
                                    and classroom students we enjoyed your VMware lectures, Explaining each every
                                    fundamental of every topic is so easiest way, and above that sharing experiences with
                                    companies and knowledge it's been next level. I really this kind of trainer explained so
                                    many things from ground level to advance level and no other trainer will explain like
                                    this. Always focused on practice and practical is must do everyone always praised for
                                    each and every students whether in classroom or online students. " Always backed by you
                                    and support its help always" . Good part of your sir you can't give excuses while
                                    anything or subject you always cleared doubts and help to resolve. that we enjoyed and
                                    learned Vmware lectures, "A big thank you A tons of blessings to you sir"</div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/udaysinh_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Sankar Pavanasam</span>
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
                                <div class="testimonial__text">"Attended VMWare Training by online. Trainer Maqsood Sir
                                    taught amazing in a session. He interact with all students and doubts are cleared also
                                    in out of syllabus. Thank you sir. Great opportunity for me and Personally I got a great
                                    knowledge from him. Thank you Maqsood Sir and Attari Classes."</div>
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
                                            <span class="testimonial__name">Vinod Jaiswar</span>
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
                                <div class="testimonial__text">"I have completed my VMware training at Attari classes, and
                                    its very good experience. The trainer Maqsood Sir is experience and professional
                                    instructor, he give the good examples to explain any topic and they are very friendly to
                                    explain and clear our small small doubts. he was takes everyone along. he is very
                                    supportive for all People. and he is very good man in real life.
                                    LMS is very helpful to understand doubts and regular practicals.
                                    I would take another more course with Attari classes from Maqsood sir in future. and i
                                    will suggest to my all IT friends for trainning.
                                    Overall I am very Happy with the training."</div>
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
                                            <span class="testimonial__name">Ambuj Yadav</span>
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
                                <div class="testimonial__text">"Hi to every one today i completed my VMware trading from
                                    Attari Classes &amp; Maqsood sir is one of the best trainer of VMware in Mumbai if any
                                    one want to do VMware training your can take training from Attari Classes and LMS is one
                                    of the best option if you miss any lecture."
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
                                            <span class="testimonial__name">Banshidhar Mishra</span>
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
                                <div class="testimonial__text">"I have just done VMWare online training from Attari Classes
                                    by Mr. Maqsood Shaikha Sir, and LMS is the very helpful for practice and proper
                                    understanding from home/office. Every topics, doubts and problems are easily resolve by
                                    Maqsood Sir. Maqsood Sir is the great trainer, he is openly explain every types of
                                    problems about actual production environment. Maqsood Sir's examples are very
                                    interesting for the topics explanation. I learn very well VMWare online training...
                                    Thank you Maqsood Sir..."</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal"> Book a Demo</button>
                </div>
            </div>
        </div>
    </section>




    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 gray_bgg1 slider_content_dots">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">AWS Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Sanjiv Kadam</span>
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
                                    I had completed online training of AWS Cloud and VMware course from Attari Classes. It
                                    was very good experience to learn through interactive online platform from Maqsood Sir.
                                    Before joining this courses I was thinking AWS is more difficult to understand as
                                    compare to Microsoft Azure but when I actually started learning from Maqsood sir, it’s
                                    very easy to understand both AWS Cloud & VMware.
                                    I like the way of their teaching from first Demo lecture only. Maqsood sir teach any
                                    difficult topic in very simple way with our daily life examples so that anyone can
                                    understood easily. Before joining this course I was worried whether my all doubts will
                                    get clear by trainer or not but as the course started my all doubts cleared by Maqsood
                                    sir every time. I like one sentence they always used while teaching “My Dear Friends” ….
                                    Regarding query on any topic while learning I always get quick response from Maqsood sir
                                    on WhatsApp. LMS features of Attari classes is also one Bonus to us as we can learn any
                                    missed lecture through LMS and clear all doubts from trainer. After completing your
                                    course also you can do the revision of all topic and cleared you query anytime. I would
                                    highly recommend Attari class to all others, those are looking for career in Cloud
                                    computing….
                                    Thanks to Maqsood sir for both AWS Cloud & VMware Training as well as Attari classes for
                                    everything especially quick support always….!!!</div>
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
                                            <span class="testimonial__name">Ravi Vishwakarma</span>
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

                                    Aree my dear friend 😀😀......You are checking the review of very best classes of Cloud
                                    Course, I want to tell you guys that I have completed AWS SAA course from here, whose
                                    experience I am sharing that here Mr. Maqsood Sir whose teaching method is very amazing,
                                    which explains the concepts of each and every topic very deeply.
                                    If there is some problem in the electric power supply of your home then you cannot
                                    directly contact Gautam Adani, nor will he come and solve your problem. But in Attari
                                    Classes you can directly contact Mr. Maqsood sir and he will solve your problem but
                                    problem should be technical issue related only.

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
                                            <img src="/assets/frontend/images/vinay_yadau_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Ab.Mateen Nagnoori</span>
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
                                    Completed AWS Cloud Online training (Solutions Architect) at Attari classes,also i
                                    attend offiline lecture to meet Trainer and discuss my query,
                                    The Superb Feature and Most Intresting is LMS (Learning Management System ), which is
                                    beneficial for us when our online lectures got missed for any reasons then we can
                                    watching recorded Lectures videos,There is one another good feature which is remote
                                    assistance. Whenever you stuck somewhere in practicals and when you update to trainer
                                    (maqsood sheikha) next voice you heard "my dear friend share you remote Access,He is
                                    very knowledgeable and a good trainer,he gives real life examples which makes the topic
                                    easy to understand,and some time he covers many other important topics which are out of
                                    syllabus.
                                    i have Completed Vmware course from him in the year 2017, I would like to join other
                                    courses as when I required in future.
                                    Thank you so much. Brother Maqsood sheikha love you the way you teach ...I hope you'll
                                    always with us in future.</div>
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
                                            <span class="testimonial__name">Kiran Katakdhond</span>
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
                                    I completed the "AWS Solution Architect" online training course from Attari Classes. I
                                    am an Ex student of Attari classes and the only reason I joined this class for AWS is
                                    Maqsood sir's excellent teaching skills. He gives a very realistic example which helps
                                    in understanding the theory and clearing doubts. Maqsood sir has the best knowledge in
                                    the IT industry.
                                    LMS is the best feature for students to revise topics and practical. I would like to say
                                    thank you to Maqsood sir and the team for their efforts.</div>
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
                                            <span class="testimonial__name">Abdul sharif</span>
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
                                    I have given 5 star to attari class because whenever i have attend the lec i feel that i
                                    have attend the family meeting and one of us senior family member is teaching AWS course
                                    with lots of love,care and respect. One imp thing is both zameer sir and maqsood sir
                                    send reminder in group before one day and 15 min of lec "Guys we have a lecture
                                    tomorrow". Koi student kaise lec miss krega fir bhala. I have completed MSCE and AWS
                                    from attari class and insha allah one day i will complete all course from attari class.
                                    Thanks Zameer sir and Maqsood sir.</div>
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
                                            <span class="testimonial__name">Omkar Parab</span>
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
                                <div class="testimonial__text">Amazing Experience Learning AWS solutions architect
                                    associate course by Maqsood Sir. Theory and Hands-on practical explained by Sir in the
                                    simplest way possible. Also Attari Classes provides LMS for Revision which is pretty
                                    Helpful.
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
                                            <img src="/assets/frontend/images/udaysinh_img.png" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Shoaib Sayyed</span>
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
                                <div class="testimonial__text">I have completed AWS course training from Attari classes.
                                    Both online and offline It was a really awesome experience. Especially trainer Mr.
                                    Maqsood Sheikha Sir gives training with superb teaching skill. His examples and way of
                                    teaching make your concepts very clear. Also, online LMS Tool is the best tool to revise
                                    concepts at any time. There is no difference either learn online or offline from attari
                                    class, the teaching is always best. I am thankful to Maqsood Sir and he is a best
                                    teacher.
                                    I would recommend everyone to join AWS course from attari classes & get the best
                                    learning experience.</div>
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
                                            <span class="testimonial__name">Zuber shikalgar</span>
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
                                <div class="testimonial__text">I have taken couple of AWS online class from udemy and
                                    youtube in past but my overall concepts were cleared after I completed AWS Solution
                                    Architect course from Attari classes. Very good learning experience with Maksood Sir
                                    from the classroom.
                                    Practicals are taken during lectures so that we get a proper handson.
                                    Examples were very easy to understand and relatable.Doubts were addressed properly.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal"> Book a Demo</button>
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

    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 slider_content_dots">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">Azure Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Vikas kurane</span>
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
                                <div class="testimonial__text">I have completed Online Microsoft Azure Administrator class
                                    in Attari Class. It was great experience I specially want to say thanks to Zameer Sir.
                                    They will teach you from basic to advanced Level.
                                    Designation:-Specialist</div>
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
                                            <span class="testimonial__name">Siddesh Bhabal</span>
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
                                <div class="testimonial__text">I have Completed Azure Administrator course from Attari
                                    Classes & it was really helpful me to step ahead in my career, i really thankful to
                                    Zameer sir, who has cleared all the topics well & good & special thanks to Attari
                                    classes as they have provided lifetime access of LMS portal to every student.</div>
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
                                            <span class="testimonial__name">Narayana Swamy</span>
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
                                <div class="testimonial__text">I attended Azure online training sessions from Attari
                                    classes. Its really a good experience, especially trainer Mr. Zameer gives training in a
                                    very simple fashion. His examples and way of teaching make your concepts clear and its
                                    totally practical based training session. Also, online LMS is the best tool to revise
                                    concepts at any time. Its really good place to learn Azure concepts. Thank you Zameer
                                    Sir and Attari classes.</div>
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
                                            <span class="testimonial__name">Sarfaraz Khan</span>
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
                                <div class="testimonial__text">I would suggest people who are freshers and experienced both
                                    to join Attari Classes to get the best knowledge about servers and network. Also if you
                                    are into Cloud you can go for AWS or Microsoft Azure. Trainers Zameer Sir and Maqsood
                                    Sir are champs in training students. It is mostly practical hands-on training which
                                    helps in our day to day work at our jobs. I have cleared all my doubts about servers and
                                    networking. I am looking forward to learn about the cloud next. I would recommend it
                                    highly.</div>
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
                                            <span class="testimonial__name">Sarang Panchal</span>
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
                                <div class="testimonial__text">Hi, this is my second training @ Attari classes &amp; it is
                                    a great learning experience. Earlier I had completed the MS AZURE training &amp;
                                    currently the CCNA class. Trainer is awesome (Zameer Sir) &amp; clears all the query
                                    related to topics whether it is Azure or CCNA. Must go for it guys.
                                    Sarang Panchal
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
                                            <span class="testimonial__name">Suraj Kanaujia</span>
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
                                    One of the best class in Mumbai for clearing your concept. I have taken trainings for
                                    Microsoft Azure &amp; AWS. Both trainer ie. Zameer Sir and Maqsood Sir way of teaching
                                    is best with examples.
                                    In this competitive market of IT, it is necessary to upgrade yourself with latest
                                    technologies, Attari classes is providing best in class teachings to professionals
                                    helping them to grow them further in corporate world.
                                    Further LMS concept is unique and provide flexibility to those working is shifts and
                                    busy schedules, helping them to revise the concept 24/7.
                                    Suraj Kanaujia
                                    System Engineer at YouGov
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
                                            <span class="testimonial__name">Ashish Gaikwad</span>
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
                                <div class="testimonial__text">Attended Azure training by Zameer Sir. He has very good
                                    knowledge about Azure and knows how to deliver best training. Attari classes insist on
                                    doing live practicals and answer everyone's queries and doubts.
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
                                            <span class="testimonial__name">Ravi Deshpande</span>
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
                                <div class="testimonial__text">Just today completed AZure class with Atari class and
                                    trainer was one of the best is zameer bhai. Thanks to zameer bhai for all knowledge
                                    sharing . Most important part of this training is during class if someone face any issue
                                    zameer bhai take remote of that students and rectify that issue
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal"> Book a Demo</button>
                </div>
            </div>

        </div>
    </section>



    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 gray_bgg1 slider_content_dots">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">MCSE Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Suman Prasad</span>
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
                                <div class="testimonial__text">I have completed my MCSE training class at Attari Classes.
                                    It was great experience for me. I wanted to give special thanks to Zameer Sir for
                                    wonderful teaching concept and for his knowledge.</div>
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
                                            <span class="testimonial__name">Mukesh Kumar Singh</span>
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
                                <div class="testimonial__text">I have done MCSE Online class from attari classes , it was
                                    great experience to learn online and I m totally satisfied , doubt handle technic is
                                    superb, way of teaching was awesome ,They provided to me live practical and trenner
                                    availability, They always provide support when i need .
                                    Hence I m recommending to attari class who really want to upgrade your self and online
                                    study
                                    thank you attari class .</div>
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
                                            <span class="testimonial__name">Swapnil Para</span>
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
                                <div class="testimonial__text">I attend MCSE Course from attari classes. It's really good
                                    experience. Especially thanks to zameer sir gives training in very simple language.LMS
                                    is best tool to revise concepts at any time.
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
                                            <img src="/assets/frontend/images/asif_img.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Shoyeb Bagwan</span>
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
                                <div class="testimonial__text">I like to share my experience with attari
                                    I joined here and started course in MCSE and it was great learning experience with great
                                    lecturer Mr.Zameer . His teaching method is very brilliant as easily anyone can learn
                                    quickly .
                                    Looking forward to learn more from him</div>
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
                                            <span class="testimonial__name">Mohd Irshad</span>
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
                                <div class="testimonial__text">As per my first time experience, Attari Class is one of the
                                    best online training for MCSE with practical.
                                    I have attended Attari class for learning MCSE .
                                    Zameer Sir is one of the best trainer for MCSE, the way of his teaching style was
                                    amazing.. Vice is Very Clear Thanx Zameer Sir.
                                    They are providing LMS feature to us, it is really helps to revisit the topics and
                                    lectures multiple times.
                                    After this course I think I've been moving a step and ahead.</div>
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
                                            <span class="testimonial__name">Memon Saeed</span>
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
                                <div class="testimonial__text">I have done my MCSE and CCNA course Online from Attari
                                    Classes, there have a interactive session and always have a support of the trainer ,we
                                    get LMS to see the videos for the revision,and the LMS Is for lifetime that's the magic
                                    of it , if we revise the videos and getting some doubt then we can get the support form
                                    the trainer any time and the best beauty of it the way of teaching...that I have never
                                    seen....</div>
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
                                            <span class="testimonial__name">Chandran Kuchin</span>
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
                                <div class="testimonial__text">I'm the ex student of Attari classes, I have done my VMware
                                    course from Attari classes on 2017 and also I have completed my VCP-DC6 certification.I
                                    have joined MCSE course at Attari classes to brush up my knowledge for my day today
                                    work. A big thanks to Zameer sir for sharing the great knowledge and concepts with us.
                                    So every student can easily understand. Also I would like to share one more thing I was
                                    not able to attend multiple online lectures due to my office weekend activities. But LMS
                                    is a great learning platform where we can easily go through the missed lectures and we
                                    will revise whenever we want to do even I did the same with the help of LMS. So i
                                    recommend everyone students to join Attari classes to upgrade your skill in this
                                    challenging world.
                                    For all students invest little amount to Attari class and gain big amount from IT
                                    organization.
                                    @Attari classes soon I will be available for Azure course.</div>
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
                                            <span class="testimonial__name">Roshan Mandavkar</span>
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
                                <div class="testimonial__text">Attended Online MCSE training at Attari Classes. As we
                                    created our lab at AWS, we practiced at home and office also. They also provide LMS for
                                    study. Overall it was nice Experience at Attari Classes.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal"> Book a Demo</button>
                </div>
            </div>
        </div>
    </section>



    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 slider_content_dots">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">CCNA Google Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Tejas Mendon</span>
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
                                <div class="testimonial__text">I had opt for CCNA online training , Zameer sir is well
                                    updated to the course and helps alot with any issues during the training and is
                                    available for any doubt clearing on WhatsApp, u can choose this course if u want to
                                    start your journey in IT . LMS is provided which is a +++ , Really enjoyed learning!!!
                                    Will be learning further courses from here !!</div>
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
                                            <span class="testimonial__name">Sandeep Sharma</span>
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
                                <div class="testimonial__text">We joined the July batch ccna of attari, our trainer Zameer
                                    Momin sir told difficult topic also in easy way,Also covered all the chapters of
                                    ccna.Jamir sir is a good person as a trainer,and all candidate motivated by zameer
                                    sir.So all experience very good with attari & zameer sir.........</div>
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
                                            <span class="testimonial__name">Megha Deshmukh</span>
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
                                <div class="testimonial__text">I had taken CCNA course (online) from Attari Classes, and
                                    the experience has been good, Doubts are cleared Online itself and if Needed there is
                                    always LMS option for Revision, also FAQ's regarding the topics and Pdf of same is also
                                    available it was really a Great Learning Experience.who don’t know anything about
                                    networking must go Atari’s CCNA course.
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
                                            <img src="/assets/frontend/images/asif_img.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Tekatie Scholastica Teerite</span>
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
                                <div class="testimonial__text">I highly recommend that Attari Classes is the best and
                                    suitable place to start, refreshing and deepen your skills and knowledge in IT.
                                    I completed CCNA course and I appreciate Sir Zameer way of explaining complex concept in
                                    a very simple language. It is very beneficial in my career. Lms is servicable and I love
                                    it.</div>
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
                                            <span class="testimonial__name">Naman Sharma</span>
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
                                <div class="testimonial__text">From Attari classes I have done CCNA and Zameer sir has
                                    cleared many concept of CCNA with easy learning and he always motivate students for
                                    bright future.Best part of attari class is
                                    1. Zameer sir and 2.LMS after the lecture we can view the classes again and Zameer is
                                    always 24×7 ready to clear any doubt.</div>
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
                                            <span class="testimonial__name">Bezawada Omprakash</span>
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
                                <div class="testimonial__text">I have taken online CCNA training in attari classes,the
                                    instructor zameer has good knowledge and exposure in networking,servers and cloud part.i
                                    strongly recommend attari classes .</div>
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
                                            <span class="testimonial__name">Rajashree sarode</span>
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
                                <div class="testimonial__text">I have attend CCNA training from Attari classes. this is my
                                    first experience with this field I was freshers but the way they teach us it's excellent
                                    <img draggable="false" role="img" class="emoji" alt="💯"
                                        src="https://s.w.org/images/core/emoji/14.0.0/svg/1f4af.svg">
                                    . classes provide LMS it's very helpful for upgrading our self at anytime. sir starts
                                    from the basic that's help me alot to understand high level things.thanks you so much
                                    and m glad to join Attari classes
                                    <img draggable="false" role="img" class="emoji" alt="🌹"
                                        src="https://s.w.org/images/core/emoji/14.0.0/svg/1f339.svg">
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
                                            <img src="/assets/frontend/images/udaysinh_img.png" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Harishchand Jaiswar</span>
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
                                <div class="testimonial__text">I took the CCNA training from the Attari-classes. Mr. Zameer
                                    sir is provided training and he is very good knowledgeable & big heart person and I am
                                    very happy to do the course from the Attari-classes and the online training is very good
                                    thinking and we have already save the travel time and money and one of the good practice
                                    lab are available and we have do the live practical from the trainer and if we miss the
                                    any lecture of the classes so LMS system is very good wave to revision & practice.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/Attari+Classes+VMwareMCSE%2FMCSA,+AWS,+Azure,+CCNA+Training+Institute+in+Mumbai/@19.076195,72.876574,16z/data=!4m7!3m6!1s0x0:0xfc9b452c90e0db0a!8m2!3d19.0761945!4d72.8765735!9m1!1b1?hl=en-US">
                        View more on Google <i aria-hidden="true" class="fab fa-google-plus-g"></i></a>
                </div>
                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal"> Book a Demo</button>
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

    <section id="testimonials" class="testiminilas_sec gray_bgg1 pt-5 pb-5">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">Video Reviews</h3>
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


            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn">
                    <a target="_blank" href="https://www.youtube.com/channel/UCvY5iTFZdZ0I5FpzZL8g8Yw"> View more on
                        YouTube <i aria-hidden="true" class="fab fa-youtube"></i></a>
                </div>
                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal"> Book a Demo</button>
                </div>
            </div>


        </div>
    </section>


    <section id="testimonials" class="testiminilas_sec pt-5 pb-5 slider_content_dots">
        <div class="container">
            <h3 class="heading_title text-center pddtop_0 pb-3 ">Facebook Reviews</h3>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial_box">
                            <div class="testimonial__header">
                                <div class="row">
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/badal_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Badal Vishwakarma</span>
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
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img data-src="/assets/frontend/images/nityanand_img.jpg"
                                                class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Nityanand Pandey</span>
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
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/vinay_yadau_img.jpg" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Vinay Yadav</span>
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
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/asif_img.jpg" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Asif</span>
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
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/udaysinh_img.png" class="img-fluid d-block w-100 lazyload"
                                                alt>
                                            <span class="testimonial__name">Udaysinh patil</span>
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
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Anand Jade</span>
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
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Anand Jade</span>
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
                                    <div class="col-lg-9 col-10">
                                        <div class="testimonial__image">
                                            <img src="/assets/frontend/images/anand_img.png" class="img-fluid d-block w-100 lazyload" alt>
                                            <span class="testimonial__name">Anand Jade</span>
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


            <div class="col-12 d-flex justify-content-center gap-2">
                <div class="training_btn">
                    <a target="_blank" href="https://www.facebook.com/AttariClass/reviews"> View more on Facebook <i
                            aria-hidden="true" class="fab fa-facebook-square"></i></a>
                </div>
                <div class="training_btn none">
                    <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                        data-bs-target="#enquiry_modal"> Book a Demo</button>
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

    <!-------------=============== reviews end =============== -------------------->

@endsection
