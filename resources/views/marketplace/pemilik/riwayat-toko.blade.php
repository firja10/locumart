@extends('marketplace.template')

@section('judul')
 Riwayat Toko Anda   
@endsection



@section('style')
 {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  --}}

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body {
        background-color:aliceblue;
    }

    @media only screen and (max-width:900px){
        section {
            margin-top:150px;
        }
    }



    #tombol-lihat-pesanan{
  background-color: #2C3764;
  color:#FBE177;
  font-size:15px;
  font-weight: 600;
  margin-top:10px;
}

#tombol-lihat-pesanan:active{
  background-color:#FBE177;
  color:#2C3764;
  font-size:15px;
  font-weight: 600;
  margin-top:10px;
}















#tombol-submit{
  background-color: #2C3764;
  color:#FBE177;
  font-size:15px;
  font-weight: 600;
  margin-bottom:20px;
}

#tombol-submit:active{
  background-color:#FBE177;
  color:#2C3764;
  font-size:15px;
  font-weight: 600;
  margin-bottom:20px;
}

* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  /* border: 2px solid #ccc; */
  background-color: #2C3764;
  width: 30%;
  border-radius:20px;
  /* height: 250px; */
  height: 100%;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  /* color: black; */
  color:white;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  /* background-color: #ddd; */
  background-color: #FF9C34;
  color:black;
}

/* Create an active/current "tab button" class */
.tab button.active {
  /* background-color: #ccc; */
  background-color: #FBE177;
  color:black;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  /* border: 2px solid #ccc; */
  width: 60%;
  border-radius: 20px;
  /* border-left: none; */
  height: 100%;
  margin-left:40px;

}

