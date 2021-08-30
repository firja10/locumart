<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemesanan = Pemesanan::all();
        return view('marketplace.daftar-pemesanan',compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('marketplace.daftar-pemesanan');
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

        $data = new Pemesanan;

        if($request->hasFile('gambar_produk')){
            $filename = $request["gambar_produk"]->getClientOriginalName();

            if( $data->gambar_produk ){
                Storage::delete('/public/storage/Pemesanan/'.$filename);
            }
            $request["gambar_produk"]->storeAs('Pemesanan', $filename, 'public');
        }else{
            $filename=$data->gambar_produk;
        }


        $data->gambar_produk = $filename;
        $data->nama_produk = $request['nama_produk'];
        $data->deskripsi_Pemesanan = $request['deskripsi_Pemesanan'];
        $data->kategori = $request['kategori'];
        $data->harga_jual = $request['harga_jual'];
        $data->jumlah_pesan = $request['jumlah_pesan'];
        $data->harga_jual = $request['harga_jual'];
        $data->jumlah_pesan = $request['jumlah_pesan'];
        $data->harga_diskon = $request['harga_diskon'];
        $data->harga_total = $request['harga_total'];
        $data->ongkos_kirim = $request['ongkos_kirim'];
        $data->nama_toko = $request['nama_toko'];
        $data->media_pengiriman = $request['media_pengiriman'];
        $data->media_pembayaran = $request['media_pembayaran'];
        $data->status_pembayaran = $request['status_pembayaran'];
        $data->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan, $id)
    {
        //
        $pemesanan = Pemesanan::findOrFail($id);
        return view('marketplace.edit-daftar-pemesanan', compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
