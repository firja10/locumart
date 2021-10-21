@extends('./marketplace/template')

@section('judul')
    Daftar Produk
@endsection


@section('content')

<div class="app__container"  >
    <div class="grid wide">
      <div class="row sm-gutter app__content" style = "position: relative; margin-top:5px;z-index:1;a  ">
        <!-- Category -->
      
       



          <!-- Mobile Category -->
          <nav class="mobile-category">
            <ul class="mobile-category__list">
              <li class="mobile-category__item">
                <a href="#" class="mobile-category__link">Makanan</a>
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




<!-- PERHATIKAN BAIK2 JUGA ! -->




















          <!-- Product -->
          <div class="home-product" id = "makanan" class = "kategori">
            <div class="row sm-gutter">

              

              @foreach ($produks as $item)
                 <!-- Product item -->
                 <td>
                 <div class="col l-2-4 m-4 c-6">
                  <a href="{{route('lihatproduk', $item->id)}}" class="home-product-item">
                    <div
                      class="home-product-item__img"
                      {{-- style="background-image: url(https://img.tickid.vn/photos/resized/320x320/83-1580888419-myphamohui-lgvina.png')}});" --}}
                      style="background-image: url({{asset('storage/Produk/'. $item->gambar_produk)}});"
                      ></div>
                    <h4 class="home-product-item__name">
                      {{$item->nama_produk}}
                    </h4>
                    <div class="home-product-item__price">
                      <?php 
                       $angka = $item->harga_jual;
                       $angka_diskon = $item->harga_diskon;
                       $harga_sell = number_format($angka,2,',','.');
                       $harga_diskon = number_format($angka_diskon,2,',','.');

                        ?>
                      <span class="home-product-item__price-old"
                        >Rp. <?php echo $harga_sell;  ?></span
                      >
                      <span class="home-product-item__price-current"
                        >Rp. <?php echo $harga_diskon;  ?></span
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
                        >{{$item->stok_terjual}} Terjual</span
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
              </td>
              @endforeach

            </div>
          </div>





  











          {{-- <ul class="pagination home-product__pagination">
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
          </ul> --}}











        </div>
      </div>
    </div>
  </div>







    
@endsection