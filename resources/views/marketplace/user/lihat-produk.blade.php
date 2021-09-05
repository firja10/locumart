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
    <img src="{{asset('storage/Produk/'.$produk->gambar_produk)}}" alt="" style = "width:300px; border-radius:50px;">
</center>
</div>

       
        <div class="col-md-8">

            <br>
            <center>
                <h1 style = "text-align: center;">{{$produk->nama_produk}}</h1>
                <br>
                <p>{{$produk->kategori}}</p>
                <h5> <i class="fa fa-phone"></i> &nbsp; Nomor Handphone : {{$produk->nomor_hp_produk}} </h5>

                <h5> <i class="fas fa-location-arrow"></i> &nbsp; Harga Jual : {{$produk->harga_jual}}</h5>
               

                    <br>
                  <a href="{{route('daftarproduktoko',$produk->id)}}" class="btn btn-success" style = "margin-top:10px; margin-right:5px;"> <i class="fa fa-money-bill"></i> &nbsp; Beli Produk</a>
                 
                  <form action="{{route('masukkeranjang', $produk->id)}}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        {{-- <label for="nama_produk" class="col-form-label"> Nama Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="nama_produk" name = "nama_produk" placeholder="{{$produk->nama_produk}}" value = "{{$produk->nama_produk}}">
            
                      </div>
                      <div class="form-group">
                        {{-- <label for="kategori" class="col-form-label">Deskripsi Kelas :</label> --}}
                        {{-- <textarea class="form-control" id="kategori" name = "kategori" placeholder="{{$produk->kategori}}" value = "{{$produk->kategori}}">{{$produk->kategori}}</textarea> --}}
                        <input type="hidden" class="form-control" id="kategori" name = "kategori" placeholder="{{$produk->kategori}}" value = "{{$produk->kategori}}">
                    </div>
            
                      <div class="form-group">
                        {{-- <label for="harga_jual" class="col-form-label"> Materi Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="harga_jual" name = "harga_jual" placeholder="{{$produk->harga_jual}}" value = "{{$produk->harga_jual}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="jumlah_pesan" name = "jumlah_pesan" placeholder="{{$produk->jumlah_pesan}}" value = "{{$produk->jumlah_pesan}}">
                      </div>
            
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="harga_diskon" name = "harga_diskon" placeholder="{{$produk->harga_diskon}}" value = "{{$produk->harga_diskon}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="harga_total" name = "harga_total" placeholder="{{$produk->harga_total}}" value = "{{$produk->harga_total}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="ongkos_kirim" name = "ongkos_kirim" placeholder="{{$produk->ongkos_kirim}}" value = "{{$produk->ongkos_kirim}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="nama_toko" name = "nama_toko" placeholder="{{$produk->nama_toko}}" value = "{{$produk->nama_toko}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="media_pengiriman" name = "media_pengiriman" placeholder="{{$produk->media_pengiriman}}" value = "{{$produk->media_pengiriman}}">
                      </div>
            
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="media_pembayaran" name = "media_pembayaran" placeholder="{{$produk->media_pembayaran}}" value = "{{$produk->media_pembayaran}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="status_pembayaran" name = "status_pembayaran" placeholder="{{$produk->status_pembayaran}}" value = "{{$produk->status_pembayaran}}">
                      </div>
            
                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="rating_produk" name = "rating_produk" placeholder="{{$produk->rating_produk}}" value = "{{$produk->rating_produk}}">
                      </div>
    
                    <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="rating_toko" name = "rating_toko" placeholder="{{$produk->rating_toko}}" value = "{{$produk->rating_toko}}">
                      </div>

                      <div class="form-group">
                        {{-- <label for="jumlah_pesan" class="col-form-label"> Tanggal Kelas : </label> --}}
                        <input type="hidden" class="form-control" id="produk_id" name = "produk_id" placeholder="{{$produk->id}}" value = "{{$produk->id}}">
                      </div>

                      <button type = "submit" name = "submit" class="btn btn-success" style = "margin-top:10px;margin-left:5px;"> <i class="fa fa-shopping-cart"></i> &nbsp; Masukkan Keranjang</button>


                  </form>
                 
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