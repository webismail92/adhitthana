@extends('layouts.master') @section('title','Home') @section('body')

<!--Slider Section-->
<div id="slider">
    <div class="slider-item">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators-2">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/slider/1.jpg" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <span>Don't
                                        <br>be afraid to say no</span>
                                    <p>Dignissim hac tempor sed vitae mus ad montes duis libero aliquet nam torquent massa leo
                                        amet. Litora, netus semper morbi vulputate curabitur.</p>
                                    <a class="btn btn-primary margin-top-30" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/slider/2.jpg" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <span>Don't
                                        <br>be afraid to say no</span>
                                    <p>Dignissim hac tempor sed vitae mus ad montes duis libero aliquet nam torquent massa leo
                                        amet. Litora, netus semper morbi vulputate curabitur.</p>
                                    <a class="btn btn-primary  margin-top-30" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/slider/3.jpg" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <span>Don't
                                        <br>be afraid to say no</span>
                                    <p>Dignissim hac tempor sed vitae mus ad montes duis libero aliquet nam torquent massa leo
                                        amet. Litora, netus semper morbi vulputate curabitur.</p>
                                    <a class="btn btn-primary margin-top-30" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Welcome Patron -->
<section class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6">
                <div class="section-title-area-left wow fadeInRight" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="section-title">
                        <span class="title-tag">Welcome to</span>Adhitthana</h2>
                    <span class="sub-title">We at Adhitthana realize the exigency as well as enormity of our clients' needs and vigilantly work on
                        their specific business requirements.</span>
                </div>
                <div class="welcome-text wow fadeInRight" data-wow-delay="300ms" data-wow-duration="500ms">
                    <p>Since our inception, amidst ground-breaking innovation, reliable products and services, proficient team,
                        meticulous approach to business, and relation with our associates and customers, we at Adhitthana
                        are making our distinct way in this vast industry, exploring new horizons, standing firm and inimitable
                        in business </p>
                    <a class="btn btn-primary" href="/company-profile">Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <img src="/images/home/welcome.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Our Services -->
<section class="full-row bg-dark margin-top-100 no-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="service-left wow fadeInUp" data-wow-delay="300ms" data-wow-duration="500ms">
                    <div class="section-title-area-left">
                        <h2 class="section-title color-white">
                            <span class="title-tag">What we Offer</span>Our Products</h2>
                        <span class="sub-title color-white">We are a values-driven company with a zeal for excellence in every service and product we offer to
                            our esteemed customers</span>
                    </div>
                    <div class="service-text">
                        <p>Enim volutpat nam porta massa suscipit est vestibulum sollicitudin. Magna dis hymenaeos diam suspendisse
                            sed nullam. Eros feugiat curae; luctus natoque, enim nostra bibendum facilisi nec nostra. Augue
                            aptent, mauris nunc Primis lobortis sagittis laoreet curae; adipiscing senectus. Porttitor nam
                            habitasse. Taciti mollis curae.Pede pretium volutpat tristique magnis quisque nulla in cursus
                            ultrices elementum feugiat laoreet eu dui rutrum nostra cras etiam.</p>
                    </div>
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal">Request a quote</a>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 padding-90">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="100ms" data-wow-duration="500ms">
                            <span class="flaticon-protection-shield-with-a-check-mark"></span>
                            <div class="service-caption margin-left-15">
                                <a href="/">
                                    <h4 class="service-title">HEAD PROTECTION</h4>
                                </a>
                                <p>Helmet predominantly used in workplace environments such as industrial or construction site
                                </p>
                                <a class="btn-link" href="/">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="200ms" data-wow-duration="500ms">
                            <span class="flaticon-protection-shield-with-a-check-mark"></span>
                            <div class="service-caption margin-left-15">
                                <a href="/">
                                    <h4 class="service-title">SAFETY EYE WEAR</h4>
                                </a>
                                <p>Why risk losing precious eyesight when wearing safety glasses or protective goggles can keep
                                    your eyes
                                </p>
                                <a class="btn-link" href="/">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="300ms" data-wow-duration="500ms">
                            <span class="flaticon-protection-shield-with-a-check-mark"></span>
                            <div class="service-caption margin-left-15">
                                <a href="/">
                                    <h4 class="service-title">HEARING PROTECTION</h4>
                                </a>
                                <p>People should wear a hearing protector if the noise or sound level at the workplace exceeds
                                    85 decibels..
                                </p>
                                <a class="btn-link" href="/">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="400ms" data-wow-duration="500ms">
                            <span class="flaticon-protection-shield-with-a-check-mark"></span>
                            <div class="service-caption margin-left-15">
                                <a href="/">
                                    <h4 class="service-title">RESPIRATORS</h4>
                                </a>
                                <p>
                                    Protect the wearer from inhaling harmful dusts, fumes, vapors, or gases. Respirators range
                                </p>
                                <a class="btn-link" href="/">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Special Speech -->
<section class="full-row background-5 overlay-bullard text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="color-black">We Are Authorised Distributors Of Bullard Products</h2>
                    <div class="special-speech-sub-title color-white text-center" style="width: 300px;margin-left:auto;margin-right:auto">
                        <img src="/images/home/bullard.png" class="img-responsive" alt="Bullard">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Photo Gallery Section-->
<section class="full-row background-1 overlay-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title-area wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="section-title color-white">Our Personal Protective Equipments(PPE) Products</h2>
                    <!-- <span class="sub-title color-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper
                        ut arcu non placerat. Praesent nibh massa varius.</span> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="photo-gallery">
                    <div class="item">
                        <div class="gallery-item">
                            <img src="/images/product/1.jpg" alt="">
                            <div class="overlay traingle">
                                <a href="/images/product/1.jpg" class="img_view info">
                                    <span class="flaticon-add plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-item">
                            <img src="/images/product/2.jpg" alt="">
                            <div class="overlay traingle">
                                <a href="/images/product/2.jpg" class="img_view info">
                                    <span class="flaticon-add plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-item">
                            <img src="/images/product/3.jpg" alt="">
                            <div class="overlay traingle">
                                <a href="/images/product/3.jpg" class="img_view info">
                                    <span class="flaticon-add plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get Your Choice -->
<div class="full-row">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="get-process bg-gray-2 padding30">
                    <h3 class="inner-title">Why Adhitthana?</h3>
                    <p>We constantly strive to bring more value to our partners above and beyond the high quality products you
                        expect.</p>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="get-process bg-gray padding30">
                    <h3 class="inner-title">Technical Expertise</h3>
                    <p>what we possess. Our team of dedicated & talented professionals brings decades of experience to cater
                        our clients. Our technical experts are always at your service weather you are seeking product recommendation,
                        technical information etc.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="get-process bg-gray-2 padding30">
                    <h3 class="inner-title">Mission/vision</h3>
                    <p>We at Adhitthana have a mission to be the trusted and most preferred partner of our clientele by sincerely
                        working towards providing its patrons with an enduring competitive advantage in the increasingly
                        competitive world of business.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection