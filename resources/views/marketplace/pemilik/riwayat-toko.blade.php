@extends('marketplace.template')

@section('judul')
 Riwayat Toko Anda   
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
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style = "margin-top:10px;">
         <i class = "fa fa-plus"></i>    Tambah Data
          </button> --}}
    </div><br> <br>

    <center>
        <h1 style = "text-align: center;">Toko Anda</h1>
    </center>
 <br>
 <br>


    <div class="row" class = "mt-4" style=" background-color:#2C3764; border-radius:40px;">


        




@foreach ($toko as $tokos)




<div class="col-md-4" style = "margin-top:40px; margin-bottom:40px; ">
  <center>
  <img src="{{asset('storage/Toko/'.$tokos->gambar_toko)}}" alt="" style = "width:300px; border-radius:50px;">
</center>
</div>


<div class="col-md-8" style = "margin-top:40px; margin-bottom:40px; color:#ffff ">

  <br>
  <center>
      <h1 style = "text-align: center;">{{$tokos->nama_toko}}</h1>
      <br>
      <p>{{$tokos->deskripsi_toko}}</p>
      <h3> <i class="fa fa-phone"></i> &nbsp; Nomor Handphone : {{$tokos->nomor_hp_toko}} </h3>

      <h3> <i class="fas fa-location-arrow"></i> &nbsp; Lokasi : {{$tokos->lokasi_toko}}</h3>
      <h3><i class="fa fa-university"></i> &nbsp; Jenis Bank : {{$tokos->jenis_bank}}</h3>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style = "margin-top:10px;">
          <i class = "fa fa-edit" aria-hidden="true"></i>  Edit Toko 
          </button>
          <br>
        <a href="{{route('daftarproduktoko',$tokos->id)}}" class="btn btn-success" style = "margin-top:10px; padding-top:10px; text-align:center;">Daftar Produk</a>

  </center>
  <br>



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
          <h3 class="modal-title" id="exampleModalLabel">Modal title</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            





            <form action = "{{route('daftar-toko.store')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="nama_toko" class="col-form-label"> Nama Toko : </label>
                <input type="text" class="form-control" id="nama_toko" name = "nama_toko">
              </div>
              <div class="form-group">
                <label for="deskripsi_toko" class="col-form-label">Deskripsi Toko :</label>
                <textarea class="form-control" id="deskripsi_toko" name = "deskripsi_toko"></textarea>
              </div>

              <div class="form-group">
                <label for="lokasi_toko" class="col-form-label">Alamat Toko : </label>
                <input type="text" class="form-control" id="lokasi_toko" name = "lokasi_toko">
              </div>

              <div class="form-group">
                <label for="nomor_hp_toko" class="col-form-label"> Nomor HP Toko : </label>
                <input type="number" class="form-control" id="nomor_hp_toko" name = "nomor_hp_toko">
              </div>


              <div class="form-group">
            <label for="gambar_toko" class="col-form-label"> Gambar Toko : </label>
                <input type="file" class="form-control" id="gambar_toko" name = "gambar_toko">
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