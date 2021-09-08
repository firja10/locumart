@extends('marketplace.template')


@section('scriptatas')
<script src = "https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-qmdMbgAE1r9qb1Ve"></script>
@endsection



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

    <div class="float-right">

    </div><br> <br>


 <br>
 <br>


    <div class="row" class = "mt-4" style = "background-color: #fff;">


        





<div class="col-md-4" style = "margin-top:10px; margin-bottom:10px;">
    <center>
    <img src="{{asset('storage/Produk/'.$pemesanan->gambar_produk)}}" alt="" style = "width:300px; border-radius:50px;">
</center>
</div>

       
        <div class="col-md-8">

            <br>
            <center>
                <h1 style = "text-align: center;">{{$pemesanan->nama_produk}}</h1>
                <br>
                <p>{{$pemesanan->kategori}}</p>
                <h5> <i class="fa fa-phone"></i> &nbsp; Nomor Handphone : {{$pemesanan->nomor_hp_produk}} </h5>

                <h5> <i class="fas fa-location-arrow"></i> &nbsp; Harga Jual : {{$pemesanan->harga_jual}}</h5>
               

    

               @if($pemesanan->status_pembayaran == 3)
    
              <strong><button class="btn-warning btn" id = "pay-button" type = "button" style = "margin-top:10px;"> <i class="fa fa-search"></i> Cepat Lakukan Pembayaran </button></strong>  

                @elseif($pemesanan->status_pembayaran == 4)
                <br>
                <span> Pembayaran Telah Dilakukan</span>
                <br>
                <a href="" class = "btn btn-primary" >Lakukan Rating</a>

                <br>
                <form action="{{route('hapusbayar',$pemesanan->id)}}" method = "POST">
                    @csrf
                    @method('DELETE')

                <button  class="btn btn-danger" style = "margin-top:10px;"> <i class="fa fa-money-bill"></i> &nbsp; Hapus Riwayat Tagihan</button>
                </form>
             
                
              @endif

              <br>

                 









              {{-- <form action="" id = "payment-form" method = "post" action = "{{route('lakukanpembayaran', $pemesanan->id)}}">

                <input type="hidden" name="result_data" id = "result-data" value="">
              </form> --}}





              {{-- <pre><div id="result-data">JSON result will appear here after payment:<br></div></pre>  --}}
                 
            </center>
            <br>



        </div>
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