@extends('tentang-locumart.template')

@section('title')
Media Locumart
@endsection



@section('content')
    

<section id = "media-locu" style = "background:url('/tentang-locumart/media-locu.png');  height:100vh;
background-size:cover; margin-top:-5%;">
<div class="container" style = "margin-top:150px; color:white;margin-left:10px; ">
    <div class="row">
  
            <div class="col-md-4" style = "">
                <h1> <strong>Media Locu</strong> </h1>
                <p>Sebagai Start Up Teknologi, Locu berupaya untuk terus mengikuti perkembangan teknologi dan mengoptimalkan penggunaan media teknologi. Saat ini Locu aktif pada penggunaan media sosial, pesan instan, website, dan marketplace. Untuk terhubung dengan media yang digunakan Locu, Klik berikut :</p>
               
                <center>
                    <a href="" class="btn btn-warning"> <strong>Bit.ly/MediaLocu</strong> </a>
                </center>

            </div>

            <div class="col-md-7" style = "">
{{-- 
                    <img src="{{asset('/tentang-locumart/hadiah-kanan.png')}}" alt=""> --}}
                    <center>
                        <img src="{{asset('/tentang-locumart/hadiah-kanan.png')}}" alt="" style = "margin-top:-50px;">
                </center>

            </div>
            <div class="col-md-1" style = "text-align: right; background-color:#2C3761;height:65vh; margin-top:-44px;">
                {{-- 
                                    <img src="{{asset('/tentang-locumart/hadiah-kanan.png')}}" alt=""> --}}
                                    <h2>Hallo</h2>
            </div>
                


    </div>
</div>

</section>
@endsection