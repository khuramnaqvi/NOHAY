@extends('layouts.main')
@section('content')
<section class="page-info-section set-bg" data-setbg="img/page-info-bg.jpg">
    <div class="container">
        <div class="section-title text-center">
            <h2>
                Contact
            </h2>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="container">
        {{-- <div class="location-links">
            <a href="#">
                Berlin
            </a>
            <a href="#">
                Bucharest
            </a>
            <a href="#">
                London
            </a>
            <a href="#">
                Budapest
            </a>
            <a href="#">
                Tel Aviv
            </a>
            <a href="#">
                Moscow
            </a>
        </div>
        <div class="contact-info">
            <p>
                <span>
                    A:
                </span>
                Aleea Croitorilor nr. 691, bl. D, Bucuresti, CP 072496
            </p>
            <p>
                <span>
                    T:
                </span>
                0780 243 570
            </p>
            <p>
                <span>
                    E:
                </span>
                <a class="__cf_email__" data-cfemail="016e6767686264413939716e686f75392f626e6c" href="https://preview.colorlib.com/cdn-cgi/l/email-protection">
                    [email protected]
                </a>
            </p>
        </div>
        <div class="map" id="map-canvas">
        </div> --}}
        <div class="section-title text-center">
            <h2>
                Get in Touch
            </h2>
        </div>
        <form class="contact-form">
            <div class="row">
                <div class="col-lg-4">
                    <input placeholder="Your Name" type="text">
                    </input>
                </div>
                <div class="col-lg-4">
                    <input placeholder="Your E-mail" type="text">
                    </input>
                </div>
                <div class="col-lg-4">
                    <input placeholder="Subject" type="text">
                    </input>
                </div>
                <div class="col-lg-12">
                    <textarea placeholder="Message">
                    </textarea>
                    <div class="text-center">
                        <button class="site-btn">
                            SEND IT!
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
