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
        <div class="modal-dialog modal-md">
            <div class="modal-content po-relative">
                <div class="modal-body p-0 text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-bg">
                                <img src="/images/logo/logo.png" class="img-responsive" style="width: 150px;margin:auto" alt="Adhitthana">
                                <h5 class="font-light text-muted m-t-20 text-center">Fill The Form And We Will Get Back To You!
                                </h5>
                                <form class="m-t-30" name="frcontact" autocomplete="off" id="frcontact">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <input name="name" id="name" type="text" required="required" placeholder="Name *" oninvalid="this.setCustomValidity('Please enter name')"
                                                oninput="setCustomValidity('')" class="form-control">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <input name="contact" id="contact" type="text" pattern="\d{10}" placeholder="Phone *" required="required" oninvalid="this.setCustomValidity('Please enter phone')"
                                                oninput="setCustomValidity('')" class="form-control">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <input name="email" id="email" type="email" placeholder="Email *" required="required" oninvalid="this.setCustomValidity('Please enter email')"
                                                oninput="setCustomValidity('')" class="form-control">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <textarea name="_message" id="msg" rows="3" placeholder="Message" class="form-control"></textarea>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-primary" id="sendEnquiryModal">
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
                        <!-- <div class="top-left">
                            <span>Call Us:
                                <a href="#">(+1) 828-376-0532</a>
                            </span>
                        </div> -->
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
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Enquiry Now</a>
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
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="/about">About Us</a>
                                    </li>
                                    <li class="dropdown" id="ddlServices">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="service.html">Services Style-1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown" id="ddlProducts">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="/">About Us</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/">E-Brochure</a>
                                    </li>
                                    <li>
                                        <a href="/career">Career with us</a>
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

        $(document).ready(function () {
            var hrf = $(location).attr('pathname');
            $('.navbar-right li a[href="' + hrf + '"]').parent("li").addClass("active");
            if (hrf.search("services") >= 0) {
                $("#ddlServices").addClass("active");
            } else if (hrf.search("products") >= 0) {
                $("#ddlProducts").addClass("active");
            }
        });
    </script>
    </script>
</body>

</html>