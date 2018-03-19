@extends('layouts.master') @section('title','Career') @section('body')

<!--Banner Section-->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content">
                    <h1 class="page-titile">career with us</h1>
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
                            <a href="/career">Career</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="full-row">
    <div class="container">
        <div class="row flex-box">
            <div class="col-md-12 col-sm-12">
                <div class="application-form">
                    <h3 class="inner-title">Post Your Resume</h3>
                    <p>Consequat. Diam metus nulla commodo aenean nostra consequat. Praesent magna fermentum suscipit sodales
                        maecenas purus nunc nonummy magna. Pulvinar ad non tincidunt, tristique magna, porttitor nec risus
                        tempus ligula sociis.</p>
                    <div class="apply-form">
                        <form class="contact_message" action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" required="required" value="" placeholder="Full Name *" oninvalid="this.setCustomValidity('Please enter full name')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" required="required" value="" placeholder="Your Skills *" oninvalid="this.setCustomValidity('Please enter your skills')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="email" class="form-control" required="required" value="" placeholder="Your Email *" oninvalid="this.setCustomValidity('Please enter your email')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" required="required" value="" placeholder="Your Highest Qualification *" oninvalid="this.setCustomValidity('Please enter your highest qualification')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" pattern="\d{10}" placeholder="Phone *" value="" required="required" oninvalid="this.setCustomValidity('Please enter phone')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" value="" placeholder="Applying for Position ">
                                </div>
                                <div class="form-group col-md-12 col-sm-12">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                </div>
                                <div id="file" class="form-group col-md-6 col-sm-12">
                                    <input type="file" class="attatchment" id="browse" name="fileupload">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <input type="submit" class="btn btn-primary margin-top-30 pull-right" id="send" value="send application">
                                </div>
                                <div class="col-md-12">
                                    <div class="error-handel">
                                        <div id="success">Your email sent Successfully, Thank you.</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection