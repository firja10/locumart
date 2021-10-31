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
use Kavist\RajaOngkir\RajaOngkir;
use Midtrans\Snap;
use Illuminate\Support\Facades\Mail;


class LandingController extends Controller
{
    //

    public function daftarprodukberanda()
    {
        # code...
        $hitung = DB::table('produks')->count();
        $produks = Produk::all();
        return view('marketplace/daftar-produk',compact('produks', 'hitung'));
    }


    public function home()
    {
        # code...
        $produks = Produk::all();
        return view('marketplace.home', compact('produks'));

    }

    public function landing()
    {
        # code...
        $produks = Produk::all();
        return view('marketplace.home', compact('produks'));
    }


    public function daftartokouser()
    {
        # code...
        $user_id = Auth::user()->id;
        // $toko = DB::table('tokos')->where('user_id', $user_id)->get();
                $toko = DB::table('tokos')->where('user_id', $user_id)->paginate(1);
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


    public $snapToken;
  
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
        // if($request->hasFile('gambar_produk'))
        // {

        //         $filename = $request['gambar_produk']->getClientOriginalName();

        //         if($data->gambar_produk)
        //         {
        //             Storage::delete('/public/storage/Pemesanan/'.$filename);
        //         }

        //         $request['gambar_produk']->storeAs('Pemesanan',$filename,'public');
        // }

        // else {
        //     $filename = $data->gambar_produk;
        // }


        // $data->gambar_produk = $filename;
        $data->gambar_produk = $request['gambar_produk'];
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
        // $data->tanggal_lahir = $request['tanggal_lahir'];
        $data->user_id = Auth::id();
        $data->produk_id = $request['produk_id'];
        $data->save();

        return redirect('keranjang')->with('success-cart','Anda Telah Menambahkan Keranjang');

    }








    public function doCheckout()
    {
        # code...

        



    }





















    public function lihatkeranjang()
    {
        # code...
        $user_id = Auth::id();
        $pemesanan = DB::table('pemesanans')->where('user_id', $user_id)->get();

        return view('marketplace.user.lihat-keranjang', compact('pemesanan'));
    }



    public function lakukanpembayaran($id, Pemesanan $pemesanan)
    {
        # code...
        $user_id = Auth::id();
        $pemesanan = Pemesanan::where('user_id', $user_id)->update([
            'status_pembayaran' =>3,
        ]);

        return redirect('/keranjang/' . $pemesanan->id)->with('sudah-lakukan-bayar',' Segera Lakukan Pembayaran ');

    }





