@extends('marketplace.template')

@section('judul')
Halaman Home Admin
@endsection

@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection


@section('content')

<section id = "admin-home" style = " margin-right:10px; margin-left:10px; margin-top:50px; margin-bottom:150px; ">
<br><br>

<div class="container">
    <div class="row" style="">
    

        <h2>Halaman Admin - List Toko</h2>

        <table class="table table-dark" style = "font-size:15px;">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Usaha</th>
                <th scope="col">Pemilik</th>
                <th scope="col">Email</th>
                <th scope="col">Deskripsi Usaha</th>
                <th scope="col">Kategori Usaha</th>
                <th scope="col">Lokasi Usaha</th>
                <th scope="col">Jenis Bank</th>
                <th scope="col">Nomor Rekening</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($toko as $mitra)
                    
 
              <tr>
                <th scope="row">1</th>
                <td>{{$mitra->nama_toko}}</td>
                <td>{{$mitra->name}}</td>
                <td>{{$mitra->email}}</td>
                <td>{{$mitra->deskripsi_toko}}</td>
                <td>{{$mitra->kategori_usaha}}</td>
                <td>{{$mitra->lokasi_usaha}}</td>
                <td>{{$mitra->jenis_bank}}</td>
                <td>{{$mitra->nomor_rekening}}</td>
                <td>

                @if($mitra->legal_id == NULL || $mitra->legal_id == 0 )
                    <form action="{{route('veriftoko', $mitra->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <button href="" class="btn btn-warning " style = "padding-top:5px; font-size:15px; font-weight:bold"> Verifikasi </button>
                    </form>
                
                    
                @elseif($mitra->legal_id == 1)
                <button href="" class="btn btn-success " style = "padding-top:5px; font-size:15px; font-weight:bold"> Telah Terverifikasi </button>
                @endif
                  
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>







    
    
    </div>
</div>


</section>

    
@endsection