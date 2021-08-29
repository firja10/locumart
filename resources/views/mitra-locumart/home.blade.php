@extends('mitra-locumart.template')

@section('title')
Home - Mitra Locumart
@endsection

@section('content')

<section id = "home" style = "background:url('/mitra-locumart/home-1.png');
background-size:cover; margin-top:-5%;">

<div class="container">
    <div class="row" style = "margin-top:200px;">



        <div class="col-xl-4 col-md-8 align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
            <center>
                    <div class="card text-white mb-3 " style="max-width: 18rem;background: rgba(255,255,255,0.5);">
                        <div class="card-header" style = "text-align:left; color:#424242;" > <a href="" style = "color:#424242;">Klik Di sini</a> </div>
                        <div class="card-body" style="background-color: #155059;">
                            <h5 class="card-title">
                            <img src="{{asset('/mitra-locumart/mulai-jualan.png')}}" alt="" style = "width:250px;">
                            </h5>

                        </div>
                      </div>
            </center>

        </div>










        <div class="col-xl-4 col-md-8 align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
            <center>
                    <div class="card text-white mb-3 " style="max-width: 18rem;background: rgba(255,255,255,0.5);">
                        <div class="card-header" style = "text-align:left; color:#424242;" > <a href="" style = "color:#424242;">Klik Di sini</a> </div>
                        <div class="card-body" style="background-color: #CF9E49;">
                            <h5 class="card-title">
                            <img src="{{asset('/mitra-locumart/ngembangin.png')}}" alt="" style = "width:250px;">
                            </h5>

                        </div>
                      </div>
            </center>

        </div>













        
        <div class="col-xl-4 col-md-8 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <center>
                    <div class="card text-white mb-3" style="max-width: 18rem;background: rgba(255,255,255,0.5);">
                        <div class="card-header" style = "text-align:left; color:#424242;" > <a href="" style = "color:#424242;">Klik Di sini</a> </div>
                        <div class="card-body" style="background-color: #337A42;">
                            <h5 class="card-title">
                            <img src="{{asset('/mitra-locumart/cari-modal.png')}}" alt="" style = "width:250px;">
                            </h5>

                        </div>
                      </div>
            </center>

        </div>




    </div>
</div>



</section>



<section id="home_dua" style = "background:url('/mitra-locumart/home-2_1.png'); background-size:cover; margin-top:-2%; ">
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-md-12 align-items-stretch">

        </div>
        <div class="col-xl-6 col-md-12 align-items-stretch">
            <center>
                <img src="{{asset('/mitra-locumart/kanan-home-2.png')}}" alt="" style = "width:300px; margin-top:50px;">
                <br>
                {{-- <div style = "border:5px solid white;" ></div> --}}
                <hr style = "border:5px solid white; border-radius:30px; " class = "mt-4">
            </center>
                <p style = "text-align: justify; color:#ffff;">
                    Selain berkomitmen melestarikan kekayaan produk bernilai budaya nusantara, Loku juga berkomitmen untuk memberdayakan para pelaku UMKM yang menjual produk bernilai budaya nusantara hingga menciptakan keunggulan kompetitif pada usaha bisnisnya melalui fitur business upgrading dan atau crowdfunding yang dapat digunakan oleh mitra usaha Loku menyesuaikan dengan kebutuhan usaha bisnisnya.
                </p>

            
        </div>
    </div>
</div>


</section>








@endsection