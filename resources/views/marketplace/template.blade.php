<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('judul')</title>
    <link rel="shortcut icon" href="{{asset('logo-locumart.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('shopeeclone/assets/css/base.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('shopeeclone/assets/css/main.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('shopeeclone/assets/css/grid.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('shopeeclone/assets/css/responsive.css')}}" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />

    @yield('scriptatas')
    @yield('style')


    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="{{asset('shopeeclone/assets/fonts/fontawesome-free-5.12.1-web/css/all.min.css')}}"
    />



    <style>
















        * {box-sizing: border-box}
        /* body {font-family: Verdana, sans-serif; margin:0} */
        .mySlides {display: none}
        .gambar-slide {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          max-width: 1000px;
          position: relative;
          margin: auto;
        }
        
        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }
        
        /* Position the "next button" to the right */
        .next {
          right: 0;
          border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active, .dot:hover {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
        }

        @media (max-width:1000px)
        {
          #headerdua {
            display: none;
          }
        }

        </style>







  </head>
  <body style = "margin:0;">
    <div class="app">
      <header class="header">
        <div class="grid wide">
          <nav class="header__navbar hide-on-mobile-tablet">
         




            <ul class="header__navbar-list" >
              <li
                class="header__navbar-item header__navbar-item--has-qr "
              >
              <strong>
                Download Aplikasi Locumart
              </strong>
            
                <!-- Header QR Code -->
                <div class="header__qr">
                  {{-- <img
                    src="./assets/img/qr_code.png"
                    alt="QR Code"
                    class="header__qr-img"
                  /> --}}
                  <div class="header__qr-apps">
                    <a href="" class="header__qr-link">
                      <img
                      src="{{url('google-play.png')}}"
                        alt="Google Play"
                        class="header__qr-download-img"
                      />
                      Google Play
                    </a>
                    <a href="" class="header__qr-link">
                      <img
                        src="{{url('app-store.png')}}"
                        alt="App Store"
                        class="header__qr-download-img"
                      />
                      App Store

                    </a>
                  </div>
                </div>
              </li>
              {{-- <li class="header__navbar-item">
                <span class="header__navbar-title--no-pointer">Sosial Media Anda</span>

                <a href="" class="header__navbar-icon-link">
                  <i class="header__navbar-icon fab fa-facebook"></i>
                </a>
                <a href="" class="header__navbar-icon-link">
                  <i class="header__navbar-icon fab fa-instagram"></i>
                </a>
              </li> --}}
            </ul>

            <ul class="header__navbar-list" >
              <li class="header__navbar-item">
                <a href="{{url('/pemilik/riwayat-toko')}}" class="header__navbar-item-link" style = "text-decoration: none;">
                  {{-- <i class="header__navbar-icon far fa-question-circle"></i> --}}
                  <i class="header__navbar-icon fas fa-funnel-dollar"></i>

                Toko Saya
                </a>
              </li>
              <li class="header__navbar-item">
                <a href="{{url('/tentang-locumart/deskripsi')}}" class="header__navbar-item-link" style = "text-decoration: none;">
                  <i class="header__navbar-icon far fa-question-circle"></i>

                  Tentang Locumart
                </a>
              </li>

              <li class="header__navbar-item">
                <a href="{{url('/mitra-locumart/home')}}" class="header__navbar-item-link" style = "text-decoration: none;">
                  <i class="header__navbar-icon fa fa-users"></i>

                  Mitra Locumart
                </a>
              </li>
            </ul>













          
          </nav>
          <br>
          <!-- Header with Search -->
          <div class="header-with-search">
            <label for="mobile-search-checkbox" class="header__mobile-search">
              <i class="header__mobile-search-icon fas fa-search"></i>
            </label>

            <!-- Header Logo -->
            <div class="header__logo hide-on-tablet">
              <a href="/" class="header__logo-link">

                <img
                src="{{asset('logo-locumart.png')}}"
                alt="Logo Locumart"
                class="header__logo-img" 
              />

              </a>
            </div>
            <input
              type="checkbox"
              hidden
              id="mobile-search-checkbox"
              class="header__search-checkbox"
            />
            <!-- Header Search -->
            <div class="header__search ">
              <div class="header__search-input-wrap">
                <input
                  type="text"
                  class="header__search-input"
                  placeholder="Silakan Cari Produk Anda"
                />
                <ul>
                  <?php 
                    
                  $pesansering = DB::table('produks')->paginate(4);

                  ?>
                    {{-- <li style = "display:inline; float:left;"> <strong><a href="" style = "color:white; text-decoration:none; ">Rangginang</a> </strong></li>
                    <li style = "display:inline; float:left; margin-left:10px;"> <strong><a href="" style = "color:white; text-decoration:none; ">Dodol Garut</a> </strong></li>
                    <li style = "display:inline; float:left; margin-left:10px;"> <strong><a href="" style = "color:white; text-decoration:none; ">Kelom Geulis</a> </strong></li>
                    <li style = "display:inline; float:left; margin-left:10px;"> <strong><a href="" style = "color:white; text-decoration:none; ">Wayang Cepot</a> </strong></li> --}}
 
                    @foreach ($pesansering as $item)
                    <li style = "display:inline; float:left; margin-left:10px;"> <strong><a href="" style = "color:white; text-decoration:none; "> {{$item->nama_produk}} </a> </strong></li>
                    @endforeach

                  </ul>
                <!-- Search history -->
                <div class="header__search-history">
                  <h3 class="header__search-history-heading">
                    Pencarian 1 
                  </h3>
                  <ul class="header__search-history-list">
                    <li class="header__search-history-item">
                      <a href="">Pencarian 1 </a>
                    </li>
                    <li class="header__search-history-item">
                      <a href="">Pencarian 1 </a>
                    </li>
                  </ul>
                </div>
              </div>
   
              <button class="header__search-btn">
                <i class="header__search-btn-icon fas fa-search"></i>
              </button>
            </div>
            <br>


            <!-- Cart layout -->
            <div class="header__cart">
              <div class="header__cart-wrap">
                <i class="header__cart-icon fas fa-shopping-cart"></i>
                <span class="header__cart-notice">

                  <?php 
                  $user_id = Auth::id();
                  $hitung = DB::table('pemesanans')->where('user_id',$user_id)->count();
                  $pesanan = DB::table('pemesanans')->where('user_id',$user_id)->get();
                 echo $hitung;  ?> </span>

                </span>
                <!-- No cart : header__cart-list--no-cart -->

                <div class="header__cart-list ">
                  <!-- Nocart -->
                  <img
                    src="{{asset('shopeeclone/assets/img/no-cart.png')}}"
                    alt="No Cart"
                    class="header__cart-no-cart-img"
                  />
                  <span class="header__cart-list-no-cart-msg">
                    {{-- Ch??a c?? s???n ph???m --}}
                  </span>
                  <!-- Hascart -->
                  <h4 class="header__cart-heading">Cek Keranjang</h4>
                  <!-- Cart item -->
                  <ul class="header__cart-list-item">


                    @foreach ($pesanan as $item)
                    <li class="header__cart-item">
                      <img
                        src="{{asset('storage/Produk/'.$item->gambar_produk)}}"
                        alt=""
                        class="header__cart-img"
                      />
                      <div class="header__cart-item-info">
                        <div class="header__cart-item-head">
                          <h5 class="header__cart-item-name">
                          {{$item->nama_produk}}
                          </h5>
                          <div class="header__cart-item-price-wrap">
                            <span class="header__cart-item-price"
                              >Rp.{{$item->harga_jual}}</span
                            >
                            <span class="header__cart-item-multiply">x</span>
                            <span class="header__cart-item-qnt">2</span>
                          </div>
                        </div>
                        <div class="header__cart-item-body">
                          <span class="header__cart-item-description"
                            >{{$item->kategori}}</span
                          >
                          <span class="header__cart-item-remove">Selesaikan Pembayaran</span>
                        </div>
                      </div>
                    </li>
                    @endforeach
                   
                

                  </ul>
                  <a href="#" class="header__cart-view-cart btn btn--primary"
                    >Lihat Riwayat Pesanan</a
                  >
                </div>
              </div>
            </div>

            @if(Auth::check() && Auth::user()->hasVerifiedEmail() )


            <div class="dropdown">
              <button style = "font-size:15px;" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->name}}
                &nbsp;
               
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @if(Auth::user()->is_admin == 1)
                <a href="{{url('/admin-home')}}" class = "dropdown-item"> Admin Page</a>
                @endif
                <a  href="{{ route('logout') }}" id = "keluar"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class = "dropdown-item">Logout</a>
              </div>
            </div>


