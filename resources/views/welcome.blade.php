@extends('layouts.main')
@section('content')
<style type="text/css">
    #myVideo {
 
  min-width: 100%; 
  min-height: 100%;
}
</style>

<section class="hero-section set-bg" data-setbg="img/bg.jpg">
    
            {{-- <div class="locations d-none d-sm-block">
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
            </div> --}}
            <div class="hero-slider owl-carousel">
                <video autoplay muted loop id="myVideo">
  <source src="{{asset('img/Mah e Muharram (Chand) - Mir Hasan Mir Nohay 2022 - New Nohay 2022 - Muharram 2022-1444.mp4')}}" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
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
        {{-- <section class="latest-podcast-section spad">
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
        </section> --}}
        <section class="djs-section">
    
            <div class="container">
                <div class="dj-team pl-5 pr-5">
                    @foreach($user as $row)
                    <div class="col-1-5">
                        <div class="dj-single ">
                            <div style="height: 224px;">
                                <img alt="" src="{{asset('upload/images/'.$row->file)}}" style="width: 100%;height: 100%; object-fit: contain;">
                                
                            </div>
                            
                                <div class="dj-info-warp">
                                    <a href="{{url('list_nohay/' .$row->id)}}">
                                    <div class="dj-info">
                                        <h4>
                                            {{$row->name}}
                                        </h4>
                                        
                                    </div></a>
                                    <div class="dj-social-links">
                                        <a href="{{$row->fburl}}">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                        
                                        <a href="{{$row->twurl}}">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </img>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <section class="charts-section" style="margin-top: 10%;">
            <div class="container">
                <div class="section-title text-center">
                    <h2>
                        Trending
                    </h2>
                </div>
           
                <div class="row" style="margin-bottom: 3%;">
                    @php $k=0; @endphp
                  
                  
                    @foreach($top as $row)
                    @php $k++; @endphp
                    <div class="col-lg-6">
                        <table class="chart-table">
                            <tbody>
                                
                                <tr>
                                    <td ><a href="{{url('single/' .$row->id)}}" style="color: white;">
                                        {{$k}}</a>
                                    </td>
                                    <td><a href="{{url('single/' .$row->id)}}" style="color: white;">
                                        <img alt="#" src="{{asset('upload/images/'.$row->campanyname->file)}}" style="border-radius: 50%;"></a>
                                    </td>
                                    <td>
                                        <h4 style="color: white;"><a href="{{url('single/' .$row->id)}}" style="color: white;">
                                           {{$row->tittle}} | {{$row->year}}</a>
                                        </h4>
                                        
                                    </td>
                                    <td>
                                        <a href="{{url('single/' .$row->id)}}">
                                            <img alt="" src="{{asset('img/icons/xyoutube.png.pagespeed.ic.0QKjSvoBpT.png')}}"/>
                                        </a>
                                    </td>
                                </tr>
                              
                                
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        
        </section>
        
@endsection        