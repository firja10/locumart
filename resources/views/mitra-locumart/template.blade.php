<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('marketplace/logo-locumart.png')}}" rel="icon">
  <link href="{{asset('marketplace/logo-locumart.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


  @yield('style')


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top "  style = "background-color:#BC1823;" >
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{url('/mitra-locumart/home')}}">Mitra Locu</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{url('/mitra-locumart/mulai-berjualan')}}">Mulai Berjualan</a></li>
          <li><a href="{{url('/mitra-locumart/business-upgrading')}}">Business Upgrading</a></li>
          <li><a href="{{url('/mitra-locumart/crowdfunding')}}">Crowdfunding</a></li>
          <li><a href="{{url('/mitra-locumart/survey')}}">Survey</a></li>
          <li style = "display: inline-flex"><a href="{{url('/login')}}">Masuk</a> <a href="">&nbsp; | &nbsp;</a>  <a href="{{url('/register')}}">Daftar</a> </li>
          {{-- <li style = "display: inline-flex"><a href="#contact">Masuk</a> <a href="">&nbsp; | &nbsp;</a>  <a href="">Daftar</a> </li> --}}

        </ul>
      </nav><!-- .nav-menu -->
{{-- 
<a href="#about" class="get-started-btn scrollto">Get Started</a> --}}

    </div>
  </header><!-- End Header -->


      @yield('content')



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style = "margin-top:0%;">



    <div class="footer-top" style = "background-color:rgba(40, 58, 90); ">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style = "color:white;">Locumart</h3>
            <p style = "color:#fff;" >
              Berusaha Memberikan <br>
              yang terbaik<br>
            {{-- United States <br><br> --}}

            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
           
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
           
        </div>


        <div class="col-lg-3 col-md-6 footer-links">
            <center>
            <h4 style = "color:#fff;" >Sosial Media Kami</h4>

            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </center>
          </div>

        </div>
      </div>
    </div>

    <center>
    <div class="container footer-bottom clearfix">
      <div class="copyright" style = "text-align: center;">
        &copy; Copyright <strong><span>Locumart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

      </div>
    </div>
</center>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>