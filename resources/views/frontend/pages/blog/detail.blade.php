@extends('frontend.layouts.app')

@php
    $url = request()->segment('1');
    $page = DB::table('blog_categories')
        ->where('slug', $url)
        ->first();
    //$count = count($author);
    $i = 1;
@endphp

@section('page.title', "$detail->meta_title")

@section('page.description', "$detail->meta_description")

@section('page.type', "$page->name")

@section('page.publish_time', "$detail->updated_at")

@section('page.schema')
    <!--------------------------- Page Schema --------------------------------->

    <script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "{{ url(route('index')) }}"
    }, {
        "@type": "ListItem",
        "position": 2,
        "name": "{{ $page->name }}",
        "item": "{{ url(route(''.$url.'')) }}"
    }, {
        "@type": "ListItem",
        "position": 3,
        "name": "@php echo str_replace('&nbsp;',' ',htmlspecialchars_decode ($detail->title)); @endphp",
        "item": "{{ url()->current() }}"
    }]
}
</script>

    @if ($page->name != 'Deal Update')
        <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "{{ $page->name }}Posting",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    },
    "headline": "{{ strip_tags(htmlspecialchars_decode($detail->title)) }}",
    "description": "{{ strip_tags(htmlspecialchars_decode($detail->short_description)) }}",
    "image": "{{ asset('storage/' . $detail->main_image) }}",
    "author": {
        "@type": "Person",
        "name": [
            
            @php $author_name = DB::table('users')-> where('id', $author)->
            first();@endphp "{{ $author_name->name }}",
        ],
        "url": "{{ url('') }}/"
    },
    "publisher": {
        "@type": "Organization",
        "name": "{{ url('') }}/",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('/assets/frontend/images/cropped-header-logo-1') }}"
        }
    },
    "datePublished": "{{ $detail->updated_at }}"
}
</script>
    @endif

    <!--------------------------- Page Schema end--------------------------------->
@endsection

