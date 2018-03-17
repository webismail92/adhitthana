<!DOCTYPE html>
<html lang="en" id="main-top">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="bodyguard, cyber security, guard, office security, privet security, security, security company, security guard, security service">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Adhitthana | @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/default-animation.css" rel="stylesheet">
    <link href="/fonts/flaticon/flaticon.css" rel="stylesheet">
    <link href="/css/range-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/color.css" id="color-change">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/loader.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon.ico">
</head>

<body class="page-wrapper home-page-2">

    <div class="preloader">
        <div id="ajaxloader3">
            <div class="outer"></div>
            <div class="inner"></div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade custom-modal modal2" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content po-relative">
                <div class="modal-body p-0 text-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 modal-bg-img" style="background-image: url('/images/resources/enquiry.jpg');">
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="modal-bg">
                                <img src="/images/logo/logo.png" alt="Adhitthana">
                                <h5 class="font-light text-muted m-t-20 text-center">Fill The Form And We Will Get Back To You!
                                </h5>
                                <form class="m-t-30" name="frcontact" autocomplete="off" id="frcontact">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input name="name" id="name" type="text" required="required" placeholder="Name *" oninvalid="this.setCustomValidity('Please enter name')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="col-lg-12">
                                            <input name="contact" id="contact" type="text" pattern="\d{10}" placeholder="Phone *" required="required" oninvalid="this.setCustomValidity('Please enter phone')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="col-lg-12">
                                            <input name="email" id="email" type="email" placeholder="Email *" required="required" oninvalid="this.setCustomValidity('Please enter email')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="_message" id="msg" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn-one style-one radi" id="sendEnquiryModal">
                                                SUBMIT
                                            </button>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="ajax_contact_msg" style="width:100%" class="text-left"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="close-btn" data-dismiss="modal" aria-hidden="true">×</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!--Header Section-->

    <header id="header-2" class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-4">
                        <div class="top-left">
                            <span>Call Us:
                                <a href="#">(+1) 828-376-0532</a>
                            </span>
                            <form class="language">
                                <span>Lnguage:</span>
                                <select>
                                    <option>EN</option>
                                    <option>BN</option>
                                    <option>UK</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-8">
                        <div class="top-right">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Help and Support
                                        <span class="fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="how-it-work.html">How It Work</a>
                                        </li>
                                        <li>
                                            <a href="general-support.html">General Support</a>
                                        </li>
                                        <li>
                                            <a href="help-center.html">Help Center</a>
                                        </li>
                                        <li>
                                            <a href="support-article-details.html">Support Article Details</a>
                                        </li>
                                        <li>
                                            <a href="terms-and-condition.html">Terms & Condition</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="flaticon-people">
                                    <a href="sign-up.html">Register</a> or
                                    <a href="sign-in.html">Sign in</a>
                                </li>
                                <li class="flaticon-bag-outline dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cart (03)</a>
                                    <ul class="cart-dropdown cart bg-white">
                                        <li>
                                            <img src="/images/shop/3.png" alt="">
                                            <a href="#"> Wireless IP Camera CCTV
                                                <span class="remove">
                                                    <i class="fa fa-times-rectangle"></i>
                                                </span>
                                                <br>
                                                <p>1 X $5.00</p>
                                            </a>
                                        </li>
                                        <li>
                                            <img src="/images/shop/4.png" alt="">
                                            <a href="#"> Door Sensors Alarm
                                                <span class="remove">
                                                    <i class="fa fa-times-rectangle"></i>
                                                </span>
                                                <br>
                                                <p>1 X $24.00</p>
                                            </a>
                                        </li>
                                        <li class="total_amount">
                                            Sub Total:
                                            <span class="margin-left-7">$29.00</span>
                                        </li>
                                        <li class="cart-dropdown-button">
                                            <a class="btn btn-primary" href="#">View Cart</a>
                                            <a class="btn btn-primary pull-right" href="#">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                    aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">
                                    <img class="nav-logo" src="/images/logo/logo.png" alt="">
                                </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="search-bar navbar-right">
                                    <li>
                                        <a href="#search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li id="search" class="search-form">
                                        <form class="header-search" action="#" method="post">
                                            <input type="search" name="search" placeholder="Type Here">
                                            <span class="src-close">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </span>
                                        </form>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Home</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="index-2.html">Home-1</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home-2</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home-3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="service.html">Services Style-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="service-2.html">Services Style-2</a>
                                                    </li>
                                                    <li>
                                                        <a href="service-3.html">Services Style-3</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="service-details.html">Service Details</a>
                                            </li>
                                            <li>
                                                <a href="service-values.html">Service Values</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="about-us.html">About Us</a>
                                            </li>
                                            <li>
                                                <a href="about-us-2.html">About Us 2</a>
                                            </li>
                                            <li>
                                                <a href="our-history.html">Our History</a>
                                            </li>
                                            <li>
                                                <a href="our-mission.html">Our Mission</a>
                                            </li>
                                            <li>
                                                <a href="our-vision.html">Our Vision</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pricing
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="pricing.html">Pricing</a>
                                                    </li>
                                                    <li>
                                                        <a href="pricing-extend.html">Pricing Extend</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Career
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="career.html">Career</a>
                                                    </li>
                                                    <li>
                                                        <a href="application.html">Application</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Team
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="team-member.html">Team Member</a>
                                                    </li>
                                                    <li>
                                                        <a href="profile-details.html">Member Profile</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Certificate
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="certification.html">Certification</a>
                                                    </li>
                                                    <li>
                                                        <a href="certification-detail.html">Certification Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Help and Support
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="how-it-work.html">How It Work</a>
                                                    </li>
                                                    <li>
                                                        <a href="general-support.html">General Support</a>
                                                    </li>
                                                    <li>
                                                        <a href="help-center.html">Help Center</a>
                                                    </li>
                                                    <li>
                                                        <a href="support-article-details.html">Support Article</a>
                                                    </li>
                                                    <li>
                                                        <a href="terms-and-condition.html">Terms & Condition</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="testimonial.html">Testimonial</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="gallery.html">Gallery default</a>
                                                    </li>
                                                    <li>
                                                        <a href="gallery-fullwidth.html">Gallery fullwidth</a>
                                                    </li>
                                                    <li>
                                                        <a href="gallery-masonry.html">Gallery masonry</a>
                                                    </li>
                                                    <li>
                                                        <a href="gallery-detail.html">Gallery Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="quote.html">Quote</a>
                                            </li>
                                            <li>
                                                <a href="faq.html">Faq</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404 Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="shop.html">Shop</a>
                                            </li>
                                            <li>
                                                <a href="shop-list.html">Shop-List</a>
                                            </li>
                                            <li>
                                                <a href="shop-single.html">Shop-Single</a>
                                            </li>
                                            <li>
                                                <a href="sign-in.html">Sign-In</a>
                                            </li>
                                            <li>
                                                <a href="sign-up.html">Sign-Up</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Cart</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">News</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="blog.html">News</a>
                                            </li>
                                            <li>
                                                <a href="blog-fullwidth-box.html">News Full Box Width</a>
                                            </li>
                                            <li>
                                                <a href="blog-fullwidth.html">News Full Width</a>
                                            </li>
                                            <li>
                                                <a href="blog-left-sidebar.html">News Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar.html">News Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="news-details.html">News Details Right</a>
                                            </li>
                                            <li>
                                                <a href="news-details-left-sidebar.html">News Details Left</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                            <!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @section('body') @show

    <!--Footer Section-->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="footer-widget">
                        <img class="nav-logo" src="/images/logo/logo.png" alt="">
                        <div class="widget-content">
                            <p>Bibendum nisi, quam varius tristique, dictum lobortis, pellentesque donec purus eu facilisis
                                suspendisse quie integer. Facilisis integer commodo ipsum congue noi adipiscing mi aliquet,
                                fringilla quisque. Rhoncus porttitor feugiat malesuada, luctus. Vel cum quisque id conubia
                                curae; hymenaeos aenean mauris.</p>
                            <ul class="address">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>4214 Arlington Avenue Des Arc, AR 72040,</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>(+1) 518-636-6052, (+1) 248-537-1825</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <span>Info@patron.com, support@patron.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widget-title">Latest Tweet</h3>
                        <div class="widget-content">
                            <ul>
                                <li>
                                    <i class="fa fa-twitter"></i>
                                    <div>
                                        <a href="#">Molestie sed leo morbi molestie massa nascetur, aenean habitant pharetra massa velit
                                            tempor.
                                        </a>
                                        12 minutes ago
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i>
                                    <div>
                                        <a href="#">nim ante nisi parturient ad. Sed vulputate. Element diam cum, pretium non accumsan
                                            volutpat.
                                        </a>
                                        17 hours ago
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i>
                                    <div>
                                        <a href="#">Tempor lectus sodales feugiat cubilia etiam semper rutrum venenatis aenean.</a>
                                        5 days ago
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <div class="widget-content">
                            <p>Leo ultrices habitant fringilla turpis eu sapien proin us fames nullam cum tempus eleifend varius
                                in. Amet curabitur vel fames scelerisque ac placerat.</p>
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <button class="btn btn-primary" type="submit" name="newsletter">Send</button>
                            </form>
                            <div class="footer-social-icon">
                                <h3 class="color-white">Find Us In</h3>
                                <ul class="social-icon">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-wifi"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer Bottom-->
    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <ul class="bottom-nav">
                        <li>
                            <a href="how-it-work.html">How It Work</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="certification.html">Trusty and Safty</a>
                        </li>
                        <li>
                            <a href="#">Payment</a>
                        </li>
                        <li>
                            <a href="sign-up.html">My Account</a>
                        </li>
                        <li>
                            <a href="help-center.html">Help & Support</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="copyright">
                        <span>&copy; 2017 All Rights Reserved by
                            <a href="#">Unicoder</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="btp" id="btp" onclick="$('html, body').stop().animate({scrollTop: $('#main-top').offset().top}, 650);" style="display: block;">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/YouTubePopUp.jquery.js"></script>
    <script src="/js/jquery.fancybox.pack.js"></script>
    <script src="/js/jquery.fancybox-media.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/mixitup.js"></script>
    <script src="/js/validate.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/custom.js"></script>
    @yield('extrajs')
    <script>
        // Scroll Bottom To Top
        $(document).ready(function () {
            $(document).scroll(function () {
                if ($(document).scrollTop() > 20) {
                    $("#btp").fadeIn();
                } else {
                    $("#btp").fadeOut(0);
                }
            });
        });

        jQuery(document).ready(function () {
            jQuery("#frcontact").submit(function (e) {
                e.preventDefault();
                $("#sendEnquiryModal").attr("disabled", "disabled");
                $("#sendEnquiryModal").html("Sending ...");
                var form = jQuery('#frcontact').serialize();
                var settings = {
                    "url": "/api/contact",
                    "method": "post",
                    "data": form
                };
                jQuery.ajax(settings).done(function (response, statusText, xhr) {
                    jQuery('#name').val('');
                    jQuery('#email').val('');
                    jQuery('#contact').val('');
                    jQuery('#msg').val('');
                    // jQuery('#frcontact').fadeOut('fast');
                    jQuery("#ajax_contact_msg").html(

                        '<div class="alert alert-success m-t-20"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button><h1 class="text-success text-center">' +
                        xhr.responseJSON[1] +
                        '</h1></div>'
                    );

                }).fail(function (xhr, statusText) {
                    var errors = xhr.responseJSON[1];
                    if (xhr.status == 403) {
                        jQuery("#ajax_contact_msg").html(
                            '<div class="alert alert-danger m-t-20"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>Only ajax requests are allowed !</div>'
                        );
                    } else if (xhr.status == 400) {
                        var strError = "";

                        strError += "<ul>";
                        errors.forEach(function (error) {
                            strError += "<li>" + error + "</li>";
                        });
                        strError += "</ul>";
                        jQuery("#ajax_contact_msg").html(
                            '<div class="alert alert-danger m-t-10"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>' +
                            strError + '</div>');
                    } else {
                        console.log(errors);
                        jQuery("#ajax_contact_msg").html(
                            '<div class="alert alert-danger m-t-10"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>Something went wrong !</div>'
                        );
                    }
                }).always(function () {
                    $("#sendEnquiryModal").removeAttr("disabled");
                    $("#sendEnquiryModal").html("SUBMIT");
                });
            });
        });

        $(".navigate ul li a[href='" + window.location.pathname + "']").parent('li').addClass("current");
    </script>
    </script>
</body>

</html>