@extends('layouts.main')
@section('content')
<section class="hero-section set-bg" data-setbg="img/bg.jpg">
            <div class="locations d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 location">
                            <img alt="" src="{{asset('img/logo-small.png')}}">
                                <p>
                                    Berlin
                                </p>
                            </img>
                        </div>
                        <div class="col-md-2 col-sm-4 location">
                            <img alt="" src="{{asset('img/logo-small.png')}}">
                                <p>
                                    Bucharest
                                </p>
                            </img>
                        </div>
                        <div class="col-md-2 col-sm-4 location">
                            <img alt="" src="{{asset('img/logo-small.png')}}">
                                <p>
                                    London
                                </p>
                            </img>
                        </div>
                        <div class="col-md-2 col-sm-4 location">
                            <img alt="" src="{{asset('img/logo-small.png')}}">
                                <p>
                                    Bucharest
                                </p>
                            </img>
                        </div>
                        <div class="col-md-2 col-sm-4 location">
                            <img alt="" src="{{asset('img/logo-small.png')}}">
                                <p>
                                    Tel Aviv
                                </p>
                            </img>
                        </div>
                        <div class="col-md-2 col-sm-4 location">
                            <img alt="" src="{{asset('img/logo-small.png')}}">
                                <p>
                                    Moscow
                                </p>
                            </img>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider owl-carousel">
                <div class="hs-item">
                    <div class="container">
                        <span>
                            UP NEXT
                        </span>
                        <h2>
                            DJ Khaled Exclusive Interview
                        </h2>
                    </div>
                </div>
                <div class="hs-item">
                    <div class="container">
                        <span>
                            UP NEXT
                        </span>
                        <h2>
                            David Guetta Exclusive Interview
                        </h2>
                    </div>
                </div>
                <div class="hs-item">
                    <div class="container">
                        <span>
                            UP NEXT
                        </span>
                        <h2>
                            Dj snake Exclusive Track
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="promotion-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="promo-box set-bg" data-setbg="{{asset('img/1.jpg')}}">
                            <h2>
                               Nohay
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promo-box set-bg" data-setbg="{{asset('img/3.jpg')}}">
                            <h2>
                                Manqabat
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promo-box set-bg" data-setbg="{{asset('img/2.jpg')}}">
                            <h2>
                                Live Streams
                            </h2>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="latest-podcast-section spad">
            <div class="container">
                <div class="section-title text-center">
                    <h2>
                        Latest Podcast
                    </h2>
                </div>
                <div class="new-project-player">
                    <div class="row">
                        <div class="col-lg-4 albam-preview">
                            <img alt="" src="img/albam.jpg">
                            </img>
                        </div>
                        <div class="col-lg-8">
                            <div class="track-name">
                                Hernan Cataneo - Residence #376
                            </div>
                            <div class="audio-wave">
                                <div id="audiowave">
                                </div>
                            </div>
                            <div id="cliptime">
                            </div>
                            <button class="site-btn" id="play" onclick="wavesurfer.playPause();">
                                LISTEN LIVE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="charts-section">
            <div class="container">
                <div class="section-title text-center">
                    <h2>
                        Charts
                    </h2>
                </div>
            </div>
            <div class="charts-warp set-bg" data-setbg="img/chart-bg.jpg">
                <div class="container">
                    <img alt="" src="img/logo-big.png">
                    </img>
                </div>
            </div>
        </section>
        
@endsection        