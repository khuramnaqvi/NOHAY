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
               {{$list->campanyname->name}}
            </h2>
        </div>
    </div>
</section>


    <div class="container">
       
        <div class="row">
            <div class="col-lg-7 sec1">
                <iframe src="https://www.youtube.com/embed/{{$list->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 sec2">
                        <table class="chart-table" style="">
                            <tbody>
                            @php $k=0; @endphp   
                            @foreach($three as $row_three)
                            @php $k++; @endphp    
                                <tr>
                                    <td ><a href="{{url('single/' .$row_three->id)}}" style="color: white;">
                                        {{$k}}</a>
                                    </td>
                                    <td><a href="{{url('single/' .$row_three->id)}}" style="color: white;">
                                        <img alt="#" src="{{asset('upload/images/'.$row_three->campanyname->file)}}" style="border-radius: 50%;"></a>
                                    </td>
                                    <td>
                                        <h4 style="color: white;"><a href="{{url('single/' .$row_three->id)}}" style="color: white;">
                                           {{$row_three->tittle}} | {{$row_three->year}}</a>
                                        </h4>
                                        
                                    </td>
                                    <td>
                                        <a href="{{url('single/' .$row_three->id)}}">
                                            <img alt="" src="{{asset('img/icons/xyoutube.png.pagespeed.ic.0QKjSvoBpT.png')}}"/>
                                        </a>
                                    </td>
                                </tr>
                              @endforeach
                               
                               
                            </tbody>
                        </table>
                        <a href="{{asset('img/how_to_dwonload.mp4')}}" style="color:#ff0000;" download="">How To Dwonload</a>
                        <a href="{{$link}}"  >
                        <button class="site-btn" style="margin-top: 7%;margin-bottom: 7%;float: right;">
                        Dwonload
                    </button></a>
                      
            </div>
            
            
           
        </div>
    </div>


@endsection
