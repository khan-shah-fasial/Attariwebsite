@extends('frontend.layouts.app')

@section('page.title', 'VMware, AWS, AZURE, MCSE / MCSA, and CCNA -Attari Classes Blog')

@section('page.description',
    'Attari Classes blog is the right place to get latest content related to VMware, AWS Cloud , Azure Cloud, MCSE, and CCNA.')

@section('page.type', 'blogs')

@section('page.content')

    <!----------------=============== blog start ================------------->
    <section class="blog_banner pb-md-5 pb-3">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="breadcrums_section pt-4 pb-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="{{ url(route('index')) }}"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a>»</a></li>
                                <li class="breadcrumb-item"><a><b>Blog</b></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="col-12">
                    <div class="banner_boxs">
                        <h4 class="py-2">What you want to learn</h4>
                        <div class="row">
                            <div class="col-md-2">

                            <div class="boxtop_box">
                                <a href="{{ route('blog-course-view', ['course' => 'VMware']) }}">
                                    <i aria-hidden="true" class="fas fa-laptop"></i>
                                    <p>VMware vSphere</p>
                                </a>
                            </div>


                            </div>
                            <div class="col-md-2">
                            
                                <div class="boxtop_box">
                                    <a href="{{ route('blog-course-view', ['course' => 'AWS']) }}">
                                        <i aria-hidden="true" class="fab fa-amazon"></i>
                                        <p>AWS Cloud</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                
                                <div class="boxtop_box">
                                    <a href="{{ route('blog-course-view', ['course' => 'Azure']) }}">
                                        <i aria-hidden="true" class="fab fa-microsoft"></i>
                                        <p>Azure Cloud</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="boxtop_box">
                                    <a href="{{ route('blog-course-view', ['course' => 'MCSE']) }}">
                                        <i aria-hidden="true" class="fab fa-windows"></i>
                                        <p>Windows Server(MCSE)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="boxtop_box">
                                    <a href="{{ route('blog-course-view', ['course' => 'CCNA']) }}">
                                        <i aria-hidden="true" class="fas fa-certificate"></i>
                                        <p>Computer Networks(CCNA)</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------Recent Posts------------------------ -->
    <section class="recent_post py-5 bggray1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="py-2">Recent Posts</h3>
                @foreach($blog as $blogs)
                <div class="col-md-12 mb-4">
                    <div class="post_box">
                        <div class="row align-items-center">
                            <div class="col-md-3 img">
                                <a href="{{ url(route('blog.detail', ['category' =>'blog','slug' => $blogs->slug] )) }}"><img src="{{ asset('storage/' . $blogs->main_image) }}" alt="" /></a>
                            </div>
                            <div class="col-md-9 text_box_post">
                                <h6><a href="{{ url(route('blog.detail', ['category' =>'blog','slug' => $blogs->slug] )) }}">{{ $blogs->title }}</a></h6>
                                <p>{{ $blogs->short_description }}</p>
                                <p class="pt-3"><strong>Last Update:</strong> {{ $blogs->updated_at->format('F j, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="pagination">
                    {{ $blog->links() }} <!-- Pagination links -->
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $learning = DB::table('cms')->where('status', 1)->where('zone', 0)->get(['course_id','slug']);
@endphp
    <section class="other_courses pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-left"> Trending Courses</h4>
                    <div class="owl-carousel owl-theme trending_course">

                        @php $filtered1 = $learning->where('course_id', 5)->first(); @endphp
                        @if($filtered1)
                            <div class="item">
                                <div class="other_crs_box">
                                    <a href="{{ url(route('course.detail', ['slug' => $filtered1->slug] )) }}"><img src="/assets/frontend/images/vmware-vsphere-e1627535142798.jpg" /></a>
                                </div>
                            </div>
                        @endif

                        @php $filtered2 = $learning->where('course_id', 7)->first(); @endphp
                        @if($filtered2)
                            <div class="item">
                                <div class="other_crs_box">
                                    <a href="{{ url(route('course.detail', ['slug' => $filtered2->slug] )) }}"><img src="/assets/frontend/images/aws.jpg" /></a>
                                </div>
                            </div>
                        @endif

                        @php $filtered3 = $learning->where('course_id', 8)->first(); @endphp
                        @if($filtered3)
                            <div class="item">
                                <div class="other_crs_box">
                                    <a href="{{ url(route('course.detail', ['slug' => $filtered3->slug] )) }}"><img src="/assets/frontend/images/azure.jpg" /></a>
                                </div>
                            </div>
                        @endif    

                        @php $filtered4 = $learning->where('course_id', 9)->first(); @endphp
                        @if($filtered4)
                            <div class="item">
                                <div class="other_crs_box">
                                    <a href="{{ url(route('course.detail', ['slug' => $filtered4->slug] )) }}"><img src="/assets/frontend/images/microsft.jpg" /></a>
                                </div>
                            </div>
                        @endif

                        @php $filtered5 = $learning->where('course_id', 10)->first(); @endphp
                        @if($filtered5)
                            <div class="item">
                                <div class="other_crs_box">
                                    <a href="{{ url(route('course.detail', ['slug' => $filtered5->slug] )) }}"><img src="/assets/frontend/images/ccna.jpg" /></a>
                                </div>
                            </div>
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bggray1 other_courses pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-left"> Interview Questions</h4>
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


    <!----------------=============== blog end ================------------->
@endsection
