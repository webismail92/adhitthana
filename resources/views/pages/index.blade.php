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
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/slider/2.png" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <span>Don't
                                        <br>be afraid to say no</span>
                                    <p>Dignissim hac tempor sed vitae mus ad montes duis libero aliquet nam torquent massa
                                        leo amet. Litora, netus semper morbi vulputate curabitur.</p>
                                    <a class="btn btn-primary margin-top-30" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/slider/3.png" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <span>Don't
                                        <br>be afraid to say no</span>
                                    <p>Dignissim hac tempor sed vitae mus ad montes duis libero aliquet nam torquent massa
                                        leo amet. Litora, netus semper morbi vulputate curabitur.</p>
                                    <a class="btn btn-primary  margin-top-30" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/slider/1.png" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <span>Don't
                                        <br>be afraid to say no</span>
                                    <p>Dignissim hac tempor sed vitae mus ad montes duis libero aliquet nam torquent massa
                                        leo amet. Litora, netus semper morbi vulputate curabitur.</p>
                                    <a class="btn btn-primary margin-top-30" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/slider/3.png" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <span>Don't
                                        <br>be afraid to say no</span>
                                    <p>Dignissim hac tempor sed vitae mus ad montes duis libero aliquet nam torquent massa
                                        leo amet. Litora, netus semper morbi vulputate curabitur.</p>
                                    <a class="btn btn-primary  margin-top-30" href="#">Learn More</a>
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
                        <span class="title-tag">Welcome to</span>Patron Security</h2>
                    <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper
                        ut arcu non placerat. Praesent nibh massa varius.</span>
                </div>
                <div class="welcome-text wow fadeInRight" data-wow-delay="300ms" data-wow-duration="500ms">
                    <p>Eu sodales dolor vehicula euismod penatibus sociis metus eget sociosqu nonummy enim. Etiam neque
                        augue sociis. Curabitur cum platea vulputate dui maecenas pretium. Pellentesque praesent nibh.
                        Bibendum dis ante faucibus amet sociosqu vitae, vivamus diam nullam Vivamus est. Platea hendrerit
                        dignissim tortor eget viverra dictumst. Imperdiet penatibus erat nam arcu libero.</p>
                    <a class="btn btn-primary" href="about-us.html">Read More</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="request-quote-2 bg-gray">
                    <div class="quote-title color-white">
                        <h4 class="color-white">Request a Quote</h4>
                        <p>Diam dignissim rutrum leo interdum etiam.</p>
                    </div>
                    <form class="quote-form" method="post" action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="textarea" placeholder="Quote Detail"></textarea>
                        </div>
                        <div class="fomr-group">
                            <button class="btn btn-primary margin-top-20" type="submit" name="submit">Submit Request</button>
                        </div>
                    </form>
                </div>
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
                            <span class="title-tag">What we Offer</span>Our Services</h2>
                        <span class="sub-title color-white">Lorem ipsum dolor sit amet, consecte adipiscing elit. Phasellus sit amet iaculis elit. Nam semper
                            ut arcu non placerat.</span>
                    </div>
                    <div class="service-text">
                        <p>Enim volutpat nam porta massa suscipit est vestibulum sollicitudin. Magna dis hymenaeos diam
                            suspendisse sed nullam. Eros feugiat curae; luctus natoque, enim nostra bibendum facilisi
                            nec nostra. Augue aptent, mauris nunc Primis lobortis sagittis laoreet curae; adipiscing
                            senectus. Porttitor nam habitasse. Taciti mollis curae.</p>
                        <p>Pede pretium volutpat tristique magnis quisque nulla in cursus ultrices elementum feugiat laoreet
                            eu dui rutrum nostra cras etiam.</p>
                    </div>
                    <a class="btn btn-primary" href="quote.html">Request a quote</a>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 padding-90">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="100ms" data-wow-duration="500ms">
                            <span class="flaticon-house-with-shield"></span>
                            <div class="service-caption margin-left-15">
                                <a href="service-details.html">
                                    <h4 class="service-title">Home Secutity</h4>
                                </a>
                                <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer
                                    tent.
                                </p>
                                <a class="btn-link" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="200ms" data-wow-duration="500ms">
                            <span class="flaticon-locked-internet-security-padlock"></span>
                            <div class="service-caption margin-left-15">
                                <a href="service-details.html">
                                    <h4 class="service-title">Cloud Security</h4>
                                </a>
                                <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer
                                    tent.
                                </p>
                                <a class="btn-link" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="300ms" data-wow-duration="500ms">
                            <span class="flaticon-video"></span>
                            <div class="service-caption margin-left-15">
                                <a href="service-details.html">
                                    <h4 class="service-title">Office security</h4>
                                </a>
                                <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer
                                    tent.
                                </p>
                                <a class="btn-link" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="400ms" data-wow-duration="500ms">
                            <span class="flaticon-technology"></span>
                            <div class="service-caption margin-left-15">
                                <a href="service-details.html">
                                    <h4 class="service-title">Computer security</h4>
                                </a>
                                <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer
                                    tent.
                                </p>
                                <a class="btn-link" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="500ms" data-wow-duration="500ms">
                            <span class="flaticon-policeman"></span>
                            <div class="service-caption margin-left-15">
                                <a href="service-details.html">
                                    <h4 class="service-title">Bodyguard</h4>
                                </a>
                                <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer
                                    tent.
                                </p>
                                <a class="btn-link" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="service-item bg-white wow fadeInRight" data-wow-delay="600ms" data-wow-duration="500ms">
                            <span class="flaticon-fingerprint"></span>
                            <div class="service-caption margin-left-15">
                                <a href="service-details.html">
                                    <h4 class="service-title">Biomatric</h4>
                                </a>
                                <p>Habitant dictum metus rhoncus vitae ac ad litora etiam. Ante elementum vivamus integer
                                    tent.
                                </p>
                                <a class="btn-link" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="full-row overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title-area wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="section-title">
                        <span class="title-tag">Let's Know</span>Why Choose Us</h2>
                    <span class="sub-title">Suspendisse ipsum justo ante risus fusce nisl, cum sodales blandit. Taciti cras egestas semper tristique
                        ultrices magnis ut est pellentesque.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="flex-box text-right padding-bottom-30">
                    <div class="why-us-text margin-right-15 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="500ms">
                        <a class="margin-bottom-15" href="#">
                            <h5 class="no-margin">Register and Ligality</h5>
                        </a>
                        <p>Sem condimentum sagittis elit. Nullam placerat maecenas, morbi mi condimentum conubia morbi vivamus
                            imperdiet sapien.</p>
                    </div>
                    <span class="color-default fa fa-circle-o"></span>
                </div>
                <div class="flex-box text-right padding-bottom-30">
                    <div class="why-us-text margin-right-15 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="500ms">
                        <a class="margin-bottom-15" href="#">
                            <h5 class="no-margin">Experience and Qualification</h5>
                        </a>
                        <p>Sem condimentum sagittis elit. Nullam placerat maecenas, morbi mi condimentum conubia morbi vivamus
                            imperdiet sapien.</p>
                    </div>
                    <span class="color-default fa fa-circle-o"></span>
                </div>
                <div class="flex-box text-right padding-bottom-30">
                    <div class="why-us-text margin-right-15 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="500ms">
                        <a class="margin-bottom-15" href="#">
                            <h5 class="no-margin">Techonogical Security Supply</h5>
                        </a>
                        <p>Sem condimentum sagittis elit. Nullam placerat maecenas, morbi mi condimentum conubia morbi vivamus
                            imperdiet sapien.</p>
                    </div>
                    <span class="color-default fa fa-circle-o"></span>
                </div>
                <div class="flex-box text-right padding-bottom-30">
                    <div class="why-us-text margin-right-15 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="500ms">
                        <a class="margin-bottom-15" href="#">
                            <h5 class="no-margin">Documents and System Security</h5>
                        </a>
                        <p>Sem condimentum sagittis elit. Nullam placerat maecenas, morbi mi condimentum conubia morbi vivamus
                            imperdiet sapien.</p>
                    </div>
                    <span class="color-default fa fa-circle-o"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-choose-img bg-gray">
                    <img src="/images/why-choose-us/1.png" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="flex-box text-left padding-bottom-30">
                    <span class="color-default fa fa-circle-o"></span>
                    <div class="why-us-text margin-left-15 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="500ms">
                        <a class="margin-bottom-15" href="#">
                            <h5 class="no-margin">Personal Secure Locaker</h5>
                        </a>
                        <p>Sem condimentum sagittis elit. Nullam placerat maecenas, morbi mi condimentum conubia morbi vivamus
                            imperdiet sapien.</p>
                    </div>
                </div>
                <div class="flex-box text-left padding-bottom-30">
                    <span class="color-default fa fa-circle-o"></span>
                    <div class="why-us-text margin-left-15 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="500ms">
                        <a class="margin-bottom-15" href="#">
                            <h5 class="no-margin">Emeargency Support</h5>
                        </a>
                        <p>Sem condimentum sagittis elit. Nullam placerat maecenas, morbi mi condimentum conubia morbi vivamus
                            imperdiet sapien.</p>
                    </div>
                </div>
                <div class="flex-box text-left padding-bottom-30">
                    <span class="color-default fa fa-circle-o"></span>
                    <div class="why-us-text margin-left-15 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="500ms">
                        <a class="margin-bottom-15" href="#">
                            <h5 class="no-margin">Honest and Experience Agent</h5>
                        </a>
                        <p>Sem condimentum sagittis elit. Nullam placerat maecenas, morbi mi condimentum conubia morbi vivamus
                            imperdiet sapien.</p>
                    </div>
                </div>
                <div class="flex-box text-left padding-bottom-30">
                    <span class="color-default fa fa-circle-o"></span>
                    <div class="why-us-text margin-left-15 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="500ms">
                        <a class="margin-bottom-15" href="#">
                            <h5 class="no-margin">24/7 Days Customer Support</h5>
                        </a>
                        <p>Sem condimentum sagittis elit. Nullam placerat maecenas, morbi mi condimentum conubia morbi vivamus
                            imperdiet sapien.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achivement -->
