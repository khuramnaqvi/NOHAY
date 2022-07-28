
<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from preview.colorlib.com/theme/eighty8/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 06:39:55 GMT -->
    <head>
        <title>
           Index
        </title>
        <meta charset="utf-8">
            <meta content="88.0 radio station template" name="description">
                <meta content="radio, station, creative, html" name="keywords">
                    <meta content="width=device-width, initial-scale=1.0" name="viewport">
                        <link href="img/favicon.ico" rel="shortcut icon"/>
                        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
                            <link href="{{asset('css/bootstrap.min.css%2bfont-awesome.min.css%2bjquery-ui.min.css%2bflaticon.css%2bowl.carousel.css%2bstyle.css%2banimate.css.pagespeed.cc.Q00Cv9E4fx.css')}}" rel="stylesheet"/>
                           
                        </link>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
@section('head')        
        <div id="preloder">
            <div class="loader">
            </div>
        </div>
        <header class="header-section">
            <div class="header-warp">
                <h3 style="color: #ff0000;margin: auto;"><b>Madh-E-Shabir</b></h3>
                <div class="nav-switch">
                    <i class="fa fa-bars">
                    </i>
                </div>
                <ul class="main-menu">
                    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                        <a href="{{url('/')}}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            About
                        </a>
                    </li>
                    <li class="{{ (request()->is('/list_nohay')) ? 'active' : '' }}">
                        <a href="{{url('list_nohay')}}">
                            Nohay
                        </a>
                    </li>
                    <li class="{{ (request()->is('/All_Noha_Khawan')) ? 'active' : '' }}">
                        <a href="{{url('All_Noha_Khawan')}}">
                           Noha Khawan's
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{url('contact')}}">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="header-social-links">
                    <a href="#">
                        <i class="fa fa-twitter">
                        </i>
                    </a>
                    <a href="#">
                        <i class="fa fa-soundcloud">
                        </i>
                    </a>
                    <a href="#">
                        <i class="fa fa-instagram">
                        </i>
                    </a>
                    <a href="#">
                        <i class="fa fa-google-plus">
                        </i>
                    </a>
                    <a href="#">
                        <i class="fa fa-facebook">
                        </i>
                    </a>
                    <a href="#">
                        <i class="fa fa-youtube-play">
                        </i>
                    </a>
                </div>
            </div>
        </header>
@show
@section('head') 
@yield('content')
       
@section('footer') 
        <section class="footer-top-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ft-widget">
                        <div class="ft-title">
                            <h4>
                                Quick Links
                            </h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                     Noha Khawan's
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                           
                            
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 ft-widget">
                        <div class="ft-title">
                            <h4>
                                 Noha Khawan's
                            </h4>
                        </div>
                        @php
                $classes = App\Models\User::where('role',1)->orderBy('id', 'DESC')->get();
                    $l=0;
            @endphp
                        <ul class="order-list">
                            
                            @foreach($classes as $row)
                            @php
               
                    $l++;
            @endphp
                            <li>
                                <a href="{{url('list_nohay/' .$row->id)}}">
                                    <span>
                                        {{$l}}
                                    </span>
                                    {{$row->name}}
                                </a>
                            </li>
                            @endforeach
                            
                            
                        </ul>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 ft-widget">
                        <div class="ft-title">
                            <h4>
                                Blog
                            </h4>
                        </div>
                        <div class="ft-blog-widget">
                            <div class="bw-item">
                                <div class="bw-thumb set-bg" data-setbg="img/blog/thumb/1.jpg">
                                </div>
                                <div class="bw-content">
                                    <p>
                                        5 Things to know when you attend a music festival.
                                    </p>
                                    <a href="#">
                                        Continue Reading
                                    </a>
                                </div>
                            </div>
                            <div class="bw-item">
                                <div class="bw-thumb set-bg" data-setbg="img/blog/thumb/2.jpg">
                                </div>
                                <div class="bw-content">
                                    <p>
                                        5 Things to know when you attend a music festival.
                                    </p>
                                    <a href="#">
                                        Continue Reading
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-6 ft-widget">
                        <div class="ft-title">
                            <h4>
                                Contact
                            </h4>
                        </div>
                        <div class="ft-contact-widget">
                            <p>
                                <span>
                                    A:
                                </span>
                                1234 Lahore, Pakistan
                            </p>
                            <p>
                                <span>
                                    T:
                                </span>
                                000-111-222
                            </p>
                            <p>
                                <span>
                                    E:
                                </span>
                                <a class="__cf_email__" data-cfemail="244b42424d4741641c1c544b4d4a501c0a474b49" href="https://preview.colorlib.com/cdn-cgi/l/email-protection">
                                    [email protected]
                                </a>
                            </p>
                           <h3 style="color: #ff0000;margin: auto;"><b>Madh-E-Shabir</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
        <footer class="footer-section">
            <div class="contaoner">
                <p>
                    Copyright ©
                    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                    </script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved 
                    <i aria-hidden="true" class="fa fa-heart-o">
                    </i>
                    by
                    <a href="{{url('/')}}" target="_blank">
                        Madh-E-Shabir
                    </a>
                </p>
            </div>
        </footer>

@show
@section('js')
        <script src="{{asset('js/jquery-3.2.1.min.js')}}">
        </script>
        <script src="{{asset('js/jquery-ui.min.js')}}">
        </script>
        <script>eval(mod_pagespeed_MPfK6P7FDp);</script>

        <script src="{{asset('js/owl.js')}}">
        </script>
        <script>
            eval(mod_pagespeed_RPo0uxJxPc);
        </script>
        
        <script src="{{asset('js/main.js')}}">
        </script>
        <script src="{{asset('js/wavesurfer.min.js')}}">
        </script>
        
    </body>
@show    
</html>