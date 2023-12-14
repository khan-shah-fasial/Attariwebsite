@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description',
    ' ')

@section('page.type', 'website')

@section('page.content')

    <!----------========== success story start ===============-------------------->

    <section class="success_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrums_section paddtb80">
                        <h1 class="sm-aboutus">Success Stories</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ url(route('contact')) }}">Home</a></li>
                                <li class="breadcrumb-item"><a>»</a></li>
                                <li class="breadcrumb-item"><a><b>Success Stories</b></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="images_container pt-lg-5 pb-lg-5 pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo</button>
                    </div>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_24.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_24.jpg" data-src="images/succes_story_whtsp_24.jpg" />
                    </a>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_25.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_25.jpg" data-src="images/succes_story_whtsp_25.jpg" />
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 images">
                    <a href="images/succes_story_whtsp_26.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_26.jpg" data-src="images/succes_story_whtsp_26.jpg" />
                    </a>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_27.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_27.jpg" data-src="images/succes_story_whtsp_27.jpg" />
                    </a>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_28.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_28.jpg" data-src="images/succes_story_whtsp_28.jpg" />
                    </a>
                </div>
            </div>

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


            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo</button>
                    </div>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_19.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_19.jpg" data-src="images/succes_story_whtsp_19.jpg" />
                    </a>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_20.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_20.jpg" data-src="images/succes_story_whtsp_20.jpg" />
                    </a>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_21.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_21.jpg" data-src="images/succes_story_whtsp_21.jpg" />
                    </a>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_22.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_22.jpg" data-src="images/succes_story_whtsp_22.jpg" />
                    </a>
                </div>
                <div class="col-md-2 images">
                    <a href="images/succes_story_whtsp_22 (1).jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_22 (1).jpg" data-src="images/succes_story_whtsp_22 (1).jpg" />
                    </a>
                </div>
            </div>

            <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
                <div class="container">
                    <form class="" method="action">
                        <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                required />
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


            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo</button>
                    </div>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_18.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_18.jpg" data-src="images/succes_story_whtsp_18.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_17.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_17.jpg" data-src="images/succes_story_whtsp_17.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_16.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_16.jpg" data-src="images/succes_story_whtsp_16.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_15.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_15.jpg" data-src="images/succes_story_whtsp_15.jpg" />
                    </a>
                </div>
            </div>

            <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
                <div class="container">
                    <form class="" method="action">
                        <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                required />
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

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo</button>
                    </div>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_1.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_1.jpg" data-src="images/succes_story_whtsp_1.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_2.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_2.jpg" data-src="images/succes_story_whtsp_2.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_3.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_3.jpg" data-src="images/succes_story_whtsp_3.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_4.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_4.jpg" data-src="images/succes_story_whtsp_4.jpg" />
                    </a>
                </div>
            </div>

            <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
                <div class="container">
                    <form class="" method="action">
                        <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                required />
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

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo</button>
                    </div>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_5.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_5.jpg" data-src="images/succes_story_whtsp_5.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_6.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_6.jpg" data-src="images/succes_story_whtsp_6.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_7.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_7.jpg" data-src="images/succes_story_whtsp_7.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_8.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_8.jpg" data-src="images/succes_story_whtsp_8.jpg" />
                    </a>
                </div>
            </div>

            <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
                <div class="container">
                    <form class="" method="action">
                        <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                required />
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

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo</button>
                    </div>
                </div>
                <div class="col-md-6 images_6">
                    <a href="images/succes_story_whtsp_9.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_9.jpg" data-src="images/succes_story_whtsp_9.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_10.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_10.jpg" data-src="images/succes_story_whtsp_10.jpg" />
                    </a>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_11.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_11.jpg" data-src="images/succes_story_whtsp_11.jpg" />
                    </a>
                </div>
            </div>

            <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
                <div class="container">
                    <form class="" method="action">
                        <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                required />
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

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="training_btn d-none d-lg-block">
                        <button type="button" class="btn bookfreedemo_button reviews_demo" data-bs-toggle="modal"
                            data-bs-target="#enquiry_modal"> Book a Demo</button>
                    </div>
                </div>
                <div class="col-md-3 images_4">
                    <a href="images/succes_story_whtsp_12.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_12.jpg" data-src="images/succes_story_whtsp_12.jpg" />
                    </a>
                </div>
                <div class="col-md-5 images_5">
                    <a href="images/succes_story_whtsp_13.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_13.jpg" data-src="images/succes_story_whtsp_13.jpg" />
                    </a>
                </div>
                <div class="col-md-4 images_3">
                    <a href="images/succes_story_whtsp_14.jpg" data-fancybox="gallery">
                        <img src="/assets/frontend/images/succes_story_whtsp_14.jpg" data-src="images/succes_story_whtsp_14.jpg" />
                    </a>
                </div>
            </div>

            <section class="enquiry_mobile_form d-block d-lg-none d-md-none">
                <div class="container">
                    <form class="" method="action">
                        <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                required />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                required />
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

        </div>
    </section>

    <!-------------=============== success story end =============== -------------------->

@endsection