<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>

            @else
            <span> <b> <a href="{{url('/login')}}" style = "color:white;font-size:15px; margin-right:5px; text-decoration:none;"> Masuk</a> <a  style = "color:white;font-size:15px;">|</a>  <a href="{{url('/register')}}" style = "color:white;font-size:15px;margin-left:5px;text-decoration:none;"> Daftar</a></b>
            </span>       
            @endif
          </div>
        </div>
     
      </header>


     @yield('content')






      <!-- Footer -->
      <footer class="footer">
        <div class="grid wide footer__content">
          <div class="row">
            <div class="col l-2-4 m-2 c-4" style = "text-align: center">
              <h3 class="footer__heading">LOCUMART PRESENT</h3>
              <span class="footer__text">#solusiprodukkreatifnusantara</span>
              {{-- <ul class="footer-list">
                <li class="footer-item">
                  <a href="#" class="footer-item__link">Trung T??m Tr??? Gi??p</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-item__link">H?????ng D???n Mua H??ng</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-item__link"
                    >Ch??nh S??ch V???n Chuy???n</a
                  >
                </li>
              </ul> --}}

            </div>

            {{-- <div class="col l-2-4 m-4 c-6">
      
            </div>
            <div class="col l-2-4 m-4 c-6">
        
            </div>--}}
            <div class="col l-2-4 m-2 c-4" style = "text-align: center">
              <h3 class="footer__heading">Pembayaran :</h3>
              
              <div 
              {{-- style = "text-align: center" --}}
              >
                <img src="{{url('assets/pembayarans.png')}}" alt="" style = "width:150px;">
              </div>
              {{-- <span class="footer__text" style = "text-align:center;"> Alamat Kami : <br> Cibeureum, Kota Tasikmalaya, Jawa Barat  </span> --}}

              <br>
              <br>

        

            </div> 




            <div class="col l-2-4 m-2 c-4" style = "text-align: center">
              <h3 class="footer__heading">Mitra Kami</h3>
{{-- 
              <span class="footer__text" style = "text-align:center;"> Alamat Kami : <br> Kota Tasikmalaya, Jawa Barat  </span> --}}
              <div 
              {{-- style = "text-align: center" --}}
              >
                <img src="{{url('marketplace/mitra-pendukung.png')}}" alt="" style = "width:150px;">
              </div>

            </div> 




            


            <div class="col l-2-4 m-2 c-4" style = "text-align: center">
              <h3 class="footer__heading">Sosial Media Kami</h3>
              <center>

          
              <ul class="footer-list" style = "text-align: center; display:flex; justify-content:center;">
                <li class="footer-item" style = "display:inline-block; justify-content:center;" >
                  <a href="#" class="footer-item__link">
                    <i class="footer-item__icon fab fa-facebook-square"></i>
                    {{-- Facebook --}}
                    </a
                  >
                </li>
                <li class="footer-item" style = "display:inline-block;justify-content:center;">
                  <a href="#" class="footer-item__link">
                    <i class="footer-item__icon fab fa-instagram-square"></i>
                    {{-- Instagram --}}
                    </a
                  >
                </li>
                <li class="footer-item" style = "display:inline-block; justify-content:center;">
                  <a href="#" class="footer-item__link">
                    <i class="footer-item__icon fab fa-linkedin"></i>
                    {{-- Linkedin --}}
                    </a
                  >
                </li>
              </ul>
            </center>

            </div>

            <div class="col l-2-4 m-2 c-4" style = "text-align: center">
              <h3 class="footer__heading">Pengantaran :</h3>

              {{-- <span class="footer__text" style = "text-align:center;"> Alamat Kami : <br> Cibeureum, Kota Tasikmalaya, Jawa Barat  </span> --}}
              <div 
              {{-- style = "text-align: center" --}}
              >
                <img src="{{url('assets/pengantarans.png')}}" alt="" style = "width:150px;">
              </div>
            </div> 





          </div>
        </div>
        <div class="footer__bottom" style = "background-color:#E4C752">
          <div class="grid wide">
            <p class="footer__text" style = "color:#2C3764;">
            <b>?? 2021 Locumart PRESENT</b>  
            </p>
          </div>
        </div>
      </footer>


      <!-- Modal Layout -->
      <!-- <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body"> -->
      <!-- Register Form -->
      <!-- <div class="auth-form">
            <div class="auth-form__container">
              <div class="auth-form__header">
                <h3 class="auth-form__heading">????ng k??</h3>
                <span class="auth-form__switch-btn">????ng nh???p</span>
              </div>
              <div class="auth-form__form">
                <div class="auth-form__group">
                  <input
                    type="text"
                    class="auth-form__input"
                    placeholder="Email"
                  />
                </div>
                <div class="auth-form__group">
                  <input
                    type="password"
                    class="auth-form__input"
                    placeholder="M???t kh???u"
                  />
                </div>
                <div class="auth-form__group">
                  <input
                    type="password"
                    class="auth-form__input"
                    placeholder="Nh???p l???i m???t kh???u"
                  />
                </div>
              </div>
              <div class="auth-form__aside">
                <p class="auth-form__policy-text">
                  B???ng vi???c ????ng k??, b???n ???? ?????ng ?? v???i Shopee v???
                  <a href="" class="auth-form__text-link">??i???u kho???n d???ch v???</a>
                  &
                  <a href="" class="auth-form__text-link">Ch??nh s??ch b???o m???t</a>
                </p>
              </div>
              <div class="auth-form__controls">
                <button class="btn auth-form__controls-back btn--normal">
                  TR??? L???I
                </button>
                <button class="btn btn--primary">????NG K??</button>
              </div>
            </div>
            <div class="auth-form__socials">
              <a
                href=""
                class="auth-form__socials--facebook btn btn--size-s btn--with-icon"
              >
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title"
                  >K???t n???i v???i Facebook</span
                >
              </a>
              <a
                href=""
                class="auth-form__socials--google btn btn--size-s btn--with-icon"
              >
                <i class="auth-form__socials-icon fab fa-google"></i>
                <span class="auth-form__socials-title">K???t n???i v???i Google</span>
              </a>
            </div>
          </div> -->
      <!-- Login Form -->
      <!-- <div class="auth-form">
            <div class="auth-form__container">
              <div class="auth-form__header">
                <h3 class="auth-form__heading">????ng nh???p</h3>
                <span class="auth-form__switch-btn">????ng k??</span>
              </div>
              <div class="auth-form__form">
                <div class="auth-form__group">
                  <input
                    type="text"
                    class="auth-form__input"
                    placeholder="Email"
                  />
                </div>
                <div class="auth-form__group">
                  <input
                    type="password"
                    class="auth-form__input"
                    placeholder="M???t kh???u"
                  />
                </div>
              </div>
              <div class="auth-form__aside">
                <div class="auth-form__help">
                  <a href="" class="auth-form__help-link auth-form__help-forgot">
                    Qu??n m???t kh???u
                  </a>
                  <span class="auth-form__help-separate"></span>
                  <a href="" class="auth-form__help-link">
                    C???n tr??? gi??p?
                  </a>
                </div>
              </div>
              <div class="auth-form__controls">
                <button class="btn auth-form__controls-back btn--normal">
                  TR??? L???I
                </button>
                <button class="btn btn--primary">????NG NH???P</button>
              </div>
            </div>
            <div class="auth-form__socials">
              <a
                href=""
                class="auth-form__socials--facebook btn btn--size-s btn--with-icon"
              >
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title"
                  >K???t n???i v???i Facebook</span
                >
              </a>
              <a
                href=""
                class="auth-form__socials--google btn btn--size-s btn--with-icon"
              >
                <i class="auth-form__socials-icon fab fa-google"></i>
                <span class="auth-form__socials-title">K???t n???i v???i Google</span>
              </a>
            </div>
          </div> -->
      <!-- </div>
      </div> -->
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
        {{-- @yield('script') --}}

    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  </body>
</html>
