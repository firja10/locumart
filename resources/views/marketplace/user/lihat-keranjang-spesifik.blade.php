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

    <div class="float-right">

    </div><br> <br>


 <br>
 <br>


    <div class="row" class = "mt-4" style = "background-color: #fff;">


        





<div class="col-md-4" style = "margin-top:10px; margin-bottom:10px;">
    <center>
    <img src="{{asset('storage/Pemesanan/'.$pemesanan->gambar_produk)}}" alt="" style = "width:300px; border-radius:50px;">
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
               

                    <br>
                  <a href="{{route('daftarproduktoko',$pemesanan->id)}}" class="btn btn-success" style = "margin-top:10px; margin-right:5px;"> <i class="fa fa-money-bill"></i> &nbsp; Beli Produk</a>
                 
                  {{-- <form action="{{route('lihatkeranjang')}}" method = "POST" enctype="multipart/form-data">
                    @csrf --}}
                    <div class="form-group">
                        {{-- <label for="nama_produk" class="col-form-label"> Nama Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="nama_produk" name = "nama_produk" placeholder="{{$pemesanan->nama_produk}}" value = "{{$pemesanan->nama_produk}}">
            
                      </div>
                      <div class="form-group">
                        {{-- <label for="kategori" class="col-form-label">Deskripsi Kelas :</label> --}}
                        {{-- <textarea class="form-control" id="kategori" name = "kategori" placeholder="{{$pemesanan->kategori}}" value = "{{$pemesanan->kategori}}">{{$pemesanan->kategori}}</textarea> --}}
                        <input type="hidden" class="form-control" id="kategori" name = "kategori" placeholder="{{$pemesanan->kategori}}" value = "{{$pemesanan->kategori}}">
                    </div>
            
                      <div class="form-group">
                        {{-- <label for="harga_jual" class="col-form-label"> Materi Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="harga_jual" name = "harga_jual" placeholder="{{$pemesanan->harga_jual}}" value = "{{$pemesanan->harga_jual}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="jumlah_pesan" name = "jumlah_pesan" placeholder="{{$pemesanan->jumlah_pesan}}" value = "{{$pemesanan->jumlah_pesan}}">
                      </div>
            
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="harga_diskon" name = "harga_diskon" placeholder="{{$pemesanan->harga_diskon}}" value = "{{$pemesanan->harga_diskon}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="harga_total" name = "harga_total" placeholder="{{$pemesanan->harga_total}}" value = "{{$pemesanan->harga_total}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="ongkos_kirim" name = "ongkos_kirim" placeholder="{{$pemesanan->ongkos_kirim}}" value = "{{$pemesanan->ongkos_kirim}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="nama_toko" name = "nama_toko" placeholder="{{$pemesanan->nama_toko}}" value = "{{$pemesanan->nama_toko}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="media_pengiriman" name = "media_pengiriman" placeholder="{{$pemesanan->media_pengiriman}}" value = "{{$pemesanan->media_pengiriman}}">
                      </div>
            
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="media_pembayaran" name = "media_pembayaran" placeholder="{{$pemesanan->media_pembayaran}}" value = "{{$pemesanan->media_pembayaran}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="status_pembayaran" name = "status_pembayaran" placeholder="{{$pemesanan->status_pembayaran}}" value = "{{$pemesanan->status_pembayaran}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="rating_produk" name = "rating_produk" placeholder="{{$pemesanan->rating_produk}}" value = "{{$pemesanan->rating_produk}}">
                      </div>
    
                    <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="rating_toko" name = "rating_toko" placeholder="{{$pemesanan->rating_toko}}" value = "{{$pemesanan->rating_toko}}">
                      </div>

                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="produk_id" name = "produk_id" placeholder="{{$pemesanan->id}}" value = "{{$pemesanan->id}}">
                      </div>

                      <button type = "submit" name = "submit" class="btn btn-success" style = "margin-top:10px;margin-left:5px;"> <i class="fa fa-shopping-cart"></i> &nbsp; Masukkan Keranjang</button>


                  {{-- </form> --}}
                 
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