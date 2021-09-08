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
    <section id = "daftar-produk" style = " margin-right:10px; margin-left:10px; margin-top:50px; margin-bottom:150px; ">

<br><br>



<div class="container">

    <center>
        <h1 style = "text-align: center;">Form Pengisian Produk</h1>
    </center>
 <br>
 <br>


    <div class="row" class = "mt-4">


        <div class="col-md-12">


            
            <form action = "{{route('storeproduk')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="nama_produk" class="col-form-label"> Nama produk : </label>
                <input type="text" class="form-control" id="nama_produk" name = "nama_produk">
              </div>
              <div class="form-group">
                <label for="deskripsi_produk" class="col-form-label">Deskripsi produk :</label>
                <textarea class="form-control" id="deskripsi_produk" name = "deskripsi_produk"></textarea>
              </div>


              <div class="form-group">
                <label for="kategori" class="col-form-label">Kategori : </label>
                <input type="number" class="form-control" id="kategori" name = "kategori">
              </div>


              <div class="form-group">
                <label for="harga_jual" class="col-form-label">Harga Jual : </label>
                <input type="number" class="form-control" id="harga_jual" name = "harga_jual">
              </div>


              <div class="form-group">
                <label for="harga_diskon" class="col-form-label">Harga Diskon : </label>
                <input type="number" class="form-control" id="harga_diskon" name = "harga_jual">
              </div>

              <div class="form-group">
                <label for="nomor_hp_produk" class="col-form-label"> Nomor HP produk : </label>
                <input type="number" class="form-control" id="nomor_hp_produk" name = "nomor_hp_produk">
              </div>

              <div class="form-group">
                  <label for="toko_id" class="col-form-label">Nama Toko</label>
                  <select name="toko_id" id="toko_id" class = "form-control">
                    <option aria-disabled="true" >-- Silakan Pilih Toko dari Produk Ini --</option>
                      @foreach ($toko as $store)
                     
                          <option value="{{$store->id}}">{{$store->nama_toko}}</option>
                      @endforeach
                     
                  </select>
              </div>


              <div class="form-group">
            <label for="gambar_produk" class="col-form-label"> Gambar produk : </label>
                <input type="file" class="form-control" id="gambar_produk" name = "gambar_produk">
              </div>

              <br><br>
              <center>
                <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
              </center>
            

            </form>






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