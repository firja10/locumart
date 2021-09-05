<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
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



    public function formproduk()
    {
        # code...
    
        $user_id = Auth::id();
        $toko = DB::table('tokos')->where('user_id', $user_id)->get();
        return view('marketplace.pemilik.store-produk', compact('toko'));

    }








    public function storeproduk(Request $request)
    {
        # code...


        $data = new Produk;
        if($request->hasFile('gambar_produk'))
        {

                $filename = $request['gambar_produk']->getClientOriginalName();

                if($data->gambar_produk)
                {
                    Storage::delete('/public/storage/Produk/'.$filename);
                }

                $request['gambar_produk']->storeAs('Produk',$filename,'public');
        }

        else {
            $filename = $data->gambar_produk;
        }


        $data->gambar_produk = $filename;
        $data->nama_produk = $request['nama_produk'];
        $data->harga_jual = $request['harga_jual'];
        $data->harga_diskon = $request['harga_diskon'];
        $data->deskripsi_produk = $request['deskripsi_produk'];
        $data->kategori = $request['kategori'];
        $data->stok_terjual = $request['stok_terjual'];
        $data->stok_sisa = $request['stok_sisa'];
        $data->rating_produk = $request['rating_produk'];
        $data->toko_id = $request['toko_id'];
        
        $data->save();
        return redirect('pemilik/store-produk')->with('store-produk','Produk Berhasil Ditambahkan');




    }









    public function berandahome()
    {
        # code...
        $produk = Produk::all();
        return view('marketplace.user.beranda', compact('produk'));
    }

    public function lihatproduk($id, Produk $produk)
    {
        # code...
        $produk = Produk::findOrFail($id);
        return view('marketplace.user.lihat-produk',compact('produk'));
        


    }


    public function masukkeranjang(Request $request)
    {
        # code...
        $data = new Pemesanan;
        if($request->hasFile('gambar_produk'))
        {

                $filename = $request['gambar_produk']->getClientOriginalName();

                if($data->gambar_produk)
                {
                    Storage::delete('/public/storage/Pemesanan/'.$filename);
                }

                $request['gambar_produk']->storeAs('Pemesanan',$filename,'public');
        }

        else {
            $filename = $data->gambar_produk;
        }


        $data->gambar_produk = $filename;
        $data->nama_toko = $request['nama_toko'];
        $data->nama_produk = $request['nama_produk'];
        $data->kategori = $request['kategori'];
        $data->jumlah_pesan = $request['jumlah_pesan'];
        $data->harga_jual = $request['harga_jual'];
        $data->harga_diskon = $request['harga_diskon'];
        $data->harga_total = $request['harga_total'];
        $data->ongkos_kirim = $request['ongkos_kirim'];
        $data->media_pengiriman = $request['media_pengiriman'];
        $data->media_pembayaran = $request['media_pembayaran'];
        $data->status_pembayaran = 1;
        $data->rating_produk = $request['rating_produk'];
        $data->rating_toko = $request['rating_toko'];
        $data->user_id = Auth::id();
        $data->produk_id = $request['produk_id'];
        $data->save();

        return redirect('keranjang')->with('success-cart','Anda Telah Menambahkan Keranjang');

    }


    public function lihatkeranjang()
    {
        # code...
        $user_id = Auth::id();
        $pemesanan = DB::table('pemesanans')->where('user_id', $user_id)->get();
        return view('marketplace.user.lihat-keranjang', compact('pemesanan'));
    }

    public function lihatkeranjangspesifik($id, Pemesanan $pemesanan)
    {
        # code...

        $pemesanan = Pemesanan::findOrFail($id);
        return view('marketplace.user.lihat-keranjang-spesifik', compact('pemesanan'));




    }










    public function pembayaran($id,Request $request, Pemesanan $pemesanan )
    {
        # code...

        $pemesanan = Pemesanan::where('id', $id)->update([
            'status_pembayaran'=>2,
        ]);
        return redirect('/keranjang/'.$request['id'])->with('update-bayar-a','Anda Harus Melakukan Pembayaran');

    }

    public function hapusbayar($id, Pemesanan $pemesanan)
    {
        # code...
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();
        return redirect('keranjang')->with('hapus-bayar','Slaah Satu Pemesanan Anda Sudah Dihapus');
    }

    protected function initPaymentGateway()
    {
        # code...


        // \Midtrans\Config::$serverKey = '<your server key>';
      
        // \Midtrans\Config::$isProduction = false;

        // \Midtrans\Config::$isSanitized = true;

        // \Midtrans\Config::$is3ds = true;



    }







}