<div class="full-row background-3 overlay-1 padding-70-0">
    <div class="container">
        <div class="row">
            <div class="fact-counter color-white achivement-2">
                <div class="col-md-3 col-sm-3">
                    <div class="achivement text-center count wow fadeIn" data-wow-delay="500ms" data-wow-duration="300ms">
                        <strong class="count-num color-default" data-speed="3000" data-stop="2300">2300</strong>
                        <span class="sunject">Happy Clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="achivement text-center count wow fadeIn" data-wow-delay="500ms" data-wow-duration="300ms">
                        <strong class="count-num color-default" data-speed="3000" data-stop="1500">1500</strong>
                        <span>Qualified Employee</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="achivement text-center count wow fadeIn" data-wow-delay="500ms" data-wow-duration="300ms">
                        <strong class="count-num color-default" data-speed="3000" data-stop="3100">3100</strong>
                        <span>Deal Assigned</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="achivement text-center count wow fadeIn" data-wow-delay="500ms" data-wow-duration="300ms">
                        <strong class="count-num color-default" data-speed="3000" data-stop="20">20</strong>
                        <span>Years of Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Team -->
<section class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title-area wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="section-title">
                        <span class="title-tag">Our Experience</span>Team Leaders</h2>
                    <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper
                        ut arcu non placerat. Praesent nibh massa varius.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="our-team">
                <div class="item">
                    <div class="team-member full-row margin-bottom-30">
                        <img src="/images/our-team/1.png" alt="">
                        <div class="team-title padding-15 text-center">
                            <h6>Dylan Nevile</h6>
                            <span class="designation">- Security Expert -</span>
                        </div>
                        <div class="team-overlay">
                            <div class="team-title padding-15 text-center">
                                <a href="profile-details.html">
                                    <h6>Dylan Nevile</h6>
                                </a>
                                <span class="designation">- Security Expert -</span>
                            </div>
                            <p>Sit ad quisque. Elementum litora quam, est. Facilisis, porttitor mattis amet posuere ipsum.
                                Vestibulum sagittis auctor risus neque sem amet mollis. Nibh curae; fusce vel tincidunt
                                orci consectetuer.</p>
                            <div class="social-icon margin-top-30">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-member full-row margin-bottom-30">
                        <img src="/images/our-team/2.png" alt="">
                        <div class="team-title padding-15 text-center">
                            <h6>Brianna Stapleton</h6>
                            <span class="designation">- Security Expert -</span>
                        </div>
                        <div class="team-overlay">
                            <div class="team-title padding-15 text-center">
                                <a href="profile-details.html">
                                    <h6>Brianna Stapleton</h6>
                                </a>
                                <span class="designation">- Security Expert -</span>
                            </div>
                            <p>Sit ad quisque. Elementum litora quam, est. Facilisis, porttitor mattis amet posuere ipsum.
                                Vestibulum sagittis auctor risus neque sem amet mollis. Nibh curae; fusce vel tincidunt
                                orci consectetuer.</p>
                            <div class="social-icon margin-top-30">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-member full-row margin-bottom-30">
                        <img src="/images/our-team/3.png" alt="">
                        <div class="team-title padding-15 text-center">
                            <h6>Flynn Crossley</h6>
                            <span class="designation">- Security Expert -</span>
                        </div>
                        <div class="team-overlay">
                            <div class="team-title padding-15 text-center">
                                <a href="profile-details.html">
                                    <h6>Flynn Crossley</h6>
                                </a>
                                <span class="designation">- Security Expert -</span>
                            </div>
                            <p>Sit ad quisque. Elementum litora quam, est. Facilisis, porttitor mattis amet posuere ipsum.
                                Vestibulum sagittis auctor risus neque sem amet mollis. Nibh curae; fusce vel tincidunt
                                orci consectetuer.</p>
                            <div class="social-icon margin-top-30">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-member full-row margin-bottom-30">
                        <img src="/images/our-team/4.png" alt="">
                        <div class="team-title padding-15 text-center">
                            <h6>Sebastian Flakelar</h6>
                            <span class="designation">- Security Expert -</span>
                        </div>
                        <div class="team-overlay">
                            <div class="team-title padding-15 text-center">
                                <a href="profile-details.html">
                                    <h6>Sebastian Flakelar</h6>
                                </a>
                                <span class="designation">- Security Expert -</span>
                            </div>
                            <p>Sit ad quisque. Elementum litora quam, est. Facilisis, porttitor mattis amet posuere ipsum.
                                Vestibulum sagittis auctor risus neque sem amet mollis. Nibh curae; fusce vel tincidunt
                                orci consectetuer.</p>
                            <div class="social-icon margin-top-30">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->
