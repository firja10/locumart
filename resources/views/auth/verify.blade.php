<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Registration | Locumart</title>

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
<body class="hold-transition register-page" style="background:url('bg-masuk.png'); background-size:cover; background-repeat:no-repeat; background-color:#2C3764;">
<div class="register-box">
  <div class="card card-outline card-danger">

      {{-- <p class="login-box-msg">Register a new membership</p> --}}

      <div class="card">
        <div class="card-header">
            Verifikasi Email Anda
        </div>
        <div class="card-body">
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                Verifikasi Yang Lain Telah Dikirimkan.
            </div>
        @endif
        <p class="card-text">
      Silakan Verifikasi Terlebih Dahulu Email Anda.
      Jika Belum Menerima Email, </p>
      <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Klik Link ini untuk Request Lain</button>.
    </form>
          {{-- <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
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
