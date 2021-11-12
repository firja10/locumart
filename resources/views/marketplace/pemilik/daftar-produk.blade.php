@extends('marketplace.template')
@section('content')

<?php 
// use App\Models\Toko;


// $toko_id = Toko::findOrFail($id);
// $product = DB::table('produks')->where('toko_id', $toko_id)->count();


?>

<div class="home-product">
  <div class="row sm-gutter">

@foreach ($produk as $produks)


<?php 

$product = $produks->count();

?>



{{-- @if ($produks == NULL || $product == 0) --}}
{{-- @if ($produks == NULL)
<br><br>


              <!-- Product -->
<div class="home-product">
<div class="row sm-gutter">
  <div class="col l-2-4 m-4 c-6">


<section style = "height:100vh; margin-top:100px; margin-bottom:100px;">
  <center>
    <h2>Mohon Maaf, produk Anda Belum Ada</h2>
  </center>
</section>
<br><br>

  </div>
</div>
</div>

@else
     --}}









              <!-- Product -->
        
                  <!-- Product item -->
          
               

      
           
                  <div class="col l-2-4 m-4 c-6">
                    <a href="#" class="home-product-item">
                      <div
                        class="home-product-item__img"
                        style="background-image: url({{asset('storage/Produk/'. $produks->gambar_produk)}});"
                      ></div>
                      <h4 class="home-product-item__name">
                      {{$produks->nama_produk}}
                      </h4>
                      <div class="home-product-item__price">
                        <span class="home-product-item__price-old"
                          >{{$produks->harga_jual}}</span
                        >
                        <span class="home-product-item__price-current"
                          >{{$produks->harga_diskon}}</span
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
                          >2000 Terjual</span
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














{{-- @endif --}}

    
@endforeach

</div>
</div>



    
@endsection