<section class="full-row background-4 overlay-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title-area wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="section-title color-white">
                        <span class="title-tag">What Client Says</span>Our Testimonial</h2>
                    <span class="sub-title color-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper
                        ut arcu non placerat. Praesent nibh massa varius.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testimonials-carousels">
                    <div class="item full-row text-center padding20 margin-30 bg-white">
                        <div class="feedback">
                            <img class="avata" src="/images/testimonial/1.png" alt="">
                            <div class="testimonial-person-detail margin-30">
                                <h4 class="thumb-title">Astian Flakelar</h4>
                                <span class="rank">CEO Gsm Group</span>
                            </div>
                            <p>Tempus varius. Velit sapien consequat egestas. Integer cursus habitasse dictum. Tristique
                                vivamus hymenaeos. Mollis blandit lectus lectus enim sociis consequat. Rhoncus ipsum
                                lectus Nec arcu. Feugiat, arcu quam Ad. Odio scelerisque aptent a conubia. Vestibulum
                                arcu praesent pharetra litora hendrerit Porta euismod varius penatibus nascetur. Turpis
                                dapibus placerat Tellus consequat.</p>
                            <span class="thank color-default padding-15">Thank You</span>
                        </div>
                    </div>
                    <div class="item full-row text-center padding20 margin-30 bg-white">
                        <div class="feedback">
                            <img class="avata" src="/images/testimonial/2.png" alt="">
                            <div class="testimonial-person-detail margin-30">
                                <h4 class="thumb-title">Hayden Dallachy</h4>
                                <span class="rank">Human resources</span>
                            </div>
                            <p>Tempus varius. Velit sapien consequat egestas. Integer cursus habitasse dictum. Tristique
                                vivamus hymenaeos. Mollis blandit lectus lectus enim sociis consequat. Rhoncus ipsum
                                lectus Nec arcu. Feugiat, arcu quam Ad. Odio scelerisque aptent a conubia. Vestibulum
                                arcu praesent pharetra litora hendrerit Porta euismod varius penatibus nascetur. Turpis
                                dapibus placerat Tellus consequat.</p>
                            <span class="thank color-default padding-15">Thank You</span>
                        </div>
                    </div>
                    <div class="item full-row text-center padding20 margin-30 bg-white">
                        <div class="feedback">
                            <img class="avata" src="/images/testimonial/3.png" alt="">
                            <div class="testimonial-person-detail margin-30">
                                <h4 class="thumb-title">Claudia Harker</h4>
                                <span class="rank">Corporate secretary</span>
                            </div>
                            <p>Tempus varius. Velit sapien consequat egestas. Integer cursus habitasse dictum. Tristique
                                vivamus hymenaeos. Mollis blandit lectus lectus enim sociis consequat. Rhoncus ipsum
                                lectus Nec arcu. Feugiat, arcu quam Ad. Odio scelerisque aptent a conubia. Vestibulum
                                arcu praesent pharetra litora hendrerit Porta euismod varius penatibus nascetur. Turpis
                                dapibus placerat Tellus consequat.</p>
                            <span class="thank color-default padding-15">Thank You</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing -->
