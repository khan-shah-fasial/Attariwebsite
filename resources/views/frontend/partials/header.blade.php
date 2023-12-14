
<!-------------- Top Header ----------------->

<!-------------- Top Header ----------------->
<!--------------Header start----------------->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="nav_row v_center">
                        <div class="header_item item_left">
                            <div class="logo">
                                <a href="index.php" aria-label="Logo Link">
                                    <img class="sm-logo-size" src="/assets/frontend/images/cropped-header-logo-1.webp" width="180"
                                        height="50" alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="header_item item_center">
                            <div class="menu_overlay"></div>
                            <nav class="menu">
                                <div class="mobile_menu_head">
                                    <div class="go_back"><i class="fa fa-angle-left"></i></div>
                                    <div class="current_menu_title"></div>
                                    <div class="mobile_menu_close">&times;</div>
                                </div>
                                <ul class="manu_main">
                                    <li class="menu_item_has_children">
                                        <a href="#">Courses
                                            <i class="nav-arrow fa fa-angle-down" aria-hidden="true" role="img"></i>
                                        </a>
                                        <div class="sub_menu single_column_menu">
                                            <ul>
                                                <li>
                                                    <a href="{{ url(route('courses')) }}">
                                                        <span class="icon_text">
                                                            <i class="fa fa-laptop"></i> VMware
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url(route('courses')) }}"><span class="icon_text"><i class="fa fa-amazon"
                                                                aria-hidden="true"></i>
                                                            AWS Cloud</span></a>
                                                </li>
                                                <li>
                                                    <a href="{{ url(route('courses')) }}"><span class="icon_text">
                                                            <i class="fab fa-microsoft"></i> Azure Cloud
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="{{ url(route('courses')) }}"><span class="icon_text">
                                                            <i class="fa fa-windows"></i> MCSE
                                                        </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{ url(route('training-option')) }}">Training Options</a></li>
                                    <li><a href="{{ url(route('batch')) }}">Batch Schedule</a></li>
                                    <li><a href="{{ url(route('about')) }}">About Us</a></li>
                                    <li><a href="{{ url(route('reviews')) }}">Reviews</a></li>
                                    <li><a href="{{ url(route('success-stories')) }}">Success Stories</a></li>
                                    <li><a href="{{ url(route('blog')) }}">Blog</a></li>
                                    <li><a href="{{ url(route('contact')) }}">Contact Us</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="header_item item_right">
                            <div class="mobile_menu_trigger">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>





    <!--------------header end-------------------->
