@extends('layouts.main')
@section('content')

<style type="text/css">
   
    
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
<section class="djs-section">
    <div class="container">
        <div class="dj-intro">
            <p>
               {{--  Fusce faucibus dui in ligula pellentesque tincidunt. Proin suscipit lectus ac vehicula rhoncus. Suspendisse sed lectus id turpis pellentesque eleifend. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi ac libero quis massa porttitor bibendum. Fusce magna tortor, maximus vitae imperdiet id, pretium facilisis elit. Morbi pharetra laoreet ex imperdiet scelerisque. Cras dictum at massa nec commodo. --}}
            </p>
        </div>
    </div>
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
<section class="shows-section spad">
    <div class="container">
        <ul class="shows-menu nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a aria-controls="tab-1" aria-selected="true" class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">
                    2022
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="tab-2" aria-selected="false" class="nav-link" data-toggle="tab" href="#tab-2" role="tab">
                    2021
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="tab-3" aria-selected="false" class="nav-link" data-toggle="tab" href="#tab-3" role="tab">
                    2020
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="tab-4" aria-selected="false" class="nav-link" data-toggle="tab" href="#tab-4" role="tab">
                    2019
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div aria-labelledby="tab-1" class="tab-pane fade show active" id="tab-1" role="tabpanel">
                <div class="row">
                    @php $k=0; @endphp
                    @foreach($list as $key=>$value)
                    @if($key==2022)
                        @foreach($value as $row)
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
                                               {{$row->tittle}}</a>
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
                    @endif    
                    @endforeach
                </div>
                
            </div>
            <div aria-labelledby="tab-2" class="tab-pane fade" id="tab-2" role="tabpanel">
                 <div class="row">
                    @php $k1=0; @endphp
                    @foreach($list as $key=>$value)
                    @if($key==2021)
                        @foreach($value as $row)
                        @php $k1++; @endphp
                        <div class="col-lg-6">
                            <table class="chart-table">
                                <tbody>
                                    
                                    <tr>
                                        <td ><a href="{{url('single/' .$row->id)}}" style="color: white;">
                                            {{$k1}}</a>
                                        </td>
                                        <td><a href="{{url('single/' .$row->id)}}" style="color: white;">
                                            <img alt="#" src="{{asset('upload/images/'.$row->campanyname->file)}}" style="border-radius: 50%;"></a>
                                        </td>
                                        <td>
                                            <h4 style="color: white;"><a href="{{url('single/' .$row->id)}}" style="color: white;">
                                               {{$row->tittle}}</a>
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
                    @endif    
                    @endforeach
                </div>
                
            </div>
            <div aria-labelledby="tab-3" class="tab-pane fade" id="tab-3" role="tabpanel">
               
            </div>
            <div aria-labelledby="tab-4" class="tab-pane fade" id="tab-4" role="tabpanel">
                 
            </div>
            <div aria-labelledby="tab-5" class="tab-pane fade" id="tab-5" role="tabpanel">
              
            </div>
            
        </div>
    </div>
</section>

@endsection