label{
color:#2C3764;
font-weight: 600;
font-size: 15px;
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
        <h1 style = "text-align: center; font-size:30px;"> <strong>Toko Anda</strong> </h1>
    </center>
 <br>
 <br>


    <div class="row" class = "mt-4" style=" background-color:aliceblue; border-radius:40px;">


        




@foreach ($toko as $tokos)




{{-- <div class="col-md-4" style = "margin-top:40px; margin-bottom:40px; ">
  <center>
  <img src="{{asset('storage/Toko/'.$tokos->gambar_toko)}}" alt="" style = "width:300px; border-radius:50px;">
</center>
</div> --}}

{{-- 
<div class="col-md-8" style = "margin-top:40px; margin-bottom:40px; color:#ffff ">

  <br>
  <center>
      <h1 style = "text-align: center;">{{$tokos->nama_toko}}</h1>
      <br>
      <span style = "font-size:20px; margin-bottom:15px;">{{$tokos->deskripsi_toko}}</span>
      <br>
      <h3 style = "margin-top:20px;"> <i class="fa fa-phone"></i> &nbsp; Nomor Handphone : {{$tokos->nomor_hp_toko}} </h3>

      <h3> <i class="fas fa-location-arrow"></i> &nbsp; Lokasi : {{$tokos->lokasi_toko}}</h3>
      <h3><i class="fa fa-university"></i> &nbsp; Jenis Bank : {{$tokos->jenis_bank}}</h3>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style = "margin-top:10px;">
          <i class = "fa fa-edit" aria-hidden="true"></i>  Edit Toko 
          </button>
          <br>
        <a href="{{route('daftarproduktoko',$tokos->id)}}" class="btn btn-success" style = "margin-top:10px; padding-top:10px; text-align:center;">Daftar Produk</a>

  </center>
  <br>



</div> --}}




<br><br><br>


<div class="tab" style = "border-radius:10px;">
  <button class="tablinks" onclick="openCity(event, 'profil_pribadi')" id="defaultOpen"> <i class = "fa fa-user" ></i>&nbsp; &nbsp;Profil Pribadi</button>
  <button class="tablinks" onclick="openCity(event, 'profil_perusahaan')"> <i class = "fa fa-university" ></i>&nbsp; &nbsp;Profil Perusahaan</button>
  <button class="tablinks" onclick="openCity(event, 'bio_toko')"> <i class = "fa fa-list"></i>&nbsp;&nbsp;Pesanan Saya</button>
  <button class="tablinks" onclick="openCity(event, 'tambah_produk')"> <i class = "fa fa-plus" ></i> &nbsp;Tambah Produk</button>
</div>

<div id="profil_pribadi" class="tabcontent row" style = "padding:40px; background-color:#FBE177" >

  <form method="POST" enctype="multipart/form-data" action = "{{route('updateprofil', $tokos->id)}}" >
    @csrf
    @method('PATCH')

    <?php  
    // echo $tokos->id; 
    ?>

  <table>
    
      <tbody>
        <tr>
          <td style = "padding:15px; text-align:left;"> 
            
            {{-- <h3> <img src="{{asset('storage/Toko/'.$tokos->gambar_toko)}}" alt="" style = "width:120px; border-radius:50px;"></h3>
            <br>
            <span>Ganti Gambar</span>
            <br>
            <input type="file" class = "form-control" placeholder = "Ganti Gambar" > --}}


      
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;" value = "{{$tokos->name}}" name = "name">
                
              </div>



              <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                {{-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;"> --}}

                <select name="jenis_kelamin" id="" class = "form-control" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;" name = "jenis_kelamin" >
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
                
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" style = "background-color: #FBE177; border-color:#2C3764 ; font-size:10px; font-weight:bold;" value = "{{$tokos->alamat}}" name = "alamat">  
              </div>

              



          </td>


          <td style = "padding:15px; text-align:left;"> 
        
              <div class="form-group">
                <label for="exampleInputPassword1">Nomor HP</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor HP" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; " value = "{{$tokos->nomor_hp}}" name = "nomor_hp" >
                
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1">Alamat Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; " value = "{{$tokos->email}}" name = "email">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Tempat Lahir</label>
                {{-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; width:110%;" value = "{{$tokos->tempat_lahir}}"> --}}
                <select name="tempat_lahir" id="" class = "form-control" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;" value = "{{$tokos->tanggal_lahir}}" >
                  <option value="tasikmalaya">Tasikmalaya</option>
                  <option value="jakarta">Jakarta</option>
                </select>
              </div>
   
         

          </td>

          <td style = "padding:15px; text-align:left;"> 
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Lahir</label>
              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; width:110%;" value = "{{$tokos->tanggal_lahir}}" name = "tanggal_lahir">
            </div>


           <div class="form-group">
                <label for="exampleInputPassword1">Jenis Bank</label>
                {{-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; width:110%;" value = "{{$tokos->tempat_lahir}}"> --}}
                <select name="jenis_bank" id="" class = "form-control" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;" >
                  <option value="bni">BNI</option>
                  <option value="mandiri">Mandiri</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Nomor Rekening</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Rekening" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; width:110%;" value = "{{$tokos->nomor_rekening}}" name = "nomor_rekening">
              </div>
  


          </td>

   



          {{-- <td style = "padding:10px;">    <p>Locumart merupakan sebuah </p></td> --}}
        </tr>
        
      </tbody>
 
  </table>
  <center>
    <button type = "submit" class = "btn" id = "tombol-submit"> Ubah Profil </button>
  </center>
  </form>

</div>




<div id="profil_perusahaan" class="tabcontent"  style = "padding:40px; background-color:#FBE177">
  
  <form method="POST" action = "{{route('updatetoko', $tokos->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
  <table>
    
    <tbody>
      <tr>
        <td style = "padding:15px; text-align:left;"> 
          
          {{-- <h3> <img src="{{asset('storage/Toko/'.$tokos->gambar_toko)}}" alt="" style = "width:120px; border-radius:50px;"></h3>
          <br>
          <span>Ganti Gambar</span>
          <br>
          <input type="file" class = "form-control" placeholder = "Ganti Gambar" > --}}


            <div class="form-group">
              <label for="exampleInputEmail1">Nama Perusahaan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;" value = "{{$tokos->nama_toko}}" name = "nama_toko">
              
            </div>



            <div class="form-group">
              <label for="exampleInputEmail1">Kategori Usaha</label>
              {{-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;"> --}}

              <select name="kategori_usaha" id="" class = "form-control" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;" value = {{$tokos->kategori_usaha}}>
                <option value="makanan">Makanan</option>
                <option value="kesenian">Kesenian</option>
                <option value="kebutuhan">Kebutuhan</option>
              </select>
              
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Alamat Perusahaan</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" style = "background-color: #FBE177; border-color:#2C3764 ; font-size:10px; font-weight:bold;" value = "{{$tokos->lokasi_toko}}" name = "lokasi_toko">  
            </div>

            



        </td>


        <td style = "padding:15px; text-align:left;"> 
            <div class="form-group">
              <label for="exampleInputPassword1">Nomor Telepon Perusahaan</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; " value = "{{$tokos->nomor_hp_toko}}" name = "nomor_hp_toko" >
            </div>


            <div class="form-group">
              <label for="exampleInputPassword1">Deskripsi Singkat Perusahaan</label>
              {{-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; " value = "{{$tokos->email}}">
               --}}
              <textarea name="deskripsi_toko" id="" cols="5" rows="5" class = "form-control" style = "background-color: #FBE177; border-radius:15px; border-color:#2C3764; color:#2C3764; font-weight:600">{{$tokos->deskripsi_toko}}</textarea>
              </div>

           


        </td>

        <td style = "padding:15px; text-align:left;"> 
          <div class="form-group">
           <h3> <img src="{{asset('storage/Toko/'.$tokos->gambar_toko)}}" alt="" style = "width:120px; border-radius:50px;"></h3>
          </div>


         <div class="form-group">
              <label for="exampleInputPassword1">Foto Perusahaan</label>
              <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Foto" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; width:110%;" value = "{{$tokos->gambar_toko}}" name = "gambar_toko">
             
            </div>



        </td>



        {{-- <td style = "padding:10px;">    <p>Locumart merupakan sebuah </p></td> --}}
      </tr>
    </tbody>
  </table>

  <center>
    <button type = "submit" class = "btn" id = "tombol-submit"> Ubah Profil Toko </button>
  </center>

  </form>


</div>

<div id="bio_toko" class="tabcontent" style = "background-color: #FBE177; padding:50px;">
 <?php
   $jumlah = DB::table('pemesanans')->where('user_id', Auth::user()->id)->count();
  ?>
  <center>
  <h2 style = "color: #2C3764; font-weight:600">Pesanan Anda yaitu berjumlah <?php echo $jumlah  ?>  </h2>
  <span style = "color: #2C3764; font-weight:400">Silakan jika anda ingin melihat sebagian pesanan anda yang lain</span> 
  <br>
  <a class = "btn" id = "tombol-lihat-pesanan" href=""> Lihat Pesanan </a>
</center>

</div>

<div id="tambah_produk" class="tabcontent" style = "background-color: #FBE177; padding:40px;">
 
  <table>
    
    <tbody>
      <tr>
        <td style = "padding:15px; text-align:left;"> 
          
          {{-- <h3> <img src="{{asset('storage/Toko/'.$tokos->gambar_toko)}}" alt="" style = "width:120px; border-radius:50px;"></h3>
          <br>
          <span>Ganti Gambar</span>
          <br>
          <input type="file" class = "form-control" placeholder = "Ganti Gambar" > --}}


          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Produk</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mama Produk" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;" name = "nama_produk">
              
            </div>



            <div class="form-group">
              <label for="exampleInputEmail1">Kategori Produk</label>
              {{-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;"> --}}

              <select name="jenis_kelamin" id="" class = "form-control" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold;" >
                <option value="makanan">Makanan</option>
                <option value="kesenian">Kesenian</option>
                <option value="kesehatan">Kesehatan</option>
              </select>
              
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Harga Jual</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Jual Produk" style = "background-color: #FBE177; border-color:#2C3764 ; font-size:10px; font-weight:bold;" name = "harga_jual">  
            </div>

            


          </form>

        </td>


        <td style = "padding:15px; text-align:left;"> 
          <form>
            <div class="form-group">
              <label for="exampleInputPassword1">Harga Diskon</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Diskon Produk" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; "  name = "harga_diskon" >
              
            </div>


            <div class="form-group">
              <label for="exampleInputPassword1">Stok Terjual</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok Terjual Produk" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; " name = "stok_terjual">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Stok Sisa</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok Sisa Produk" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; " name = "stok_sisa">
            </div>

   
 
          </form>

        </td>

        <td style = "padding:15px; text-align:left;"> 
         
          

          <div class="form-group">
            <h3> <img src="{{asset('keranjang.png')}}" alt="" style = "width:120px;"></h3>
           </div>
 
 
          <div class="form-group">
               <label for="exampleInputPassword1">Foto Produk</label>
               <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Foto Produk" style = "background-color: #FBE177; border-color:#2C3764; font-size:10px; font-weight:bold; width:110%;" name = "gambar_produk">
              
             </div>


         
        



        </td>

 



        {{-- <td style = "padding:10px;">    <p>Locumart merupakan sebuah </p></td> --}}
      </tr>
      
    </tbody>

</table>
<center>
  <button class = "btn" id = "tombol-submit"> Tambah Produk </button>
</center>





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