<section class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title-area wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="section-title">
                        <span class="title-tag">Data Storage</span>Pricing Plan</h2>
                    <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper
                        ut arcu non placerat. Praesent nibh massa varius.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="pricing-item padding-bottom-30 margin-bottom-30 text-center bg-gray-2 wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h3 class="thumb-title padding-30 no-margin">Basic</h3>
                    <div class="month-rate padding-15 bg-dark color-white">$
                        <span>29
                            <sup>.99</sup>/</span>Month</div>
                    <ul class="price-list margin-top-30">
                        <li>5GB Data Storage</li>
                        <li>1 User Only</li>
                        <li>Free Installation</li>
                        <li>24/7 Online Support</li>
                        <li>Automatic Backup</li>
                        <li>100GB Data Transfer</li>
                        <li>1 Database</li>
                    </ul>
                    <a class="btn btn-secondary" href="pricing-extend.html">Buy Now</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricing-item padding-bottom-30 margin-bottom-30 text-center bg-gray-2 wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h3 class="thumb-title padding-30 no-margin">Standard</h3>
                    <div class="month-rate padding-15 bg-dark color-white">$
                        <span>59
                            <sup>.99</sup>/</span>Month</div>
                    <ul class="price-list margin-top-30">
                        <li>50GB Data Storage</li>
                        <li>1 User Only</li>
                        <li>Free Installation</li>
                        <li>24/7 Online Support</li>
                        <li>Automatic Backup</li>
                        <li>500GB Data Transfer</li>
                        <li>10 Database</li>
                    </ul>
                    <a class="btn btn-secondary" href="pricing-extend.html">Buy Now</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricing-item padding-bottom-30 margin-bottom-30 text-center bg-gray-2 wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h3 class="thumb-title padding-30 no-margin">Advance</h3>
                    <div class="month-rate padding-15 bg-dark color-white">$
                        <span>99
                            <sup>.99</sup>/</span>Month</div>
                    <ul class="price-list margin-top-30">
                        <li>Unlimited Data Storage</li>
                        <li>10 User Only</li>
                        <li>Free Installation</li>
                        <li>24/7 Online Support</li>
                        <li>Automatic Backup</li>
                        <li>1TB Data Transfer</li>
                        <li>Unilimted Database</li>
                    </ul>
                    <a class="btn btn-secondary" href="pricing-extend.html">Buy Now</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pricing-item padding-bottom-30 margin-bottom-30 text-center bg-gray-2 wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h3 class="thumb-title padding-30 no-margin">Premium</h3>
                    <div class="month-rate padding-15 bg-dark color-white">$
                        <span>129
                            <sup>.99</sup>/</span>Month</div>
                    <ul class="price-list margin-top-30">
                        <li>Unlimited Data Storage</li>
                        <li>Unlimited User</li>
                        <li>Free Installation</li>
                        <li>24/7 Online Support</li>
                        <li>Automatic Backup</li>
                        <li>Unlimited Data Transfer</li>
                        <li>Unilimted Database</li>
                    </ul>
                    <a class="btn btn-secondary" href="pricing-extend.html">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Special Speech -->