    public function lihatkeranjangspesifik($id, Pemesanan $pemesanan)
    {
        # code...

        $pemesanan = Pemesanan::findOrFail($id);
        $user_name = Auth::user()->name;
        $nama_lengkap = explode(' ',$user_name);
        // $nama_akhir = explode(' ',$user_name);
        // $nama_awal = $nama_lengkap[0];
        // $nama_akhir = $nama_lengkap[1];
        $user_email = Auth::user()->email;


        // if($pemesanan->status_pembayaran == 1)
        // {
            
        // }
        

            // Set your Merchant Server Key
  \Midtrans\Config::$serverKey = 'SB-Mid-server-JZ5ljmFCHcN1xo_JDqkrOs5a';
  // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
  \Midtrans\Config::$isProduction = false;
  // Set sanitization on (default)
  \Midtrans\Config::$isSanitized = true;
  // Set 3DS transaction for credit card to true
  \Midtrans\Config::$is3ds = true; 








  $params = array(   
    'transaction_details' => array(    
            'order_id' => rand(),
        //  'order_id' => $id,    
            'gross_amount' => 10000,    ),  
             'customer_details' => array(       
                  'first_name' => 'Saudara',
                  'last_name' => $user_name,
                   'email' => $user_email,
                   'phone' => '087847972064',    ),
                 ); 
                  $snapToken = \Midtrans\Snap::getSnapToken($params);










  if(isset($_GET['result_data']))
  {
    //   $current_status = json_decode($_GET['result_data'], true);
    $current_status = json_decode($_GET['result_data'], true);
    dd($current_status);
    //   $order_id = $current_status['order_id'];
    //   $pemesanan = Pemesanan::where('id',$order_id)->first();
    //   $pemesanan->status_pembayaran = 3;
    //   $pemesanan->update();
    // $pemesanan = Pemesanan::where('id',$order_id)->first();
    // $pemesanan->update([
    //     'status_pembayaran' => 3,
    // ]);
 
  }
  else {
      $pemesanan = Pemesanan::findOrFail($id);
  }


// if($pemesanan->status_pembayaran == 2)
// {

  
 

// }


// elseif($pemesanan->status_pembayaran == 3)
// {
    // $status = \Midtrans\Transaction::status($pemesanan->id);
    // $status = json_decode(json_decode($status), true);
    // $va_number = $status['va_numbers'][0]['va_number'];
    // $grouss_amount = $status['grouss_amount'];
    // $bank = $status['va_numbers'][0]['bank'];
    // $transaction_status = $status['transaction_status'];
    // $transaction_time = $status['transaction_time'];
    // $deadline = date('Y-m-d H:i:s', strtotime('+1 day', strtotime($transaction_time)));
// }

  





           


        return view('marketplace.user.lihat-keranjang-spesifik', compact('pemesanan', 'snapToken'));




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


    public function initPaymentGateway()
    {
        # code...


  // Set your Merchant Server Key
  \Midtrans\Config::$serverKey = 'SB-Mid-server-JZ5ljmFCHcN1xo_JDqkrOs5a';
  // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
  \Midtrans\Config::$isProduction = false;
  // Set sanitization on (default)
  \Midtrans\Config::$isSanitized = true;
  // Set 3DS transaction for credit card to true
  \Midtrans\Config::$is3ds = true; 
  $params = array(   
       'transaction_details' => array(    
               'order_id' => rand(),    
               'gross_amount' => 10000,    ),  
                'customer_details' => array(       
                     'first_name' => 'budi',
                     'last_name' => 'pratama',
                      'email' => 'fairuzfirjatullah3@gmail.com',
                      'phone' => '08111222333',    ),); 
                     $snapToken = \Midtrans\Snap::getSnapToken($params);
                    dd($snapToken);
                    // return view('marketplace.user.bayar', compact('snapToken'));
                    // return view('marketplace.lihat-produk');


    }


    public function hapusproduk($id, Produk $produk, Request $request)
    {
        # code...
        

        $produk = Produk::findOrFail($id);
        return redirect('/pemilik/riwayat-produk/' . $request['toko_id'])->with('hapus-produk','Produk Anda Sudah Terhapus');

    }




    private $apikey = '68c70149d6d8d491948b6762b75edd22';
    // public $provinsi_id, $kota_id, $jasa, $daftarProvinsi, $daftarKota, $nama_jasa;
    public function ongkir()
    {


        // if($this->kota_id || $this->provinsi_id || $this->jasa){
        //     return;
        // }

        # code...
        $rajaOngkir = new RajaOngkir($this->apikey) ;



            $cost = $rajaOngkir->ongkosKirim([
            'origin'        => 501,     // ID kota/kabupaten asal
            'originType' => "city",
            'destination'   => 30,      // ID kota/kabupaten tujuan
            'destinationType' => "city",
            'weight'        => 1300,    // berat barang dalam gram
            'courier'       => 'jne:pos:tiki'    // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();

        dd($cost);

            // $this->jasa = $cost[0]['name'];
            // foreach($cost[0]['costs'] as $row)
            // {

            //     $this->result[]=array(
            //         'description' =>$row['description'],
            //         'biaya' =>$row['cost'][0]['value'],
            //         'etd' =>$row['cost'][0]['etd'],
            //     );

            // }




        // $this->daftarProvinsi = $rajaOngkir->provinsi()->all();


        // if($this->provinsi_id)
        // {
        //         $this->daftarkota = $rajaOngkir->kota()->dariProvinsi(1)->get();
        // }


        // $daftarKota = $rajaOngkir->kota()->dariProvinsi(1)->get();


    

        // dd($daftarProvinsi);


        // return view('marketplace.user.tambah-provinsi',compact('daftarProvinsi'));



        return view('marketplace.user.tambah-ongkir', compact('cost'));
    }




    public function getOngkir($id, Pemesanan $pemesanan, Request $request)
    {
        # code...
        $user_id = Auth::id();
        $pemesanan = Pemesanan::where('user_id',$user_id)->update([
            'namaprovinsi' =>$request['namaprovinsi'],
            'namakota' =>$request['namakota'],
        ]);

    }







    private function _getShippingCost($destination, $weight)
	{
		$params = [
			'origin' => env('RAJAONGKIR_ORIGIN'),
			'destination' => $destination,
			'weight' => $weight,
		];

		$results = [];
		foreach ($this->couriers as $code => $courier) {
			$params['courier'] = $code;
			
			$response = $this->rajaOngkirRequest('cost', $params, 'POST');
			
			if (!empty($response['rajaongkir']['results'])) {
				foreach ($response['rajaongkir']['results'] as $cost) {
					if (!empty($cost['costs'])) {
						foreach ($cost['costs'] as $costDetail) {
							$serviceName = strtoupper($cost['code']) .' - '. $costDetail['service'];
							$costAmount = $costDetail['cost'][0]['value'];
							$etd = $costDetail['cost'][0]['etd'];

							$result = [
								'service' => $serviceName,
								'cost' => $costAmount,
								'etd' => $etd,
								'courier' => $code,
							];

							$results[] = $result;
						}
					}
				}
			}
		}

		$response = [
			'origin' => $params['origin'],
			'destination' => $destination,
			'weight' => $weight,
			'results' => $results,
		];
		
		return $response;
	}




















    public function statusbayartiga()
    {
        # code...
    }



    public function searchkategori(Request $request)
    {
        # code...
        $searchkategori = $request->get('searchkategori');
        $produks = DB::table('produks')->where('kategori','like',"%".$searchkategori."%")->paginate();
        // return view('marketplace.home', compact('home'));
        return view('marketplace.home', ['produks'=>$produks]);

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homecekongkir($id, Pemesanan $pemesanan)
    {
        # code...





        // $kota_asal = 'Tasikmalaya';
        // $kota_tujuan = 'Bandung';
        // $kurir = 'JNE';
        // $berat = '20' * 1000;

        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => "origin=" . $kota_asal . "&destination=" . $kota_tujuan . "&weight=" . $berat . "&courier=" . $kurir . "",
        //     CURLOPT_HTTPHEADER => array(
        //         "content-type: application/x-www-form-urlencoded",
        //         "key: 68c70149d6d8d491948b6762b75edd22"
        //     ),
        // ));
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);
        // $data = json_decode($response, true);
        // $costs = $data['rajaongkir']['results'][0]['costs'];
        //echo json_encode($data);

        // $kurir = $data['rajaongkir']['results'][0]['name'];
        // $kotaasal = $data['rajaongkir']['origin_details']['city_name'];
        // $provinsiasal = $data['rajaongkir']['origin_details']['province'];
        // $kotatujuan = $data['rajaongkir']['destination_details']['city_name'];
        // $provinsitujuan = $data['rajaongkir']['destination_details']['province'];
        // $berat = $data['rajaongkir']['query']['weight'] / 1000;
       

        $pemesanan = Pemesanan::findOrFail($id);

        return view('marketplace.user.pilih-daerah', compact('pemesanan'));

    }


    public function cek_ongkir(Request $request) {
        $kota_asal = $_POST['kota_asal'];
        $kota_tujuan = $_POST['kota_tujuan'];
        $kurir = $_POST['kurir'];
        $berat = $_POST['berat'] * 1000;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $kota_asal . "&destination=" . $kota_tujuan . "&weight=" . $berat . "&courier=" . $kurir . "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: 68c70149d6d8d491948b6762b75edd22"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $data = json_decode($response, true);
        //echo json_encode($data);

        $kurir = $data['rajaongkir']['results'][0]['name'];
        $kotaasal = $data['rajaongkir']['origin_details']['city_name'];
        $provinsiasal = $data['rajaongkir']['origin_details']['province'];
        $kotatujuan = $data['rajaongkir']['destination_details']['city_name'];
        $provinsitujuan = $data['rajaongkir']['destination_details']['province'];
        $berat = $data['rajaongkir']['query']['weight'] / 1000;

        echo '<div class="card">';
        echo '<h5 class="card-header text-black" style="background-color: .bg-secondary;">';
        echo '<b>Result:</b>';
        echo '</h5>';
        echo '<div class="card-body">';
        echo '<table width="100%">';
        echo '<tr>';
        echo '<td width="15%"><b>Kurir</b> </td>';
        echo '<td>&nbsp;<b>' . $kurir . '</b></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Dari</td>';
        echo '<td>: ' . $kotaasal . ", " . $provinsiasal . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Tujuan</td>';
        echo '<td>: ' . $kotatujuan . ", " . $provinsitujuan . '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Berat (Kg)</td>';
        echo '<td>: ' . $berat . '</td>';
        echo '</tr>';

        echo '</table><br>';
        echo '<table class="table table-striped table-bordered ">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nama Layanan</th>';
        echo '<th>Tarif</th>';
        echo '<th>ETD(Estimates Days)</th>';
        echo '<th>Aksi</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($data['rajaongkir']['results'][0]['costs'] as $value) {
            echo "<tr>";
            echo "<td>" . $value['service'] . "</td>";
            echo '';
            foreach ($value['cost'] as $tarif) {
                echo "<td align='right'>Rp " . number_format($tarif['value'], 2, ',', '.') . "</td>";
                echo "<td>" . $tarif['etd'] . " D</td>";
                $biaya = $tarif['etd'];
                
                echo "<td>
                <button class = 'btn btn-success' data-toggle = 'modal' data-target = '#exampleModal' > Ambil </button>
           
                </td>";



       

            }
            echo '';

            echo "</tr>";
        }

       
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</div>';

        echo '<br>';
        echo '<br>';
    }



 public function update_jasa(Request $request, $id, Pemesanan $Pemesanan)
 {
     # code...

          $pemesanan = DB::table('pemesanans')->where('id', $id)->update([
                        'namakota' => $request['namakota'],
                        'ongkos_kirim' => $request['ongkos_kirim'],
                        'media_pengiriman' => $request['media_pengiriman'],
                        'harga_total' => $request['harga_total'],
                        'status_pembayaran' => 3,
                    ]);

                    return redirect('/keranjang/'.$id)->with('sukses','Berhasil Diupdate');
 }

    







    public function get_kota($q)
    {
        switch ($q) {
            case 'kotaasal':
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                        "key: 68c70149d6d8d491948b6762b75edd22"
                    ),
                ));
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                $data = json_decode($response, true);
                for ($i = 0; $i < count($data['rajaongkir']['results']); $i++) {
                    echo "<option></option>";
                    echo "<option value='" . $data['rajaongkir']['results'][$i]['city_id'] . "'>" . $data['rajaongkir']['results'][$i]['city_name'] . "</option>";
                }
                break;

            case 'kotatujuan':
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                        "key: 68c70149d6d8d491948b6762b75edd22"
                    ),
                ));
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                $data = json_decode($response, true);
                for ($i = 0; $i < count($data['rajaongkir']['results']); $i++) {
                    echo "<option></option>";
                    echo "<option value='" . $data['rajaongkir']['results'][$i]['city_id'] . "'>" . $data['rajaongkir']['results'][$i]['city_name'] . "</option>";
                }
                break;
        }
    }




    public function daftartagihan()
    {
        # code...
        $user_id = Auth::id();
        $pesanan = DB::table('pemesanans')->where('user_id',$user_id);
        $pemesanans = $pesanan->where('status_pembayaran',3)->get();
        return view('marketplace.user.tagihan',compact('pemesanans'));
    }


    public function daftartagihanspesifik($id, Pemesanan $pemesanan)
    {
        # code...
        $pemesanan = Pemesanan::findOrFail($id);
        return view('marketplace.user.tagihan-spesifik',compact('pemesanan'));
    }



    public function ratingpesanan($id, Pemesanan $pemesanan)
    {
        # code...
        $pemesanan = Pemesanan::findOrFail($id);
        return view('marketplace.user.rating',compact('pemesanan'));
    }


    public function updaterating(Request $request, Pemesanan $pemesanan, $id)
    {
        # code...
        $pemesanan = DB::table('pemesanans')->where('id', $id)->update([
            'rating_produk' => $request['rating_produk'],

        ]);
        return redirect('/rating-pesanan/'.$id)->with('rating-sukses','Rating Anda Telah Diupdate');
    }



    public function edit_daftarmitra()
    {
        # code...
        $user_id = Auth::user()->id;
        $mitra = User::findOrFail($user_id);

       
        // $tokos = $toko::findOrFail($id);
        // $toko = Toko::where('user_id', $user_id)->first();
    
        return view('mitra-locumart.form-daftar-mitra',compact('mitra'));
    }



    public function daftarmitra(Request $request, User $user, $id)
    {
        # code...
        $user_id = Auth::user()->id;

        if($request->hasFile('foto')){
            $filename = $request["foto"]->getClientOriginalName();

            if( User::find($user_id)->foto ){
                Storage::delete('/public/storage/User/'.User::find($user_id)->foto);
            }
            $request["foto"]->storeAs('User', $filename, 'public');
        }
        else{
            $filename = User::find($user_id)->foto;
        }

        $user = User::where('id', Auth::user()->id)->update([
            'foto'=>$filename,
            'name'=>$request['name'],
            'email'=>$request['email'],
            'jenis_kelamin'=>$request['jenis_kelamin'],
            'tempat_lahir'=>$request['tempat_lahir'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'nomor_hp' => $request['nomor_hp'],
            'nomor_telp_perusahaan' => $request['nomor_telp_perusahaan'],
            'alamat' => $request['alamat'],
            'nama_usaha' => $request['nama_usaha'],
            'kategori_usaha' => $request['kategori_usaha'],
            'alamat_perusahaan' => $request['alamat_perusahaan'],
            'nomor_rekening'=>$request['nomor_rekening'],
            'jenis_bank'=>$request['jenis_bank'],

        ]);

        return redirect('/daftar-mitra/' . $request['id'])->with('success-daftar-mitra','Selamat Anda Telah Terdaftar Sebagai Mitra');





    }





    public function daftarmitratoko(Request $request)
    {
        # code...

        $mitra = new Toko;
        if($request->hasFile('gambar_toko'))
        {

                $filename = $request['gambar_toko']->getClientOriginalName();

                if($mitra->gambar_toko)
                {
                    Storage::delete('/public/storage/Toko/'.$filename);
                }

                $request['gambar_toko']->storeAs('Toko',$filename,'public');
        }

        else {
            $filename = $mitra->gambar_toko;
        }


        $mitra->gambar_toko = $filename;
        $mitra->nama_toko = $request['nama_toko'];
        $mitra->lokasi_toko = $request['lokasi_toko'];
        $mitra->deskripsi_toko = $request['deskripsi_toko'];
        $mitra->nomor_hp_toko = $request['nomor_hp_toko'];
        $mitra->rating_toko = $request['rating_toko'];


        $mitra->name = $request['name'];
        $mitra->email = $request['email'];
        $mitra->jenis_kelamin = $request['jenis_kelamin'];
        $mitra->tempat_lahir = $request['tempat_lahir'];

        $mitra->tanggal_lahir = $request['tanggal_lahir'];
        $mitra->kategori_usaha = $request['kategori_usaha'];

        $mitra->nomor_rekening = $request['nomor_rekening'];
        $mitra->jenis_bank = $request['jenis_bank'];
        $mitra->user_id = $request['user_id'];

        
        
        $mitra->save();
        return redirect('/daftar-mitra')->with('store-toko','Anda Berhasil Menambahkan Toko');





    }

















    public function daftarnorek($id, Request $request, User $user)
    {
        # code...
        $mitra = User::where('id', Auth::user()->id)->update([
            'nomor_rekening'=>$request['nomor_rekening'],
            'jenis_bank'=>$request['jenis_bank'],
        ]);

        return redirect('/daftar-mitra/'.Auth::user()->id)->with('success-no-rek','Nomor Rekening Anda Sukses Terdaftar');
    }





    public function edittoko(Toko $tokos, $id)
    {
        //
        $tokos = Toko::findOrFail($id);
        return view('marketplace.pemilik.edit-toko',compact('tokos'));
    }












    public function updatetoko(Request $request, Toko $toko, $id)
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
            // 'rating_toko' => $request['rating_toko'],
            'kategori_usaha' => $request['kategori_usaha'],
            // 'alamat_perusahaan' => $request['alamat_perusahaan'],

        ]);

        return redirect('/pemilik/riwayat-toko')->with('sukses-update-toko','Toko Anda Sudah Berhasil diupdate');




    }






    public function updateprofil(Request $request, Toko $toko, $id)
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

            'name' => $request['name'],
            'nomor_hp' => $request['nomor_hp'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'tempat_lahir' => $request['tempat_lahir'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'alamat' => $request['alamat'],
            'nomor_rekening' => $request['nomor_rekening'],
            'jenis_bank' => $request['jenis_bank'],


        ]);

        return redirect('/pemilik/riwayat-toko')->with('sukses-update-toko','Toko Anda Sudah Berhasil diupdate');




    }
    




    public function pesanansaya()
    {
        # code...

        // $user_id = Auth::user()->id;
        // $riwayat = DB::table('pemesanans')->where('user_id', $user_id)->get();
        // return view('')

    }



    public function daftartoko(Toko $toko)
    {
        # code...

        $toko = Toko::all();
        return view('marketplace.admin-home', compact('toko'));

    }






    public function veriftoko(Request $request, $id)
    // public function veriftoko($id)
    {
        # code...
        $toko = Toko::where('id', $id)->update([
            'legal_id' => 1,
        ]);

        $tokoid = Toko::find($id)->toArray();
        $kata = 'Selamat, Toko Anda yang bernama ' . $tokoid['nama_toko']  . ' Telah Berhasil Terverifikasi';

        
        
        $details = [
            'title' => 'Selamat, Toko Anda Terverifikasi',
            'body' => $kata,
        ];
       
        Mail::to($tokoid['email'])->send(new \App\Mail\VerifTokoMail($details));


        return redirect('/admin-home')->with('lolos-toko','Toko Lulus Legalitas');



    }







    public function tentangdesc()
    {
        # code...
        return view('/tentang-locumart/deskripsi');
    }


    public function tentangunggul()
    {
        # code...
        return view('/tentang-locumart/nilai-unggul');
    }

    public function tentangmedia()
    {
        # code...
        return view('/tentang-locumart/media-locumart');
    }


    public function tentangpartner()
    {
        # code...
        return view('/tentang-locumart/partnership');
    }












    public function mitrahome()
    {
        # code...

        return view('/mitra-locumart/home');

    }



    public function mitrajualan()
    {
        # code...

        return view('/mitra-locumart/mulai-berjualan');

    }


    public function mitracrowd()
    {
        # code...
        return view('/mitra-locumart/crowdfunding');
    }


    
    public function mitrasurvey()
    {
        # code...
        return view('/mitra-locumart/survey');
    }












  







}
