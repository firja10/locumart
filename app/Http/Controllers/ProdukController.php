<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Toko;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = Produk::all();
        return view('marketplace.pemilik.daftar-produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('marketplace.pemilik.daftar-produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        
        $data->save();
        // return redirect('pemilik/riwayat-produk/'.$request['toko_id'])->with('store-produk','Produk Berhasil Ditambahkan');
        return redirect('pemilik/riwayat-toko')->with('store-produk','Produk Berhasil Ditambahkan');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk, $id)
    {
        //
        $produk = Produk::findOrFail($id);
        return view('marketplace.pemilik.edit-produk', compact('produk'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk, $id)
    {
        //
        $produk = Produk::findOrFail($id);
        return view('marketplace.pemilik.edit-produk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk, $id)
    {
        //

        if($request->hasFile('gambar_produk')){
            $filename = $request["gambar_produk"]->getClientOriginalName();

            if( Produk::find($id)->gambar_produk ){
                Storage::delete('/public/storage/Toko/'.Produk::find($id)->gambar_produk);
            }
            $request["gambar_produk"]->storeAs('Toko', $filename, 'public');
        }else{
            $filename=Produk::find($id)->gambar_produk;
        }

    $produk = Produk::where('id', $id)->update([

            'gambar_produk' => $filename,
            // 'gambar_produk' => $request['gambar_produk'],
            'nama_toko' => $request['nama_toko'],
            'lokasi_toko' => $request['lokasi_toko'],
            'nomor_hp_toko' => $request['nomor_hp_toko'],
            'rating_toko' => $request['rating_toko'],
        ]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk, $id)
    {
        //

        $produk = Produk::findOrFail($id);
        $produk->delete();
        return view('marketplace.pemilik.daftar-produk', compact('produk'));

    }
}
