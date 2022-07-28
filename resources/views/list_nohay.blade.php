@extends('layouts.main')
@section('content')
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
    
</section>
<section class="shows-section spad">
    <div class="container">
        
        <div class="tab-content" id="myTabContent">
            <div aria-labelledby="tab-1" class="tab-pane fade show active" id="tab-1" role="tabpanel">
                <div class="row">
                    @foreach($list as $row)
                    <div class="col-lg-6">
                        <table class="chart-table">
                            <tbody>
                                
                                <tr>
                                    <td ><a href="{{url('single/' .$row->id)}}" style="color: white;">
                                        1</a>
                                    </td>
                                    <td><a href="{{url('single/' .$row->id)}}" style="color: white;">
                                        <img alt="#" src="{{asset('upload/images/'.$row->campanyname->file)}}"></a>
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
                   
                </div>
                <div class="text-center pt-5">
                    <button class="site-btn">
                        LOAD MORE
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
