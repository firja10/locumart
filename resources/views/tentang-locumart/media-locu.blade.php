@extends('tentang-locumart.template')

@section('title')
Media Locumart
@endsection

@section('style')
<style>
body {
}    
</style>    
@endsection


@section('content')
    

<section id = "media-locu" style = "background:url('/tentang-locumart/media-locu.png');  height:100vh;
background-size:cover; margin-top:-5%;">
<div class="container" style = "margin-top:150px; color:white; ">
    <div class="row">
  
            <div class="col-4 d-flex flex-column" style = "">
           
                <h1> <strong>Media Locu</strong> </h1>
                <p>Sebagai Start Up Teknologi, Locu berupaya untuk terus mengikuti perkembangan teknologi dan mengoptimalkan penggunaan media teknologi. Saat ini Locu aktif pada penggunaan media sosial, pesan instan, website, dan marketplace. Untuk terhubung dengan media yang digunakan Locu, Klik berikut :</p>
 
                <center>
                    <a href="" class="btn btn-warning"> <strong>Bit.ly/MediaLocu</strong> </a>
                </center>

            </div>

            <div class="col-7 d-flex flex-column">
{{-- 
                    <img src="{{asset('/tentang-locumart/hadiah-kanan.png')}}" alt=""> --}}

                    <center>
                        <img src="{{asset('/tentang-locumart/hadiah-kanan.png')}}" alt="" style = "margin-top:-50px; margin-right:-100px;">


                </center>


            </div>

            <div class="col-md-1">

            <div class = "align-self-end">
                <ul style = " background-color:#19344F; width:200px; list-style-type:none; height:65.5vh; margin-top:-45px; padding-top:20px;">
                    <li> <a href=""><i class = "bx bxl-whatsapp" style = "font-size:50px;"></i></a> </li>
                    <li> <a href=""><i class = "bx bxl-instagram" style = "font-size:50px;"></i></a>  </li>
                    <li> <a href=""><i class = "bx bxl-facebook" style = "font-size:50px;"></i></a>  </li>
                    <li> <a href=""><i class = "bx bx-envelope" style = "font-size:50px;"></i></a>  </li>
                    <li> <a href=""><i class = "bx bxl-tiktok" style = "font-size:50px;"></i></a>  </li>
                    <li> <a href=""><i class = "bx bxl-youtube" style = "font-size:50px;"></i></a>  </li>
                    <li> <a href=""><i class = "bx bxl-linkedin-square" style = "font-size:50px;"></i></a>  </li>
                </ul>
            </div>
        </div>
  
                


    </div>
</div>

</section>
@endsection