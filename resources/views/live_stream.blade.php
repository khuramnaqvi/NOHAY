@extends('layouts.main')

@section('content')
<style type="text/css">
@media only screen and (max-width: 600px) {
    iframe{
        width: 22rem;
        height: 30rem;
       
    }
    .chart-table{
        width: 22rem;
    }
    .sec1 ,.sec2{
        margin:auto;
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */



/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    iframe{
        width: 40rem;
        height: 30rem;
        padding-right: 3%;
    }
    .chart-table{
        width: 30rem;
    }
    .sec1 ,.sec2{
        margin:unset;
    }
}    
    
</style>
<section class="page-info-section set-bg" data-setbg="img/page-info-bg.jpg">
    <div class="container">
        <div class="section-title text-center">
            <h2>
               Live Stream
            </h2>
        </div>
    </div>
</section>


    <div class="container">
       
        <div class="row">
           
            <div class="col-lg-4 sec1">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/live_stream?channel=UCMmpLL2ucRHAXbNHiCPyIyg" frameborder="0" allowfullscreen></iframe>
            </div>
           
           
            
            
           
        </div>
    </div>


@endsection
