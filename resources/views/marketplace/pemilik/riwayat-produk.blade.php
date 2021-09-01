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

    <div class="float-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style = "margin-top:10px;">
         <i class = "fa fa-plus"></i>    Tambah Data
          </button>
    </div><br> <br>

    <center>
        <h1 style = "text-align: center;">Daftar produk Anda</h1>
    </center>
 <br>
 <br>


    <div class="row" class = "mt-4">


        




@foreach ($data as $produks)
<div class="col-md-3">
    <div class="card" style="width: 20rem;">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <img src="{{asset('storage/Produk/'.$produks->gambar_produk)}}" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{$produks->nama_produk}}</h5>
          <p class="card-text">{{$produks->deskripsi_produk}}</p>
         
          {{-- <span id="rateMe1"></span> --}}

          <center>

            <p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </p>
             


            <a href="{{route('daftar-produk.edit', $produks->id)}}" class="btn btn-primary" style = "text-align:center;">Lihat Produk</a>
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
        


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            





            <form action = "{{route('daftar-produk.store')}}" method = "POST" enctype="multipart/form-data">
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
                <label for="harga_jual" class="col-form-label">Harga Jual : </label>
                <input type="text" class="form-control" id="harga_jual" name = "harga_jual">
              </div>

              <div class="form-group">
                <label for="nomor_hp_produk" class="col-form-label"> Nomor HP produk : </label>
                <input type="number" class="form-control" id="nomor_hp_produk" name = "nomor_hp_produk">
              </div>


              <div class="form-group">
            <label for="gambar_produk" class="col-form-label"> Gambar produk : </label>
                <input type="file" class="form-control" id="gambar_produk" name = "gambar_produk">
              </div>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>

            </form>















        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
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