@extends('mitra-locumart.template')

@section('title')
Home - Mitra Locumart
@endsection

@section('content')

<section id = "home" style = "background:url('/mitra-locumart/home-1.png');  height:100vh;
background-size:cover; margin-top:-5%;">

<div class="container">
    <div class="row" style = "margin-top:200px;">

        <div class="col-xl-4 col-md-8 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <center>
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header"> <a href="">Klik Di sini</a> </div>
                        <div class="card-body">
                          <h5 class="card-title">Success card title</h5>
                          <p class="card-text">Quick sample text to create the card title and make up the body of the card's content.</p>
                        </div>
                      </div>
            </center>

        </div>


        <div class="col-xl-4 col-md-8 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <center>
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header"> <a href="">Klik Di sini</a> </div>
                        <div class="card-body">
                            <h5 class="card-title">
                            <img src="{{asset('/mitra-locumart/mula-jualan.png')}}" alt="" style = "width:250px;">
                            </h5>

                        </div>
                      </div>
            </center>

        </div>




    </div>
</div>



</section>


@endsection