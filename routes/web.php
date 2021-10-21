<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\ProdukController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('marketplace.dashboard');
// });



Route::get('/dashboard', function () {
    return view('marketplace.dashboard');
});


// Route::get('/temp', function () {
//     return view('marketplace.template');
// });

Route::get('/daftar-produk',[LandingController::class,'daftarprodukberanda'])->name('daftarprodukberanda');










// Route::get('/', function () {
//     return view('marketplace.home');
// });

// Route::get('/home', function () {
//     return view('marketplace.home');
// });

Route::get('/home',[LandingController::class,'home'])->name('home');

Route::get('/',[LandingController::class,'landing'])->name('landing');
Route::get('/pemilik/riwayat-toko',[LandingController::class,'daftartokouser'])->name('daftartokouser')->middleware('auth');



// Halaman Common 
Route::get('/beranda',[LandingController::class,'berandahome'])->name('berandahome');
Route::get('/produk/{id}',[LandingController::class,'lihatproduk'])->name('lihatproduk');



// Halaman User 
Route::get('/keranjang/{id}',[LandingController::class,'lihatkeranjangspesifik'])->name('lihatkeranjangspesifik');
Route::get('/bayar',[LandingController::class,'initPaymentGateway'])->name('initPaymentGateway')->middleware('auth');

// Route::get('home/searchkategori',[LandingController::class,'searchkategori'])->name('searchkategori');
Route::get('/home/searchkategori','App\Http\Controllers\LandingController@searchkategori')->middleware('auth');


// Halaman Pemilik 

Route::resource('/pemilik/daftar-toko', TokoController::class)->middleware('auth');
Route::resource('/pemilik/daftar-produk', ProdukController::class)->middleware('auth');
Route::get('/pemilik/riwayat-toko',[LandingController::class,'daftartokouser'])->name('daftartokouser')->middleware('auth');
Route::get('/pemilik/riwayat-produk/{id}',[LandingController::class,'daftarproduktoko'])->name('daftarproduktoko')->middleware('auth');
Route::get('/pemilik/store-produk',[LandingController::class,'formproduk'])->name('formproduk')->middleware('auth');

Route::get('tambah-ongkir',[LandingController::class,'ongkir'])->name('ongkir')->middleware('auth');







// Route::get('cekongkir','LandingController@homecekongkir');
Route::get('cekongkir/{id}',[LandingController::class,'homecekongkir'])->name('homecekongkir');
Route::post('cek-ongkir', [LandingController::class,'cek_ongkir'])->name('cek.ongkir');
Route::get('get-kota/{q?}', [LandingController::class,'get_kota'])->name('get.kota');
Route::patch('cekongkir/{id}', [LandingController::class,'update_jasa'])->name('update_jasa');
// Route::post('cek-ongkir', ['uses'=>'LandingController@cek_ongkir', 'as'=>'cek.ongkir']);
// Route::get('get-kota/{q?}', ['uses'=>'LandingController@get_kota', 'as'=>'get.kota']);

Route::get('tagihan-anda', [LandingController::class,'daftartagihan'])->name('daftartagihan')->middleware('auth');
Route::get('tagihan-anda/{id}', [LandingController::class,'daftartagihanspesifik'])->name('daftartagihanspesifik')->middleware('auth');

Route::get('rating-pesanan/{id}', [LandingController::class,'ratingpesanan'])->name('ratingpesanan')->middleware('auth');
Route::patch('rating-pesanan/{id}', [LandingController::class,'updaterating'])->name('updaterating')->middleware('auth');










Route::post('/pemilik/store-produk',[LandingController::class,'storeproduk'])->name('storeproduk')->middleware('auth');


Route::get('/keranjang',[LandingController::class,'lihatkeranjang'])->name('lihatkeranjang')->middleware('auth');

Route::post('/keranjang/{id}',[LandingController::class,'masukkeranjang'])->name('masukkeranjang')->middleware('auth');
Route::patch('/keranjang/{id}',[LandingController::class,'pembayaran'])->name('pembayaran')->middleware('auth');


Route::delete('keranjang/{id}', [LandingController::class,'hapusbayar'])->name('hapusbayar')->middleware('auth');
Route::delete('pemilik/daftar-produk/{id}',[LandingController::class,'hapusproduk'])->name('hapusproduk')->middleware('auth');




Route::get('/tentang-locumart/deskripsi', function () {
    return view('tentang-locumart/deskripsi');
});

Route::get('/tentang-locumart/nilai-unggul', function () {
    return view('tentang-locumart/nilai-unggul');
});

Route::get('/tentang-locumart/media-locu', function () {
    return view('tentang-locumart/media-locu');
});

Route::get('/tentang-locumart/partnership', function () {
    return view('tentang-locumart/partnership');
});

Route::get('/mitra-locumart/home', function () {
    return view('mitra-locumart/home');
});

Route::get('/mitra-locumart/mulai-berjualan', function () {
    return view('mitra-locumart/mulai-berjualan');
});

Route::get('/mitra-locumart/business-upgrading', function () {
    return view('mitra-locumart/business-upgrading');
});

Route::get('/mitra-locumart/crowdfunding', function () {
    return view('mitra-locumart/crowdfunding');
});

Route::get('/mitra-locumart/survey', function () {
    return view('mitra-locumart/survey');
});

Route::get('/login', function () {
    return view('pages/auth/login');
});

Route::get('/register', function () {
    return view('pages/auth/register');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//HALAMAN ADMIN
// Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
