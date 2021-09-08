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


        





       
        <div class="col-md-12">
            <br>
            <center>
                <img src="{{asset('storage/Produk/'.$pemesanan->gambar_produk)}}" alt="" style = "width:300px; border-radius:50px;">
            </center>
            <br>
            <center>
                <h1 style = "text-align: center;">{{$pemesanan->nama_produk}}</h1>
                <br>
                <p>{{$pemesanan->kategori}}</p>
                <h5> <i class="fa fa-phone"></i> &nbsp; Nomor Handphone : {{$pemesanan->nomor_hp_produk}} </h5>

                <h5> <i class="fas fa-location-arrow"></i> &nbsp; Harga Jual : {{$pemesanan->harga_jual}}</h5>
               
                <br>
                <h2>Silakan Berikan Rating Anda</h2>

                @if($pemesanan->rating_produk == NULL || $pemesanan->rating_produk == 0)

                <form action="" method = "POST" action = "{{route('updaterating', $pemesanan->id)}}">
                    @csrf
                    @method('PATCH')

                    <center>
                        <br>

                    <div class="form-group" style = "text-align:center;">
                        <input type="checkbox" id="satu" value="1" name = "bintang_rating">
                        <label for="satu">
                        <span class="fa fa-star checked" style = "color:yellow"></span>
                        </label>
                       </div>
                       

                       <div class="form-group" style = "text-align:center;">
                        <input type="checkbox" id="dua" value="2" name = "bintang_rating">
                        <label for="dua">
                        <span class="fa fa-star checked" style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        </label>
                       </div>


                       <div class="form-group" style = "text-align:center;">
                        <input type="checkbox" id="tiga" value="3" name = "bintang_rating">
                        <label for="tiga">
                        <span class="fa fa-star checked" style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        </label>
                       </div>

                       <div class="form-group" style = "text-align:center;">
                        <input type="checkbox" id="empat" value="4" name = "bintang_rating">
                        <label for="empat">
                        <span class="fa fa-star checked" style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        </label>
                       </div>
                    

                       <div class="form-group" style = "text-align:center;">
                        <input type="checkbox" id="lima" value="5" name = "bintang_rating">
                        <label for="lima">
                        <span class="fa fa-star checked" style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        <span class="fa fa-star checked"style = "color:yellow"></span>
                        </label>
                       </div>
                    
                    




                       <br>
                       <div class="form-group">
                       <button type = "submit" class = "btn btn-success" name = "submit" id = "submit"> <b> Submit Rating</b> </button>
                       </div>
                    </center>
                       </form>

                    @else

                    <button class = "btn btn-success"> Terima Kasih Sudah Memberikan Rating Anda</button>
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