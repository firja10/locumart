<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('marketplace.dashboard');
});

Route::get('/home', function () {
    return view('marketplace.home');
});

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