@section('page.content')

    <!-------================ blog detail start ============ ------------>


    <section class="blog_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrums_section pt-5 pb-4">
                    <nav aria-label="breadcrumb">
                            <ul class="d-flex align-items-center breadcrumb gap-md-3 gap-1 list-unstyled" data-aos="fade-up" data-aos-once="true">
                                <li>
                                    <a href="{{ url(route('index')) }}" class="text-decoration-none" data-aos="fade-up"
                                        data-aos-once="true">Home</a>
                                </li>
                                <li>></li>
                                @if($url == 'blog' || $url == 'news' || $url == 'deal-update')
                                <li>
                                    <a href="{{ url(route(''. $url.'')) }}" class="text-decoration-none" data-aos="fade-up"
                                        data-aos-once="true">
                                        {{ ucfirst($page->name) }}
                                    </a>
                                </li>
                                <li>></li>
                                @endif
                                <li>{{ $detail->title }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="blog_dt_top">
                        <h3 class="pb-3">
                        {{ $detail->title }}
                        </h3>

                        <b><span>Last Update: {{ date('Y-m-d', strtotime($detail->updated_at)) }}</span><span class="ms-3"><i
                                    class="fa-regular fa-eye"></i> Post Views: 413</span></b>
                        <p class="pt-2">{{ $detail->short_description }}</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cirtified_button">
                        <a href="#">Become a Certified Professional</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-----------------------------Recent Posts------------------------ -->
    <section class="recent_post py-5 bggray1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 width__70">
                    <div class="mb-4">
                        <div class="post_box pb-1">                          
<style>
.content {
    width: 100%; /* Adjust the width as needed */
    overflow-wrap: break-word; /* This property ensures that long words break and wrap to the next line */
}

</style>
<div class="text_box_post pb-4 ps-4 pe-4">
    <h6 class="mb-0">
        {{ $detail->title }}
    </h6>
    <p class="content">
        @php echo html_entity_decode($detail->content) @endphp
    </p>
</div>


                            <section id="vmware_batch" class="prje_cove_section pt-5 border-top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="section_heading pb-0 text-center"> <b>VMware Training Schedule</b>
                                            </h4>
                                        </div>

                                        <div class="batch_shedule_box">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <ul>
                                                        <li>
                                                            <i aria-hidden="true" class="far fa-check-circle"></i> <b>Free
                                                                DEMO lecture</b>
                                                        </li>
                                                        <li>
                                                            <i aria-hidden="true" class="far fa-check-circle"></i>
                                                            40+ Hours of live Insturctor led training
                                                        </li>
                                                        <li>
                                                            <i aria-hidden="true" class="far fa-check-circle"></i> Perform
                                                            live practicals with the the Trainer
                                                        </li>
                                                        <li>
                                                            <i aria-hidden="true" class="far fa-check-circle"></i> Get
                                                            Trainer Support on WhatsApp
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
                                                                <td>SAT &amp; SUN (6 WEEKS) <span class="text_blue">Batch
                                                                        Started</span>
                                                                </td>
                                                                <td>1:00 PM to 5:00 PM (IST)</td>
                                                            </tr>

                                                            <tr>
                                                                <td><b>24*7</b></td>
                                                                <td>Self Paced Learning <span class="text_red">Live Recorded
                                                                        Lectures</span>
                                                                </td>
                                                                <td><b class="text_blue"><a
                                                                            href="https://lms.attariclasses.in/">Always
                                                                            Available</a></b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="button_main getin_touch_bx paddingtop41">
                                                        <h5>Get In Touch to Avail <span>21% OFF</span>
                                                        </h5>
                                                        <a href="https://lms.attariclasses.in/" target="_blank">Book a
                                                            Demo</a>

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




                            <section id="testimonials" class="testiminilas_sec pt-4 pb-4">
                                <div class="container">
                                    <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_blck ">VMware Training
                                        Testimonials</h3>
                                    <div class="large-12 columns">
                                        <div class="owl-carousel owl-theme blog_video_testiminials">
                                            <div class="item">
                                                <div class="testimonial_video">
                                                    <a href="https://www.youtube.com/embed/T9PrVAio31k"
                                                        data-fancybox="gallery">
                                                        <div class="pulse-button"></div>
                                                        <img src="/assets/frontend/images/amar_pandey_review.jpg"
                                                            class="img-fluid d-block w-100 lazyload" alt>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial_video">
                                                    <a href="https://www.youtube.com/embed/Gx9iRvGxYsg"
                                                        data-fancybox="gallery">
                                                        <div class="pulse-button"></div>
                                                        <img src="/assets/frontend/images/amar_pandey_review_2.jpg"
                                                            class="img-fluid d-block w-100 lazyload" alt>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial_video">
                                                    <a href="https://www.youtube.com/embed/9y-Oiet2HBE"
                                                        data-fancybox="gallery">
                                                        <div class="pulse-button"></div>
                                                        <img src="/assets/frontend/images/Sohail-MCSE.jpg"
                                                            class="img-fluid d-block w-100 lazyload" alt>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial_video">
                                                    <a href="https://www.youtube.com/embed/EqTLrlzQwkI"
                                                        data-fancybox="gallery">
                                                        <div class="pulse-button"></div>
                                                        <img src="/assets/frontend/images/Vinayak-CCNA.jpg"
                                                            class="img-fluid d-block w-100 lazyload" alt>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>



                            <section id="testimonials" class="testiminilas_sec pt-4 pb-4">
                                <div class="container">
                                    <h3 class="heading_title text-center pddtop_0 pb-3 textcolor_blck ">VMware Training
                                        Testimonials</h3>

                                    <div class="large-12 columns">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="testimonial_box">
                                                    <div class="testimonial__header">
                                                        <div class="row">
                                                            <div class="col-lg-9 col-10">
                                                                <div class="testimonial__image">
                                                                    <img data-src="/assets/frontend/images/badal_img.jpg"
                                                                        class="img-fluid d-block w-100 lazyload" alt>
                                                                    <span class="testimonial__name">Badal
                                                                        Vishwakarma</span>
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
                                                        <div class="testimonial__text">I attended the VMware online
                                                            training of Attari classes. It was a really awesome experience.
                                                            Especially trainer Mr. Maqsood Sheikha gives training with
                                                            superb example. His examples and way of teaching make your
                                                            concepts very clear. Also, online LMS Tool is the best tool to
                                                            revise concepts at any time. I am thankful to Maqsood Sir and
                                                            Attari classes for their efforts.</div>
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
                                                        <div class="testimonial__text">I joined VMware at attari class.
                                                            Attari Classes online training is 1 of the best way to improve
                                                            knowledge and upgrade skill. The trainer Mr. Maqsood sir
                                                            excellent in their fields and the way they explain the topics is
                                                            amazing, specially example. The hard topics explained in so
                                                            simple way by giving daily life examples. I will recommend all
                                                            the new aspirants to join these classes if really want to have
                                                            in-depth knowledge and confidence in the subject.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial_box">
                                                    <div class="testimonial__header">
                                                        <div class="row">
                                                            <div class="col-lg-9 col-10">
                                                                <div class="testimonial__image">
                                                                    <img src="/assets/frontend/images/vinay_yadau_img.jpg"
                                                                        class="img-fluid d-block w-100 lazyload" alt>
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
                                                        <div class="testimonial__text">One can blindly choose Attari
                                                            Classes for VMware training. I have attended Online VMware
                                                            vSphere training. It doesn’t matter you are attending offline
                                                            lecture or online lecture when you have excellent trainer like
                                                            Mr. Maqsood Sheikhas. He is very knowledgeable and a good
                                                            trainer. The way he teaches is a fun and you will never get
                                                            bored during lectures. <br> The most interesting and patent
                                                            feature of Attari classes is LMS, which is beneficial for us
                                                            when our online lectures got missed for any reasons then we can
                                                            do theory and practical multiple times by watching recorded
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
                                                                    <img src="/assets/frontend/images/asif_img.jpg"
                                                                        class="img-fluid d-block w-100 lazyload" alt>
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
                                                        <div class="testimonial__text">Have completed the online VMware
                                                            class in Attari class.It was great experience I specially want
                                                            to say thanks to Maqsood sir .His way of teaching is very
                                                            understandable. The new one thing they have provide the LMS
                                                            (Learning Management System ) in which they have uploaded all
                                                            lectures recording is very helpful to do practice and and for
                                                            the revision of any topic at any time .Thank you sir and Attari
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
                                                                    <img src="/assets/frontend/images/udaysinh_img.png"
                                                                        class="img-fluid d-block w-100 lazyload" alt>
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
                                                        <div class="testimonial__text">VMware training at Attari Classes
                                                            online. Maqsood Sir knowledge and course delivery is
                                                            commendable. He ensures each student understand every concept,
                                                            gives excellent examples, all hands on training. Attari Classes
                                                            LMS is a great portal they have where you can watch videos and
                                                            do lab trainings from recorded lectures. I thoroughly enjoyed
                                                            the training and would highly recommend Attari Classes to
                                                            everyone. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial_box">
                                                    <div class="testimonial__header">
                                                        <div class="row">
                                                            <div class="col-lg-9 col-10">
                                                                <div class="testimonial__image">
                                                                    <img src="/assets/frontend/images/anand_img.png"
                                                                        class="img-fluid d-block w-100 lazyload" alt>
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
                                                        <div class="testimonial__text">I have completed the VMware online
                                                            training of Attari Classes. It was a great learning experience
                                                            by Masqood Sir who is having outstanding teaching skills with
                                                            practical examples which are always relates with life and the
                                                            best thing here is Live Practical with trainer. Attari classes
                                                            provides LMS portal which is great for practice as well as for
                                                            understanding remaining portion.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>


                </div>


                <div class="col-md-4 width__30">
                    <div class="succes_page_form d-block sticky-top blue_gradianbg blog_rights">
                 @include('frontend.component.book_free_Demo_form',[
                    'section' => 'Enquire Now - Blog detail Page',
                ])
            </div>

                </div>
            </div>
        </div>
    </section>



    
                        <div class="bookdemofreeform_course blue_gradianbg blogdt_from">
                        <div class="container">     
                        @include('frontend.component.book_free_Demo_form',[
                    'section' => 'Book a Free Demo - Blog Detail Page',
                ])
                        </div>
                        </div>

@if(count($blog) > 0)


    <section class="related_courses1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-left"> Related Articles</h4>
                </div>

                @foreach ($blog as $row)
            <div class="col-md-3">
                    <div class="related_boxex1">
                        <div class="related_img">
                        <img src="{{ asset('storage/' . $row->main_image) }}" alt="" class="blog_img" />
                        </div>
                        <div class="related_content">
                            <h5>
                                <a href="{{ url(route('blog.detail', ['category' => $url, 'slug' => strtolower(str_replace(' ', '-',$row->slug))] )) }}">{{ $row->title }}</a> 
                            </h5>
                        </div>

                        <div class="related_updated">
                            <p>Last Updated: {{ date('F j, Y', strtotime($detail->updated_at)) }} </p>
                        </div>
                    </div>
                </div>


            @endforeach

              
            </div>
        </div>
        </div>
    </section>
    @endif

    <section class="bggray1 other_courses pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-left"> Courses we offer </h4>
                    <div class="owl-carousel owl-theme trending_course">
                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img src="/assets/frontend/images/vmware-vsphere-e1627535142798.jpg" /></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img src="/assets/frontend/images/aws.jpg" /></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img src="/assets/frontend/images/azure.jpg" /></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img src="/assets/frontend/images/microsft.jpg" /></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="other_crs_box">
                                <a href=""><img src="/assets/frontend/images/ccna.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------========= blog detail end ========== ------------------->

@endsection
