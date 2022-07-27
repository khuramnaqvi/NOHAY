@extends('layouts.main')

@section('content')
<style type="text/css">
@media only screen and (max-width: 600px) {
    iframe{
        width: 22rem;
        height: 30rem;
        margin-left: 3%;

    }
    .chart-table{
        width: 22rem;
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */



/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    iframe{
        width: 40rem;
        height: 30rem;
            margin-left: unset;
            padding-right: 3%;
    }
    .chart-table{
        width: 30rem;
    }
}    
    
</style>
<section class="page-info-section set-bg" data-setbg="img/page-info-bg.jpg">
    <div class="container">
        <div class="section-title text-center">
            <h2>
                Noha Khawan's
            </h2>
        </div>
    </div>
</section>


    <div class="container">
       
        <div class="row">
            <div class="col-lg-7">
                <iframe src="https://www.youtube.com/embed/BGPCXqzG__Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-5">
                        <table class="chart-table" style="">
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <img alt="#" src="img/chart/1.jpg">
                                    </td>
                                    <td>
                                        <h4>
                                            Girls Like You
                                        </h4>
                                        <p>
                                            Maroon 5 Featuring Cardi B
                                        </p>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img alt="" src="img/icons/xyoutube.png.pagespeed.ic.0QKjSvoBpT.png">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        <img alt="#" src="img/chart/2.jpg">
                                    </td>
                                    <td>
                                        <h4>
                                            I Like It
                                        </h4>
                                        <p>
                                            Cardi B, Bad Bunny &amp; J Balvin
                                        </p>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img alt="" src="img/icons/xyoutube.png.pagespeed.ic.0QKjSvoBpT.png">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        <img alt="#" src="img/chart/3.jpg">
                                    </td>
                                    <td>
                                        <h4>
                                            Better Now
                                        </h4>
                                        <p>
                                            Post Malone
                                        </p>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img alt="" src="img/icons/xyoutube.png.pagespeed.ic.0QKjSvoBpT.png">
                                        </a>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                        <button class="site-btn" style="margin-top: 7%;margin-bottom: 7%;float: right;">
                        Dwonload
                    </button>
                      
            </div>
            
            
           
        </div>
    </div>


@endsection
