@extends('layouts.master') @section('title','Mission & Vission') @section('body')

<!--Banner Section-->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content">
                    <h1 class="page-titile">Mission & Vission</h1>
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
                            <a href="/mission-vission">Mission & Vission</a>
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
            <div class="col-md-8 col-sm-6">
                <div class="get-process bg-gray-2 padding30">
                    <h3 class="inner-title">Vision</h3>
                    <p>“To emerged as a leading company through innovative products, excellent service fruitful customer relations;
                        performance; and commitment”</p>
                </div>
                <div class="get-process bg-gray padding30">
                    <h3 class="inner-title">Mission</h3>
                    <ul class="agreement-list padding-15">
                        <li>
                            <i class="fa fa-circle-o"></i>
                            <span>To be the leading source of integrated technology, Outsourcing and Logistic Service</span>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i>
                            <span>Committed to offer sustainability and excellence at work</span>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i>
                            <span>With the help of our innovation and skilled talents, deliver efficient and quality service and
                                products to our clients</span>
                        </li>
                        <li>
                            <i class="fa fa-circle-o"></i>
                            <span>Aspire to attain lucrative growth through superior customer service, commitment and constant
                                up-gradation of technology.</span>
                        </li>
                    </ul>

                    <h5>- Integrity</h5>
                    <p>We do the right thing regardless of the consequences.</p>
                    <h5>- Pursuit of Excellence</h5>
                    <p>We continually strive to exceed the expectations of our people and our clients.</p>
                    <h5>- Accountability</h5>
                    <p>We take responsibility for individual and collective actions.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <img src="/images/about-us/vision.jpg" class="img-thumbnail" alt="">
            </div>
        </div>
    </div>
</section>

@endsection