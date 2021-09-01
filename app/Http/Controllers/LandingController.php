<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Toko;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    //
    public function home()
    {
        # code...
        return view('marketplace.home');

    }

    public function landing()
    {
        # code...
        return view('marketplace.home');
    }


    public function daftartokouser()
    {
        # code...
        $user_id = Auth::id();
        $toko = DB::table('tokos')->where('user_id', $user_id)->get();
        return view('marketplace.pemilik.riwayat-toko', compact('user_id','toko'));

    }



    public function daftarproduktoko($id, Toko $toko)
    {
        # code...
        $produk = new Produk;
        $toko = Toko::findOrFail($id);
        // $produk = DB::table('produks')->where('toko_id',$toko->id)->get();
        $data = $produk->where('toko_id',$toko->id)->get();
        return view('marketplace.pemilik.riwayat-produk',compact('produk','data'));


    }



}
