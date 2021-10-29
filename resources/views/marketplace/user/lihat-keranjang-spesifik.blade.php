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
                <h3> <i class="fa fa-list-alt"></i> &nbsp; Kategori: {{$pemesanan->kategori}} </h3>
                <h3> <i class="fa fa-phone"></i> &nbsp; Nomor Handphone : {{$pemesanan->nomor_hp_produk}} </h3>

                <h3> <i class="fas fa-money-bill-alt"></i> &nbsp; Harga Jual : <?php echo " Rp " . number_format($pemesanan->harga_diskon, 2, ',', '.')?></h3>
               

                    <br>
                    <form action="{{route('hapusbayar',$pemesanan->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')

                    <button  class="btn btn-danger" style = "margin-top:10px;font-size:15px;"> <i class="fa fa-money-bill"></i> &nbsp; Hapus Produk</button>
                    </form>
                 
    
              @if ($pemesanan->status_pembayaran == 1)
              <form action="{{route('pembayaran', $pemesanan->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                  <button type = "submit" name = "submit" class="btn btn-success" style = "margin-top:10px; font-size:15px;"> <i class="fa fa-shopping-cart"></i> &nbsp; Beli produk</button>
              </form>
              @elseif($pemesanan->status_pembayaran == 2)
              <br>
              <a style = "font-size:15px;" href="{{url('/cekongkir/'.$pemesanan->id)}}" class=" btn btn-dark">Pilih Ongkos Kirim</a>
                  {{-- <a href="" class="btn btn-warning" style = "padding-top:3px;"> <i class="fa fa-search"></i>  Lakukan Pembayaran</a> --}}

               @elseif($pemesanan->status_pembayaran == 3)
    
                <button class="btn-warning btn" id = "pay-button" type = "button" style = "margin-top:10px; font-size:15px;"> <i class="fa fa-search"></i> Lakukan Pembayaran </button>

                @elseif($pemesanan->status_pembayaran == 4)
                <br>
                <span> Pembayaran Telah Dilakukan </span>
                <br>
                <a href="" class="btn btn-primary" style = "font-size:15px;"> Lakukan Rating</a>
              @endif

              <br>

                 








              <form action="" id = "payment-form" method = "get" action = "Payment">

                <input type="hidden" name="result_data" id = "result-data" value="">
              </form>


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


   

    {{-- <script type = "text/javascript">
    document.getElementById('pay-button').onClick = function() {
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data) {
            $('#result-type').val(type);
            $('#result-data').val(JSON.stringify(data));
        }


        snap.pay('<?=$snapToken?>', {

          onSuccess: function(result){
            changeResult('success',result);
            console.log(result.status_message);
            console.log(result);
            $('#payment-form').submit();

          },

          onPending: function(result){
            changeResult('pending',result);
            console.log(result.status_message);
            $('#payment-form').submit();
          },
          onError: function(result){
            changeResult('error',result);
            console.log(result.status_message);
            $('#payment-form').submit();
          },



    }); };

    </script> --}}

        <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
    
        snap.pay('<?=$snapToken?>', {
     
          onSuccess: function(result){
        
             document.getElementById('result-data').innerHTML += JSON.stringify(result, null, 2);
             $('#payment-form').submit();
          },
        
          onPending: function(result){
 
            document.getElementById('result-data').innerHTML += JSON.stringify(result, null, 2);
            $('#payment-form').submit();
          },
      
          onError: function(result){
        
             document.getElementById('result-data').innerHTML += JSON.stringify(result, null, 2);
             $('#payment-form').submit();
          }
        });
      };
    </script>
 





    {{-- <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
    
        snap.pay('<?=$snapToken?>', {
          onSuccess: function(result){console.log('success');console.log(result);},
          onPending: function(result){console.log('pending');console.log(result);},
          onError: function(result){console.log('error');console.log(result);},
          onClose: function(){console.log('customer closed the popup without finishing the payment');}
        });
      };
    </script> --}}

















    <script>
        $(document).ready(function() {
  $('#rateMe1').mdbRate();
});
    </script>
@endsection