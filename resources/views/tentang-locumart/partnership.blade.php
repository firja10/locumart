@extends('tentang-locumart.template')

@section('title')
Partnership
@endsection



@section('content')
    

<section id = "partnership" style = "background:url('/tentang-locumart/partner.png');  height:100vh;
background-size:cover; margin-top:-5%;">
<div class="container">
    <div class="row">
        <div class="col-5 d-flex flex-column">
            <img src="{{asset('/tentang-locumart/kiri-partner.png')}}" alt="" style = "width:450px;  padding-top:100px;">


            <div class = "d-none d-lg-block nav-menu ml-auto">
                <ul style = "list-style-type: none;" >
                    <li><a href="" class="btn btn-success " > Hubungkan</a></li>
                    <li><a href="" class="btn btn-danger " > Informasi</a></li>
                </ul>
            </div>

        </div>


        <div class="col-7 d-flex flex-column">
            <div class = "align-self-end" style = "color:#fff; ">
                <h2 style = "padding-top:150px;text-align:right;">PARTNERSHIP</h2>
                <p style = "margin-left:120px;text-align:justify;">
                    Locu berkomitmen bersama tujuan untuk melestarikan kekayaan produk budaya nusantara dengan konsep yang modern melalui penyediaan fasilitas fitur utama : marketplace, business upgrading, dan crowdfunding. Demi kelancaran pencapaian tujuan, Locu terbuka untuk menjalin kerja sama partnership dengan pihak lain yang memiliki tujuan relevan dengan Locu, untuk itu mari kita jalin hubungan partnership dan menciptakan tujuan bersama untuk melestarikan kekayaan produk budaya nusantara! Info lebih lanjut mengenai partnership dapat diakses melalui Bit.ly/PartnershipLocu .
                </p>
            </div>




        </div>





    </div>
</div>

</section>
@endsection