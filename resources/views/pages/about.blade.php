@extends('layouts.master') @section('title','About Us') @section('body')

<!--Banner Section-->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content">
                    <h1 class="page-titile">About Us</h1>
                    <ul class="banner-nav pull-right">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="about-us.html">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Company Intro Section-->
<section class="full-row overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h3 class="inner-title">Company Profile</h3>
                    <p>Since our inception, amidst ground-breaking innovation, reliable products and services, proficient team,
                        meticulous approach to business, and relation with our associates and customers, we at Adhitthana
                        are making our distinct way in this vast industry, exploring new horizons, standing firm and inimitable
                        in business.</p>
                    <p>We are a values-driven company with a zeal for excellence in each every service and product we offer
                        to our esteemed customers. Every product and service we deal in is inspired by our idea of making
                        your life easy, safe and better.</p>
                    <p>We offer a wide range of products and services to a variety of business and industries to cater their
                        specific requirement, we at Adhitthana are committed to deliver best in class product and excellent
                        services to our valued customers. </p>

                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="wow fadeInRight" data-wow-delay="300ms" data-wow-duration="500ms">
                    <img src="/images/about-us/about.jpg" class="img-thumbnail" alt="">
                    <!-- Use youtube or Vimeo video link in href, first open the video and just copy the link from url and past here -->
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="service-item bg-white wow fadeInRight" data-wow-delay="100ms" data-wow-duration="500ms">
                    <span class="flaticon-house-with-shield"></span>
                    <div class="service-caption margin-left-15">
                        <a href="service-details.html">
                            <h4 class="service-title">Industrial Safety Equipments</h4>
                        </a>
                        <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer tent.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="service-item bg-white wow fadeInRight" data-wow-delay="200ms" data-wow-duration="500ms">
                    <span class="flaticon-locked-internet-security-padlock"></span>
                    <div class="service-caption margin-left-15">
                        <a href="service-details.html">
                            <h4 class="service-title">Outsourcing Services</h4>
                        </a>
                        <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer tent.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="service-item bg-white wow fadeInRight" data-wow-delay="200ms" data-wow-duration="500ms">
                    <span class="flaticon-locked-internet-security-padlock"></span>
                    <div class="service-caption margin-left-15">
                        <a href="service-details.html">
                            <h4 class="service-title">IT Services</h4>
                        </a>
                        <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer tent.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="service-item bg-white wow fadeInRight" data-wow-delay="200ms" data-wow-duration="500ms">
                    <span class="flaticon-locked-internet-security-padlock"></span>
                    <div class="service-caption margin-left-15">
                        <a href="service-details.html">
                            <h4 class="service-title">Logistics and Warehousing Services</h4>
                        </a>
                        <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer tent.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection