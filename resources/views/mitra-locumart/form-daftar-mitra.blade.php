<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Pendaftaran Mitra | Locumart</title>

  <link rel="shortcut icon" href="{{asset('logo-locumart.png')}}" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page" style="background:url('bg-masuk.png'); background-size:cover; background-repeat:no-repeat; background-color:#2c3764ff;">
<div class="register-box" style = "width:700px;">
  <div class="card card-outline card-danger">
    <div class="card-header text-center">
      {{-- <a href="{{asset('adminlte/index2.html')}}" class="h1"><b>Admin</b>LTE</a> --}}
      <a href="{{url('/')}}" class="h1">
        <img src="{{asset('logo-locumart.png')}}" alt="" style = "width:15%;">
    </a>

    </div>
    <div class="card-body" >
      {{-- <p class="login-box-msg">Register a new membership</p> --}}


      @php
      
        $user_id = Auth::user()->id;
      
        $data = DB::table('tokos')->where('user_id',$user_id)->count();
        $datas = DB::table('tokos')->where('user_id',$user_id);
        $datass = $datas->where('legal_id',1)->count();
        // $datadua = $datas->where('legal_id', 1)->first();
        $alamat_perusahaan = $mitra->lokasi_toko;
        $nama_usaha = $mitra->nama_toko;
        $kategori_usaha = $mitra->kategori_usaha;
        $nomor_rekening = $mitra->nomor_rekening;
        $jenis_bank = $mitra->jenis_bank;
        $user_id = $mitra->user_id;
        $legal_id = $mitra->legal_id;
      @endphp

       {{-- @if($data >= 1) --}}

        
   
    
        
          @if($data >= 1 && $datass== 1)
          
          <div class="col-12" style = "justify-content: center; margin-top:15px;">
   
            <center>
              <div style = "margin-top:20px;" class = " p-3 mb-2 bg-success ">
                <h2 style = "color:white;">Anda Telah Terdaftar Sebagai Mitra</h2>
            </div>

              <a href="{{url('/pemilik/riwayat-toko')}}" class="btn btn-primary" style = "margin-top:30px;" > Silakan Kunjungi Toko Anda</a>
            </center>
          </div>
          
              
          @elseif($data >= 1 && $datass == NULL)
     
          <div class="col-12" style = "justify-content: center; margin-top:15px;">
          <center>
            <div style = "margin-top:20px;" class = " p-3 mb-2 bg-warning ">
              <h2 style = "color:white;">Silakan Tunggu Konfirmasi dari Admin</h2>
          </div>

            <p style = "color:#2c3764ff"> Admin akan mengirimkan konfirmasi melalui Email bahwa anda terdaftar sebagai Mitra </p>
          
          </center>
           </div>




       
       @elseif($data == NULL || $data == 0)   
   

           <br>

      <form action="{{route('daftarmitratoko')}}" method="post" enctype="multipart/form-data" >
        {{-- @method('PATCH') --}}
        <center>
               <h1><strong>Pendaftaran Mitra </strong></h1>
          <div style = "background-color:rgba(2, 117, 216, 0.5); margin-top:50px;">
              <h2 style = "color:white;">Pengisian Biodata</h2>
          </div>

          <br>
        </center>

        @csrf
        

        <div class = "form-row">

    {{-- <label for="ttl">Nama Lengkap</label>  --}}
        <div class="input-group col mb-3">
            <br>
          <input type="text" class="form-control" placeholder="Nama Lengkap" name = "name" value = "{{$mitra->name}}">
          <input type="hidden" class="form-control"  name = "user_id" value = "{{Auth::user()->id}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group col mb-3">
          {{-- <input type="text" class="form-control" placeholder="Jenis Kelamin" name = "jenis-kelamin"> --}}
           <select name="jenis_kelamin" id="jenis_kelamin"class = "form-control">
               <option value="" selected="true" disabled="disabled">-- Jenis Kelamin --</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
           </select>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-venus-mars"></span>
            </div>
          </div>
        </div>

    </div>



    <div class = "form-row">



    {{-- <label for="ttl">Tempat, Tanggal Lahir</label>  --}}
        <div class="input-group col mb-3">
                <br>
          {{-- <input type="text" class="form-control" placeholder="Tempat Lahir" name = "tempat-lahir" id = "tempat-lahir"> --}}
            <select name="tempat_lahir" id="tempat_lahir" class = "form-control" >
                <option value="" selected="true" disabled="disabled">-- Tempat Lahir --</option>
                <option value="jakarta"> Jakarta </option>
                <option value="tasikmalaya"> Tasikmalaya </option>
            </select>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-location-arrow"></span>
            </div>
          </div>
        </div>







    
        <div class="input-group col mb-3">
          <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" id = "tanggal_lahir" value = "{{$mitra->tanggal_lahir}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-birthday-cake"></span>
            </div>
          </div>
        </div>
      </div>
      




    <div class="input-group mb-3">
      <input type="file" class="form-control" placeholder="Pas Foto" name="foto">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-birthday-cake"></span>
        </div>
      </div>
    </div>








    <div style = "background-color:rgba(2, 117, 216, 0.5);text-align:center; margin-top:50px;">
        <h2 style = "color:white;">Pengisian Kontak</h2>
    </div>
    <br>








    <div class = "form-row">

   

        {{-- <label for="ttl">Tempat, Tanggal Lahir</label>  --}}
            <div class="input-group col mb-3">
                    <br>
              <input type="number" class="form-control" placeholder="Nomor HP" name = "nomor_hp" id = "nomor_hp">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-mobile"></span>
                </div>
              </div>
            </div>
     
    
    
            <div class="input-group col mb-3">
              <input type="number" class="form-control" placeholder="Nomor Telepon Perusahaan" name="nomor_hp_toko">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>
    
        </div>







   

            {{-- <label for="ttl">Tempat, Tanggal Lahir</label>  --}}
                <div class="input-group mb-3">
                        <br>
                  <input type="email" class="form-control" placeholder="Email" name = "email" id = "email" value = "{{$mitra->email}}">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
         
        
        
                <div class="input-group mb-3">
                  {{-- <input type="number" class="form-control" placeholder="Nomor Telepon Perusahaan" name="nomor-telp-usahas">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-phone"></span>
                    </div>
                  </div> --}}

                  <textarea name="alamat" id="alamat" cols="30" rows="10" class = "form-control" placeholder = "Alamat" value = "{{$mitra->alamat}}">{{$mitra->alamat}}</textarea>

                </div>
        



                <div style = "background-color:rgba(2, 117, 216, 0.5);text-align:center; margin-top:50px;">
                    <h2 style = "color:white;">Biodata Perusahaan</h2>
                </div>
                <br>





                <div class = "form-row">

   

                    {{-- <label for="ttl">Tempat, Tanggal Lahir</label>  --}}
                        <div class="input-group col mb-3">
                                <br>
                          <input type="text" class="form-control" placeholder="Nama Usaha" name = "nama_toko" id = "nama_toko" value = "{{$mitra->nama_toko}}">
                     
                
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-location-arrow"></span>
                            </div>
                          </div>
                        </div>
                 
                
                
                        <div class="input-group col mb-3">
                          <input type="text" class="form-control" placeholder="Kategori Usaha" name="kategori_usaha" id = "kategori_usaha" value = "{{$mitra->kategori_usaha}}" >
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-folder"></span>
                            </div>
                          </div>
                        </div>
                
                    </div>


                    <div class="input-group mb-3">
                        <textarea name="alamat_perusahaan" id="alamat_perusahaan" cols="30" rows="10" class = "form-control" placeholder = "Alamat Perusahaan" >{{$mitra->alamat_perusahaan}}</textarea>
                      </div>


                      <div style = "background-color:rgba(2, 117, 216, 0.5);text-align:center; margin-top:50px;">
                        <h2 style = "color:white;">Jenis Bank</h2>
                    </div>
                    <br>


                    <div class = "form-row">

   

                      {{-- <label for="ttl">Tempat, Tanggal Lahir</label>  --}}
                          <div class="input-group col mb-3">
                                  <br>
                           
                       
                            <select class="form-control" placeholder="Jenis Bank" name = "jenis_bank" id = "jenis_bank" value = "{{$mitra->jenis_bank}}">
                              <option value="" selected="true" disabled="disabled">--Jenis Bank--</option>
                              <option value="bni">BNI</option>
                              <option value="mandiri">Mandiri</option>
                              <option value="bri">BNI</option>

                            </select>

                  
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                              </div>
                            </div>
                          </div>
                   
                  
                  
                          <div class="input-group col mb-3">
                            <input type="number" class="form-control" placeholder="Nomor Rekening" name="nomor_rekening" id = "nomor_rekening" value = "{{$mitra->nomor_rekening}}" >
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-folder"></span>
                              </div>
                            </div>
                          </div>
                  
                      </div>











        <div class="row">
          {{-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Ingat <a href="#">Saya</a>
              </label>
            </div>
          </div> --}}
          <!-- /.col -->
          <br>
   
          <div class="col-12" style = "justify-content: center; margin-top:15px;">
            <button type="submit" class="btn btn-success btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      @endif


    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
