@extends('marketplace.template')

@section('style')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    body {
        background-color:aliceblue;
    }

    @media only screen and (max-width:900px){
        section {
            margin-top:150px;
        }
    }

</style>
@endsection


@section('content')
    <section id = "daftar-toko" style = " margin-right:10px; margin-left:10px; margin-top:50px; margin-bottom:150px; ">

<br><br>



<div class="container">
 <br>

    <center>
        <h1 style = "text-align: center;">Daftar Tagihan Anda</h1>
    </center>
 <br>
 <br>


    <div class="row" class = "mt-4">


        




@foreach ($pemesanans as $cart)
<div class="col-md-3">
    <div class="card" style="width: 20rem;">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <img src="{{asset('storage/Produk/'.$cart->gambar_produk)}}" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{$cart->nama_produk}}</h5>
          <p class="card-text">{{$cart->kategori}}</p>
          <p class="card-text">{{$cart->harga_diskon}}</p>
          
         
          {{-- <span id="rateMe1"></span> --}}

          <center>


            <a href="{{route('daftartagihanspesifik',$cart->id)}}" class="btn btn-warning" style = "text-align:center;">Lihat Detail</a>
            <br>



        </center>

        </div>
      </div>
   
</div>
@endforeach
       
        {{-- <div class="col-md-3">

        </div> --}}
    </div>
</div>
        


  
 




    </section>

@endsection


@section('script')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
  $('#rateMe1').mdbRate();
});
    </script>
@endsection