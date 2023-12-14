@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description',
    ' ')

@section('page.type', 'blogs')

@section('page.content')

    <!----------------=============== blog start ================------------->
    <section class="blog_banner">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="breadcrums_section pt-5 pb-3">
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
                                    <a href="">
                                        <i aria-hidden="true" class="fas fa-laptop"></i>
                                        <p>VMwere vSphere</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">

                                <div class="boxtop_box">
                                    <a href="">
                                        <i aria-hidden="true" class="fab fa-amazon"></i>
                                        <p>AWS Cloud</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">

                                <div class="boxtop_box">
                                    <a href="">
                                        <i aria-hidden="true" class="fab fa-microsoft"></i>
                                        <p>Azure Cloud</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="boxtop_box">
                                    <a href="">
                                        <i aria-hidden="true" class="fab fa-windows"></i>
                                        <p>Windows Server(MCSE)</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="boxtop_box">
                                    <a href="">
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
    <section class="recent_post py-4 bggray1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="py-2">Recent Post</h3>
                    <div class="col-md-12 mb-4">
                        <div class="post_box pt-5 pb-5 ps-5 pe-5">
                            <div class="row">
                                <div class="col-md-4 img">
                                    <a href="blog-details.php"><img src="/assets/frontend/images/locks-neww-2.webp" alt="" /></a>
                                </div>
                                <div class="col-md-8 text_box_post">
                                    <h6>
                                        <a href="blog-details.php">Azure Locks Protects Azure Resources From Accidental
                                            Deletion</a>
                                    </h6>
                                    <p><strong>Last Update:</strong> September 28, 2022</p>
                                    <p>
                                        A resource lock on Azure cloud resources enables you to
                                        restrict changes to production environment when modifying or
                                        deleting a…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="post_box pt-5 pb-5 ps-5 pe-5">
                            <div class="row">
                                <div class="col-md-4 img">
                                    <a href="blog-details.php"><img src="/assets/frontend/images/locks-neww-2.webp" alt="" /></a>
                                </div>
                                <div class="col-md-8 text_box_post">
                                    <h6>
                                        <a href="blog-details.php">Azure Locks Protects Azure Resources From Accidental
                                            Deletion</a>
                                    </h6>
                                    <p><strong>Last Update:</strong> September 28, 2022</p>
                                    <p>
                                        A resource lock on Azure cloud resources enables you to
                                        restrict changes to production environment when modifying or
                                        deleting a…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="post_box pt-5 pb-5 ps-5 pe-5">
                            <div class="row">
                                <div class="col-md-4 img">
                                    <a href="blog-details.php"><img src="/assets/frontend/images/locks-neww-2.webp" alt="" /></a>
                                </div>
                                <div class="col-md-8 text_box_post">
                                    <h6>
                                        <a href="blog-details.php">Azure Locks Protects Azure Resources From Accidental
                                            Deletion</a>
                                    </h6>
                                    <p><strong>Last Update:</strong> September 28, 2022</p>
                                    <p>
                                        A resource lock on Azure cloud resources enables you to
                                        restrict changes to production environment when modifying or
                                        deleting a…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="post_box pt-5 pb-5 ps-5 pe-5">
                            <div class="row">
                                <div class="col-md-4 img">
                                    <a href="blog-details.php"><img src="/assets/frontend/images/locks-neww-2.webp" alt="" /></a>
                                </div>
                                <div class="col-md-8 text_box_post">
                                    <h6>
                                        <a href="blog-details.php">Azure Locks Protects Azure Resources From Accidental
                                            Deletion</a>
                                    </h6>
                                    <p><strong>Last Update:</strong> September 28, 2022</p>
                                    <p>
                                        A resource lock on Azure cloud resources enables you to
                                        restrict changes to production environment when modifying or
                                        deleting a…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="post_box pt-5 pb-5 ps-5 pe-5">
                            <div class="row">
                                <div class="col-md-4 img">
                                    <a href="blog-details.php"><img src="/assets/frontend/images/locks-neww-2.webp" alt="" /></a>
                                </div>
                                <div class="col-md-8 text_box_post">
                                    <h6>
                                        <a href="blog-details.php">Azure Locks Protects Azure Resources From Accidental
                                            Deletion</a>
                                    </h6>
                                    <p><strong>Last Update:</strong> September 28, 2022</p>
                                    <p>
                                        A resource lock on Azure cloud resources enables you to
                                        restrict changes to production environment when modifying or
                                        deleting a…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="post_box pt-5 pb-5 ps-5 pe-5">
                            <div class="row">
                                <div class="col-md-4 img">
                                    <a href="blog-details.php"><img src="/assets/frontend/images/locks-neww-2.webp" alt="" /></a>
                                </div>
                                <div class="col-md-8 text_box_post">
                                    <h6>
                                        <a href="blog-details.php">Azure Locks Protects Azure Resources From Accidental
                                            Deletion</a>
                                    </h6>
                                    <p><strong>Last Update:</strong> September 28, 2022</p>
                                    <p>
                                        A resource lock on Azure cloud resources enables you to
                                        restrict changes to production environment when modifying or
                                        deleting a…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="post_box main_blog_box">
                        <input type="text" name="search" class="form-control" placeholder="search" />
                    </div>


                    <div class="blog_courses_box post_box main_blog_box">
                        <h4>Courses We Offer</h4>
                        <div class="main_blog_courses">
                            <a href="https://attariclasses.in/vmware-training-certification-online/" class="no-lightbox">
                                <br>
                                <img decoding="async" src="/assets/frontend/images/vmware-vsphere-e1627535142798.jpg">
                                <div class="blog_content_box">
                                    <p>VMware</p>
                                </div>
                            </a>
                        </div>

                        <div class="main_blog_courses">
                            <a href="https://attariclasses.in/aws-certification-training-online/" class="no-lightbox">
                                <br>
                                <img decoding="async" src="/assets/frontend/images/aws.jpg">
                                <p></p>
                                <div class="blog_content_box">
                                    <p>AWS</p>
                                </div>
                            </a>
                        </div>

                        <div class="main_blog_courses">
                            <a href="https://attariclasses.in/microsoft-azure-certification-training-online/"
                                class="no-lightbox">
                                <br>
                                <img decoding="async" src="/assets/frontend/images/azure.jpg">
                                <p></p>
                                <div class="blog_content_box">
                                    <p>Microsoft Azure</p>
                                </div>
                            </a>
                        </div>


                        <div class="main_blog_courses">
                            <a href="https://attariclasses.in/mcsa-mcse-windows-server-training-online/"
                                class="no-lightbox">
                                <br>
                                <img decoding="async" src="/assets/frontend/images/microsft.jpg">
                                <p></p>
                                <div class="blog_content_box">
                                    <p>MCSE</p>
                                </div>
                            </a>
                        </div>


                        <div class="main_blog_courses">
                            <a href="https://attariclasses.in/ccna-training-certification-online/" class="no-lightbox">
                                <br>
                                <img decoding="async" src="/assets/frontend/images/ccna.jpg">
                                <p></p>
                                <div class="blog_content_box">
                                    <p>CCNA</p>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="blog_courses_box post_box main_blog_box recent_posts">
                        <h4>Recent Posts</h4>
                        <div class="main_blog_courses">
                            <div class="post_image_box widths40">
                                <a href="https://attariclasses.in/vmware-training-certification-online/"
                                    class="no-lightbox">
                                    <img decoding="async" src="/assets/frontend/images/locks-neww-2-150x150.webp">
                                </a>
                            </div>
                            <div class="blog_content_box widths60">
                                <a href="https://attariclasses.in/vmware-training-certification-online/"
                                    class="no-lightbox">
                                    <h5>Azure Locks Protects Azure Resources From Accidental Deletion</h5>
                                </a>
                                <div class="recent-posts-date">September 28, 2022<span class="sep">/</span></div>
                            </div>
                        </div>

                        <div class="main_blog_courses">
                            <div class="post_image_box widths40">
                                <a href="https://attariclasses.in/vmware-training-certification-online/"
                                    class="no-lightbox">
                                    <img decoding="async" src="/assets/frontend/images/locks-neww-2-150x150.webp">
                                </a>
                            </div>
                            <div class="blog_content_box widths60">
                                <a href="https://attariclasses.in/vmware-training-certification-online/"
                                    class="no-lightbox">
                                    <h5>Azure Locks Protects Azure Resources From Accidental Deletion</h5>
                                </a>
                                <div class="recent-posts-date">September 28, 2022<span class="sep">/</span></div>
                            </div>
                        </div>

                        <div class="main_blog_courses">
                            <div class="post_image_box widths40">
                                <a href="https://attariclasses.in/vmware-training-certification-online/"
                                    class="no-lightbox">
                                    <img decoding="async" src="/assets/frontend/images/locks-neww-2-150x150.webp">
                                </a>
                            </div>
                            <div class="blog_content_box widths60">
                                <a href="https://attariclasses.in/vmware-training-certification-online/"
                                    class="no-lightbox">
                                    <h5>Azure Locks Protects Azure Resources From Accidental Deletion</h5>
                                </a>
                                <div class="recent-posts-date">September 28, 2022<span class="sep">/</span></div>
                            </div>
                        </div>

                    </div>


                    <div class="blog_form">
                        <h5>Enquire Now</h5>
                        <form>

                            <div class="form-group">
                                <input type="text" name="coursename" class="form-control" placeholder="Enter Name"
                                    required="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="coursename" class="form-control" placeholder="Enter Email"
                                    required="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="coursename" class="form-control" placeholder="Your Country"
                                    required="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="coursename" class="form-control"
                                    placeholder="Mobile Number with Country code" required="">
                            </div>

                            <div class="form-group">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected="">-Select Course-</option>
                                    <option value="vmware">VMware</option>
                                    <option value="aws">AWS Cloud</option>
                                    <option value="azure">Azure Cloud</option>
                                    <option value="mcse">MCSE</option>
                                    <option value="ccna">CCNA</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
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


    <section class="other_courses pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="section_heading pb-3 text-left"> Trending Courses</h4>
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
