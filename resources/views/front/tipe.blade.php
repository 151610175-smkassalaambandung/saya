@extends('layouts.kami')

@section('content')




  <!---->

    <!-- Carousel
    ================================================== -->




<!-- /.carousel -->
<div>
    

    <img src="images/bg2.jpg" class="img-responsive" alt="">
</div>
<!--content-->
<!-- <div class="kic-top ">
    <div class="container ">
    <div class="kic ">
            <h3>Popular Categories</h3>
            
        </div>
        <div class="col-md-4 kic-top1">
            <a href="single.html">
                <img src="images/ki.jpg" class="img-responsive" alt="">
            </a>
            <h6>Dal</h6>
            <p>Nam libero tempore</p>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="single.html">
                <img src="images/ki1.jpg" class="img-responsive" alt="">
            </a>
            <h6>Snacks</h6>
            <p>Nam libero tempore</p>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="single.html">
                <img src="images/ki2.jpg" class="img-responsive" alt="">
            </a>
            <h6>Spice</h6>
            <p>Nam libero tempore</p>
        </div>
    </div> -->
</div>

<!--content-->
        <div class="product">
        <div class="container">
            <div class="spec ">
                <h3>Tipe Sepeda</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
                <div class=" con-w3l agileinf">
                            @php
                        $keterangan = App\Keterangan::all();
                        @endphp
                        @foreach($keterangan as $data)
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                                        <img src="{{ asset('/img/'.$data->sepeda->foto.'') }}"  alt="" width="150" height="150" >
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.html">{{$data->sepeda->nama}}</a></h6>                         
                                        </div>
                                        <div class="mid-2">
                                            <center>
                                            <p><h4><em class="item_price">Rp. {{$data->harga}},-</em></h4></p>
                                              <div class="block">
                                            </div>
                                            <div class="clearfix"></div>
                                        </center>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                         </div>
        </div>
    </div>

@endsection