<section class="full-row background-5 overlay-2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="color-white">"We Provide Most Effective and Trusted Security Service"</h2>
                    <div class="special-speech-sub-title color-white">You can call us on (+1) 870-256-2346 to discuss your security requirement</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog -->
<section class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title-area wow fadeIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <h2 class="section-title">
                        <span class="title-tag">For More Information</span>Our Latest Blog</h2>
                    <span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper
                        ut arcu non placerat. Praesent nibh massa varius.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="blog-item image-rotate wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <div class="full-row overflow-hidden">
                        <img src="/images/blog/2-1.png" alt="">
                        <a href="news-details.html">
                            <div class="overlay"></div>
                        </a>
                    </div>
                    <div class="blog-text">
                        <a href="news-details.html">
                            <h5 class="thumb-title">Security System Of Any Building</h5>
                        </a>
                        <div class="post-admin">
                            <a href="#">
                                <span class="admin">By Admin</span>
                            </a>-
                            <a href="#">
                                <span class="date">At 21.05.2017</span>
                            </a>-
                            <a href="#">
                                <span class="comments">32 Comments</span>
                            </a>
                        </div>
                        <p>Venenatis felis per ultrices turpis sit habitasse dis auctor congue eget imperdiet hac curabitur
                            quis cras venenatis volutpat in. Taciti.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-item image-rotate wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <div class="full-row overflow-hidden">
                        <img src="/images/blog/2-2.png" alt="">
                        <a href="news-details.html">
                            <div class="overlay"></div>
                        </a>
                    </div>
                    <div class="blog-text">
                        <a href="news-details.html">
                            <h5 class="thumb-title">Don't Worry Your Data is Safe</h5>
                        </a>
                        <div class="post-admin">
                            <a href="#">
                                <span class="admin">By Admin</span>
                            </a>-
                            <a href="#">
                                <span class="date">At 21.05.2017</span>
                            </a>-
                            <a href="#">
                                <span class="comments">32 Comments</span>
                            </a>
                        </div>
                        <p>Venenatis felis per ultrices turpis sit habitasse dis auctor congue eget imperdiet hac curabitur
                            quis cras venenatis volutpat in. Taciti.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="blog-item image-rotate wow zoomIn" data-wow-delay="300ms" data-wow-duration="500ms">
                    <div class="full-row overflow-hidden">
                        <img src="/images/blog/2-3.png" alt="">
                        <a href="news-details.html">
                            <div class="overlay"></div>
                        </a>
                    </div>
                    <div class="blog-text">
                        <a href="news-details.html">
                            <h5 class="thumb-title">GO next we are always with you</h5>
                        </a>
                        <div class="post-admin">
                            <a href="#">
                                <span class="admin">By Admin</span>
                            </a>-
                            <a href="#">
                                <span class="date">At 21.05.2017</span>
                            </a>-
                            <a href="#">
                                <span class="comments">32 Comments</span>
                            </a>
                        </div>
                        <p>Venenatis felis per ultrices turpis sit habitasse dis auctor congue eget imperdiet hac curabitur
                            quis cras venenatis volutpat in. Taciti.</p>
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
                    <h3 class="inner-title">Get a Brochure</h3>
                    <p>Rhoncus libero volutpat aptent dui convallis orci magna urna mollis lorem. Rutrum. Est fames nullam.
                        Eleifend suspendisse sapien per consequat.</p>
                    <a class="btn btn-secondary" href="#">Download</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="get-process bg-gray padding30">
                    <h3 class="inner-title">Get an Appoinment</h3>
                    <p>Rhoncus libero volutpat aptent dui convallis orci magna urna mollis lorem. Rutrum. Est fames nullam.
                        Eleifend suspendisse sapien per consequat.</p>
                    <a class="btn btn-secondary" href="#">Send Your cv</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="get-process bg-gray-2 padding30">
                    <h3 class="inner-title">Get Our Service</h3>
                    <p>Rhoncus libero volutpat aptent dui convallis orci magna urna mollis lorem. Rutrum. Est fames nullam.
                        Eleifend suspendisse sapien per consequat.</p>
                    <a class="btn btn-secondary" href="#">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection