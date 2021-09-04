<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $toko = Toko::all();
        return view('marketplace.pemilik.daftar-toko',compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('marketplace.pemilik.daftar-toko');
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
        $data = new Toko;
        if($request->hasFile('gambar_toko'))
        {

                $filename = $request['gambar_toko']->getClientOriginalName();

                if($data->gambar_toko)
                {
                    Storage::delete('/public/storage/Toko/'.$filename);
                }

                $request['gambar_toko']->storeAs('Toko',$filename,'public');
        }

        else {
            $filename = $data->gambar_toko;
        }


        $data->gambar_toko = $filename;
        $data->nama_toko = $request['nama_toko'];
        $data->lokasi_toko = $request['lokasi_toko'];
        $data->deskripsi_toko = $request['deskripsi_toko'];
        $data->nomor_hp_toko = $request['nomor_hp_toko'];
        $data->rating_toko = $request['rating_toko'];
        $data->save();
        return redirect('/pemilik/daftar-toko')->with('store-toko','Anda Berhasil Menambahkan Toko');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko, $id)
    {
        //
        $toko = Toko::findOrFail($id);
        return view('marketplace.pemilik.edit-toko',compact('toko'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(Toko $toko, $id)
    {
        //
        $toko = Toko::findOrFail($id);
        return view('marketplace.pemilik.edit-toko',compact('toko'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toko $toko, $id)
    {
        //
        
        if($request->hasFile('gambar_toko')){
            $filename = $request["gambar_toko"]->getClientOriginalName();

            if( Toko::find($id)->gambar_toko ){
                Storage::delete('/public/storage/Toko/'.Toko::find($id)->gambar_toko);
            }
            $request["gambar_toko"]->storeAs('Toko', $filename, 'public');
        }else{
            $filename=Toko::find($id)->gambar_toko;
        }

    $toko = Toko::where('id', $id)->update([

            'gambar_toko' => $filename,
            // 'gambar_toko' => $request['gambar_toko'],
            'nama_toko' => $request['nama_toko'],
            'lokasi_toko' => $request['lokasi_toko'],
            'nomor_hp_toko' => $request['nomor_hp_toko'],
            'deskripsi_toko'=> $request['deskripsi_toko'],
            'rating_toko' => $request['rating_toko'],
        ]);

        return redirect('/pemilik/daftar-toko')->with('sukses-update-toko','Toko Anda Sudah Berhasil diupdate');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $toko, $id)
    {
        //

        $toko = Toko::findOrFail($id);
        $toko->delete();
        return redirect('marketplace.pemilik.edit-toko')->with('hapus-toko','Toko Berhasil Dihapus');
    }
}
