@extends('layouts.kami')

@section('content') 


<!--content-->



<div>
    

    <img src="images/bg.jpg" class="img-responsive" alt="">
</div>
<div class="content-top ">
    <div class="container ">
        <div class="spec ">
            <h3>Special Offers</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
            <div class="tab-head ">
                <nav class="nav-sidebar">
                    <ul class="nav tabs ">
                      <li class="active"><a href="#tab1" data-toggle="tab">Staples</a></li>
                    </ul>
                </nav>
                        @php
                        $keterangan = App\Keterangan::paginate(4);
                        @endphp
                <div class=" tab-content tab-content-t ">
                    <div class="tab-pane active text-style" id="tab1">
                        <div class=" con-w3l">
                            @foreach($keterangan as $data)
                            <div class="col-md-3 m-wthree">
                                <div class="col-m"><center>                             
                                    <a href="#" data-toggle="modal" data-target="#$myModal1" class="offer-img">
                                        <img src="{{ asset('/img/'.$data->sepeda->foto.'') }}"  alt="" width="150" height="150">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">{{$data->sepeda->nama}}</a></h6>                          
                                        </div>
                                        
                                            <p >Rp.{{$data->harga}}</p>
                                              <div class="block">
                                            </div>
                                            <div class="clearfix"></div>
                                        
                                        
                                    </div>
                                </div>
                            </center>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                         </div>
                    </div>
                </div>
            </div>
        
    </div>
    </div>
    </div>
    <br>

<!--content-->
<!--content-->
  <!-- Carousel
    ================================================== -->
<!-- /.carousel -->

<!--content-->
<!--footer-->

@endsection