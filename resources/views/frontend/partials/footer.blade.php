@php
    //$practice_Area = DB::table('practice_areas')->where('parent_id', null)->limit(4)->orderBy('id', 'asc')->get();
@endphp
<!--------------------footer start----------------------------->


<section class="footer pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 footer_heading text-center">
                <h4>
                    Subscribe to newsletter & <br />
                    Latest Update
                </h4>
            </div>
            <div class="col-12 mt-5 d-flex justify-content-center">
                <div class="footer_search">
                    <input type="text" name="" placeholder="Enter you Email" />
                    <button>SUBSCRIBE</button>
                </div>
            </div>
        </div>
        <div class="row footer_links_container">
            <div class="col-md-4">
                <div class="logo">
                    <a href="index.php" aria-label="Logo Link">
                        <img src="/assets/frontend/images/cropped-header-logo-1.webp" width="180" height="50" alt="Footer Logo" />
                    </a>
                </div>
                <p class="footer_para">Attari Classes is an IT training institute for VMware, AWS, AZURE,
                    MCSE & CCNA courses. We provide Instructor led Live Online
                    training to candidates across the globe & Classroom Training in
                    Mumbai, we also have self paced training options (Video Learning) <a class="footer_read"
                        href="about.php">More About</a>.</p>


                <div class="social_icon">
                    <a href="https://www.facebook.com/AttariClass" aria-label="Facebook Link"><i
                            class="fab fa-facebook-square"></i></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FAttariClasses"
                        aria-label="Twitter Link"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/attari.classes/" aria-label="Instagram Link"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/attari-classes-vmware-aws-azure-mcsa-ccna-training-in-mumbai/"
                        aria-label="Linkedin Link"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <h6 class="footer_links_heading">Courses</h6>
                <ul class="footer_links">
                    <li><a href="https://attariclasses.in/vmware-training-certification-online/">VMware</a></li>
                    <li><a href="https://attariclasses.in/aws-certification-training-online/">AWS Cloud</a></li>
                    <li><a href="https://attariclasses.in/microsoft-azure-certification-training-online/">Azure
                            Cloud</a></li>
                    <li><a href="https://attariclasses.in/mcsa-mcse-windows-server-training-online/">MCSE</a></li>
                    <li><a href="https://attariclasses.in/ccna-training-certification-online/">CCNA</a></li>
                    <li><a href="https://lms.attariclasses.in/">Self Paced Learning </a></li>
                    <li><a href="https://lms.attariclasses.in/">Portal (LMS)</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-6">
                <h6 class="footer_links_heading">Quick Links</h6>
                <ul class="footer_links">
                    <li><a href="{{ url(route('training-option')) }}">Training</a></li>
                    <li><a href="{{ url(route('batch')) }}">Batch Schedule</a></li>
                    <li><a href="{{ url(route('about')) }}">About Us</a></li>
                    <li><a href="{{ url(route('reviews')) }}">Reviews</a></li>
                    <li><a href="{{ url(route('success-stories')) }}">Success Stories</a></li>
                    <li><a href="{{ url(route('blog')) }}">Blog</a></li>
                    <li><a href="{{ url(route('photo-gallery')) }}">Photo Gallery</a></li>
                    <li><a href="{{ url(route('contact')) }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="footer_info">
                    <div class="footer_info_icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="footer_info_text">
                        <h6>Address:</h6>
                        <p>
                            Attari Classes, Kanakia Zillion, F wing, 4th Floor, 438, LBS
                            Marg-CST Road Junction Kurla (West), Mumbai-400070 (Entry from
                            Gate No 2 on CST Road)
                        </p>
                    </div>
                </div>
                <div class="footer_info">
                    <div class="footer_info_icon">
                        <i class="fa-solid fa-mobile"></i>
                    </div>
                    <div class="footer_info_text">
                        <h6>Mobile:</h6>
                        <p>+91 7738375431</p>
                    </div>
                </div>
                <div class="footer_info">
                    <div class="footer_info_icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="footer_info_text">
                        <h6>Email:</h6>
                        <p>info@attariclasses.in</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="copyright">© 2023 Attari Class. All Rights Reserved</p>
            </div>
            <div class="col-md-6 d-flex justify-content-between footer_privacy">
                <ul>
                    <li><a href="{{ url(route('refund-policy')) }}" class="text-secondary">Refunds & Cancellations</a></li>
                    <li><a href="{{ url(route('terms')) }}" class="text-secondary">Terms of Service</a></li>
                    <li><a href="{{ url(route('privacy-policy')) }}" class="text-secondary">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ---------------fix footer---------------- -->

<section class="fix_footer d-none d-lg-block d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-9 text-center py-2">
                <h4>
                    For Career Assistance : <img src="/assets/frontend/images/inr.png" width="15" height="10" alt="INR" />
                    +91
                    7738375431
                </h4>
            </div>
            <div class="col-3 query">
                <div class="query_heading d-flex justify-content-between align-items-center">
                    <h5>Drop a Query</h5>
                    <i class="fas fa-chevron-up"></i>
                </div>

                <div class="query_form">
                    <form>
                        <input type="text" placeholder="Enter Name" />
                        <input type="text" placeholder="Enter E-mail" />
                        <input type="text" placeholder="Your Country" />
                        <input type="text" placeholder="Mobile No with Country Code" />
                        <select>
                            <option selected>-Select Course-</option>
                            <option value="1">VMware</option>
                            <option value="2">AWS Cloud</option>
                            <option value="3">Azure Cloud</option>
                            <option value="4">MCSE</option>
                            <option value="5">CCNA</option>
                        </select>
                        <textarea rows="3"></textarea>
                        <button>Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!------------------ footer End -------------------------->


<!--start cookies code-->
{{-- --<div class="cookies_section">
    <div class="title-box">
        <i class="bx bx-cookie"></i>
        <h3> <img src="/assets/frontend/images/cookie_image.png" alt="" /> Cookies Consent</h3>
    </div>
    <div class="info">
        <p>
            We use cookies to help you navigate efficiently and perform certain functions. You will find detailed
            information about all cookies under each consent category below.
            <a href="{{url(route('cookie-policy'))}}"> Read more...</a>
        </p>
    </div>
    <div class="buttons">
        <button class="cookies_button" id="cookieAccept">Accept</button>
        <button class="cookies_button">Decline</button>
    </div>
</div> - --}}
<!--end cookies code-->
