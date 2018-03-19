@extends('layouts.master') @section('title','Contact Us') @section('body')

<!--Banner Section-->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content">
                    <h1 class="page-titile">Contact us</h1>
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
                            <a href="/contact">Contact us</a>
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
            <div class="col-md-8 col-sm-6">
                <div class="contact-us bg-gray padding30">
                    <h3 class="inner-title">Get In Touch</h3>
                    <span class="margin-bottom-15">It will be our pleasure to receive any query from you because we value our customers.</span>
                    <form class="contact_message" method="post">
                        <div class="row">
                            <div class="form-group col-md-12 col-sm-12">
                                <input name="name" type="text" required="required" value="" placeholder="Name *" oninvalid="this.setCustomValidity('Please enter name')"
                                    oninput="setCustomValidity('')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <input name="contact" type="text" pattern="\d{10}" placeholder="Phone *" value="" required="required" oninvalid="this.setCustomValidity('Please enter phone')"
                                    oninput="setCustomValidity('')" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <input name="email" type="email" placeholder="Email *" value="" required="required" oninvalid="this.setCustomValidity('Please enter email')"
                                    oninput="setCustomValidity('')" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <textarea name="_message" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-6">
                                <input class="btn btn-primary margin-top-20" id="send" value="send message" type="submit">
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
            <div class="col-md-4 col-sm-6">
                <div class="contact-detail padding30 color-white bg-dark">
                    <h3 class="inner-title color-white">Get In Touch</h3>
                    <span class="sub-title color-white">Ground Floor, Mala Niwas, Opp. Gulmohar CHS, Charai Gaon, Chembur Naka, Chembur (East), Mumbai – 400071.
                    </span>
                    <span class="color-default">Phone Number</span>
                    <p>(+91) 976 9932 921</p>
                    <p>(+91) 750 614 7073</p>
                    <p>(022) 2522 8631</p>
                    <span class="color-default">E-Mail</span>
                    <p>Info@adhitthana.com</p>
                    <p>support@adhitthana.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="full-row">
    <div class="container-fluid">
        <div class="row">
            <div class="gmap_canvas" id='gmap_canvas'></div>
            <style>
                .mapouter {
                    overflow: hidden;
                    height: 400px;
                    width: 100%;
                }

                .gmap_canvas {
                    background: none !important;
                    height: 400px;
                    width: 100%;
                }
            </style>
        </div>
    </div>
</div>

@endsection @section('extrajs')
<!-- use for map style -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDNaa8LOQISEST6NIGC78vmdnIOynR2SeU"></script>
<script type='text/javascript'>
    function init_map() {
        var myOptions = {
            zoom: 12,
            center: new google.maps.LatLng(19.051722, 72.894993),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(19.051722, 72.894993)
        });
        infowindow = new google.maps.InfoWindow({
            content: '<strong>Adhitthana</strong><br>Ground Floor, Mala Niwas, Opp. Gulmohar CHS,<br> Charai Gaon, Chembur Naka, Chembur (East), Mumbai – 400071. '
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
</script>
@endsection