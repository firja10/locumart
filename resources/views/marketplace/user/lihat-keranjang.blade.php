<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marketplace</title>
    <link rel="shortcut icon" href="{{asset('marketplace/logo-locumart.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('shopeeclone/assets/css/base.css')}}" />
    <link rel="stylesheet" href="{{asset('shopeeclone/assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('shopeeclone/assets/css/grid.css')}}" />
    <link rel="stylesheet" href="{{asset('shopeeclone/assets/css/responsive.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css')}}"
    />

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
         






            <ul class="header__navbar-list">
              <li
                class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate"
              >
   Profil Anda
                <!-- Header QR Code -->
                <div class="header__qr">
                  <img
                    src="./assets/img/qr_code.png"
                    alt="QR Code"
                    class="header__qr-img"
                  />
                  <div class="header__qr-apps">
                    <a href="" class="header__qr-link">
                      <img
                        src="./assets/img/google_play.png"
                        alt="Google Play"
                        class="header__qr-download-img"
                      />
                    </a>
                    <a href="" class="header__qr-link">
                      <img
                        src="./assets/img/appstore.png"
                        alt="App Store"
                        class="header__qr-download-img"
                      />
                    </a>
                  </div>
                </div>
              </li>
              <li class="header__navbar-item">
                <span class="header__navbar-title--no-pointer">Sosial Media Anda</span>

                <a href="" class="header__navbar-icon-link">
                  <i class="header__navbar-icon fab fa-facebook"></i>
                </a>
                <a href="" class="header__navbar-icon-link">
                  <i class="header__navbar-icon fab fa-instagram"></i>
                </a>
              </li>
            </ul>
            <ul class="header__navbar-list">
              <li class="header__navbar-item">
                <a href="{{url('/pemilik/riwayat-toko')}}" class="header__navbar-item-link">
                  {{-- <i class="header__navbar-icon far fa-question-circle"></i> --}}
                  <i class="header__navbar-icon fas fa-funnel-dollar"></i>

                Toko Saya
                </a>
              </li>
              <li class="header__navbar-item">
                <a href="" class="header__navbar-item-link">
                  <i class="header__navbar-icon far fa-question-circle"></i>

                  FAQ
                </a>
              </li>

              <li class="header__navbar-item">
                <a href="" class="header__navbar-item-link">
                  <i class="header__navbar-icon fas fa-home"></i>

                  Home
                </a>
              </li>
              <!-- <li
                class="header__navbar-item header__navbar-item--strong header__navbar-item--separate"
              >
                Đăng ký
              </li>
              <li class="header__navbar-item header__navbar-item--strong">
                Đăng Nhập
              </li> -->






              {{-- <li class="header__navbar-item header__navbar-user">
                <img
                  src="./assets/img/user_avatar.png"
                  alt=""
                  class="header__navbar-user-img"
                />
                <span class="header__navbar-user-name">
                  Tín Phạm
                </span>
                <ul class="header__navbar-user-menu">
                  <li class="header__navbar-user-item">
                    <a href="">Tài khoản của tôi</a>
                  </li>
                  <li class="header__navbar-user-item">
                    <a href="">Địa chỉ của tôi</a>
                  </li>
                  <li class="header__navbar-user-item">
                    <a href="">Đơn mua</a>
                  </li>
                  <li
                    class="header__navbar-user-item header__navbar-user-item--separate"
                  >
                    <a href="">Đăng xuất</a>
                  </li>
                </ul>
              </li> --}}
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
                src="{{asset('marketplace/logo-locumart.png')}}"
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
                    <li style = "display:inline; float:left;"> <strong><a href="" style = "color:white; text-decoration:none; ">Rangginang</a> </strong></li>
                    <li style = "display:inline; float:left; margin-left:10px;"> <strong><a href="" style = "color:white; text-decoration:none; ">Dodol Garut</a> </strong></li>
                    <li style = "display:inline; float:left; margin-left:10px;"> <strong><a href="" style = "color:white; text-decoration:none; ">Kelom Geulis</a> </strong></li>
                    <li style = "display:inline; float:left; margin-left:10px;"> <strong><a href="" style = "color:white; text-decoration:none; ">Wayang Cepot</a> </strong></li>
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

                echo $hitung;  ?>



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
                    Chưa có sản phẩm
                  </span>
                  <!-- Hascart -->
                  <h4 class="header__cart-heading">Cek Keranjang</h4>
                  <!-- Cart item -->
                  <ul class="header__cart-list-item">



                    @foreach ($pesanan as $item)
                    <li class="header__cart-item">
                      <img
                        src="{{asset('storage/Pemesanan/'.$item->gambar_produk)}}"
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
                  <a href="{{url('/keranjang')}}" class="header__cart-view-cart btn btn--primary"
                    >Lihat Riwayat Pesanan</a
                  >
                </div>
              </div>
            </div>


            @if(Auth::check())
            <span style = "color:white;font-size:15px; margin-right:5px; text-decoration:none;"> <b>{{Auth::user()->name}}</b></span>   
           
           <a style = "color:white;font-size:15px; margin-left:5px; text-decoration:none;"  href="{{ route('logout') }}" id = "keluar"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>

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


      <div class="app__container">
        <div class="grid wide">
          <div class="row sm-gutter app__content">
            <!-- Category -->
      



                  </div>
             </div>



              <!-- Mobile Category -->
              <nav class="mobile-category">
                <ul class="mobile-category__list">
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                  <li class="mobile-category__item">
                    <a href="#" class="mobile-category__link">Kategori A</a>
                  </li>
                </ul>
              </nav>



 <!-- PERHATIKAN BAIK2 ! -->


 <br> <br>



 <!-- PERHATIKAN BAIK2 JUGA ! -->




















              <!-- Product -->
              <div class="home-product">
                <div class="row sm-gutter">
                  <!-- Product item -->

                  @foreach ($pemesanan as $produks)
                  <div class="col l-2-4 m-4 c-6">
                    <a href="{{route('lihatkeranjangspesifik', $produks->id)}}" class="home-product-item">
                      <div
                        class="home-product-item__img"
                        style="background-image: url(https://img.tickid.vn/photos/resized/320x320/83-1580888419-myphamohui-lgvina.png')}});"
                      ></div>
                      <h4 class="home-product-item__name">
                        {{$produks->nama_produk}}
                      </h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"
                          >Rp. {{$produks->harga_jual}}</span
                        >
                        <span class="home-product-item__price-current"
                          >Rp. {{$produks->harga_diskon}}</span
                        >
                      </div>
                      <div class="home-product-item__action">
                        <span
                          class="home-product-item__like home-product-item__like--liked"
                        >
                          <i
                            class="home-product-item__like-icon-empty far fa-heart"
                          ></i>
                          <i
                            class="home-product-item__like-icon-fill fas fa-heart"
                          ></i>
                        </span>
                        <div class="home-product-item__rating">
                          <i
                            class="home-product-item__star--gold fas fa-star"
                          ></i>
                          <i
                            class="home-product-item__star--gold fas fa-star"
                          ></i>
                          <i
                            class="home-product-item__star--gold fas fa-star"
                          ></i>
                          <i
                            class="home-product-item__star--gold fas fa-star"
                          ></i>
                          <i class="fas fa-star"></i>
                        </div>
                        <div class="home-product-item__sold">Rating Pelanggan</div>
                      </div>
                      <div class="home-product-item__origin">
                        <span class="home-product-item__brand">Whoo</span>
                        <span class="home-product-item__origin-name"
                          >{{$produks->kategori}}</span
                        >
                      </div>
                      <div class="home-product-item__favourite">
                        <i class="fas fa-check "></i>
                        <span>Terbatas</span>
                      </div>
                      <div class="home-product-item__sale-off">
                        <span class="home-product-item__sale-off-percent"
                          >43%</span
                        >
                        <span class="home-product-item__sale-off-label"
                          >OFF</span
                        >
                      </div>
                    </a>
                  </div>
                  @endforeach
            
                  

             

                 
                </div>
              </div>
              <ul class="pagination home-product__pagination">
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-left"></i>
                  </a>
                </li>
                <li class="pagination-item pagination-item--active">
                  <a href="" class="pagination-item__link">1</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">2</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">3</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">4</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">5</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">...</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">14</a>
                </li>
                <li class="pagination-item">
                  <a href="" class="pagination-item__link">
                    <i class="pagination-item__icon fas fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="grid wide footer__content">
          <div class="row">
            <div class="col l-4-8 m-4 c-8">
              <h3 class="footer__heading">LOCUMART PRESENT</h3>
              <span class="footer__text">Memberi Pelayanan Terbaik untuk Kita Semua</span>
              {{-- <ul class="footer-list">
                <li class="footer-item">
                  <a href="#" class="footer-item__link">Trung Tâm Trợ Giúp</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-item__link">Hướng Dẫn Mua Hàng</a>
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-item__link"
                    >Chính Sách Vận Chuyển</a
                  >
                </li>
              </ul> --}}

            </div>

            {{-- <div class="col l-2-4 m-4 c-6">
      
            </div>
            <div class="col l-2-4 m-4 c-6">
        
            </div>--}}
            <div class="col l-4-8 m-4 c-8">
              <h3 class="footer__heading">Tentang Kami</h3>

              <span class="footer__text" style = "text-align:center;"> Alamat Kami : <br> Cibeureum, Kota Tasikmalaya, Jawa Barat  </span>

            </div> 


            <div class="col l-4-8 m-4 c-8">
              <h3 class="footer__heading">Sosial Media Kami</h3>
              <ul class="footer-list">
                <li class="footer-item">
                  <a href="#" class="footer-item__link">
                    <i class="footer-item__icon fab fa-facebook-square"></i>
                    Facebook</a
                  >
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-item__link">
                    <i class="footer-item__icon fab fa-instagram-square"></i>
                    Instagram</a
                  >
                </li>
                <li class="footer-item">
                  <a href="#" class="footer-item__link">
                    <i class="footer-item__icon fab fa-linkedin"></i>
                    Linkedin</a
                  >
                </li>
              </ul>


            </div>


          </div>
        </div>
        <div class="footer__bottom" style = "background-color:#972A29;">
          <div class="grid wide">
            <p class="footer__text" style = "color:white;">
            <b>© 2021 Locumart PRESENT</b>  
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
                <h3 class="auth-form__heading">Đăng ký</h3>
                <span class="auth-form__switch-btn">Đăng nhập</span>
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
                    placeholder="Mật khẩu"
                  />
                </div>
                <div class="auth-form__group">
                  <input
                    type="password"
                    class="auth-form__input"
                    placeholder="Nhập lại mật khẩu"
                  />
                </div>
              </div>
              <div class="auth-form__aside">
                <p class="auth-form__policy-text">
                  Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                  <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>
                  &
                  <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                </p>
              </div>
              <div class="auth-form__controls">
                <button class="btn auth-form__controls-back btn--normal">
                  TRỞ LẠI
                </button>
                <button class="btn btn--primary">ĐĂNG KÝ</button>
              </div>
            </div>
            <div class="auth-form__socials">
              <a
                href=""
                class="auth-form__socials--facebook btn btn--size-s btn--with-icon"
              >
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title"
                  >Kết nối với Facebook</span
                >
              </a>
              <a
                href=""
                class="auth-form__socials--google btn btn--size-s btn--with-icon"
              >
                <i class="auth-form__socials-icon fab fa-google"></i>
                <span class="auth-form__socials-title">Kết nối với Google</span>
              </a>
            </div>
          </div> -->
      <!-- Login Form -->
      <!-- <div class="auth-form">
            <div class="auth-form__container">
              <div class="auth-form__header">
                <h3 class="auth-form__heading">Đăng nhập</h3>
                <span class="auth-form__switch-btn">Đăng ký</span>
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
                    placeholder="Mật khẩu"
                  />
                </div>
              </div>
              <div class="auth-form__aside">
                <div class="auth-form__help">
                  <a href="" class="auth-form__help-link auth-form__help-forgot">
                    Quên mật khẩu
                  </a>
                  <span class="auth-form__help-separate"></span>
                  <a href="" class="auth-form__help-link">
                    Cần trợ giúp?
                  </a>
                </div>
              </div>
              <div class="auth-form__controls">
                <button class="btn auth-form__controls-back btn--normal">
                  TRỞ LẠI
                </button>
                <button class="btn btn--primary">ĐĂNG NHẬP</button>
              </div>
            </div>
            <div class="auth-form__socials">
              <a
                href=""
                class="auth-form__socials--facebook btn btn--size-s btn--with-icon"
              >
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title"
                  >Kết nối với Facebook</span
                >
              </a>
              <a
                href=""
                class="auth-form__socials--google btn btn--size-s btn--with-icon"
              >
                <i class="auth-form__socials-icon fab fa-google"></i>
                <span class="auth-form__socials-title">Kết nối với Google</span>
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  </body>
</html>
