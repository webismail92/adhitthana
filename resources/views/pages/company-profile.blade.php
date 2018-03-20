@extends('layouts.master') @section('title','Company Profile') @section('body')

<!--Banner Section-->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content">
                    <h1 class="page-titile">Company Profile</h1>
                    <ul class="banner-nav pull-right">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/company-profile">Company Profile</a>
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
                <div class="wow fadeInLeft text-justify" data-wow-delay="300ms" data-wow-duration="500ms">
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
            <div class="col-md-6 col-sm-12">
                <div class="wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="500ms">
                    <img src="/images/about-us/safety.jpg" class="img-thumbnail" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mt50">
                    <h3>Our Portfolio includes:</h3>
                    <ul class="agreement-list padding-15">
                        <li>
                            <i class="fa fa-circle-o"></i>
                            <span>Industrial Safety Equipments</span>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i>
                            <span>Outsourcing Services</span>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i>
                            <span>IT Services</span>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i>
                            <span>Logistics and Warehousing Services</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
