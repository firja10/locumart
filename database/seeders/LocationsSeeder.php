<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\RajaOngkir;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public $apikey = "68c70149d6d8d491948b6762b75edd22";

    public function run()
    {
        //

        $rajaOngkir = new RajaOngkir($this->apikey) ;
        $daftarProvinsi = $rajaOngkir->provinsi()->all();
        foreach ($daftarProvinsi as $provinceRow) {
            Provinsi::create([
                'provinsi_id' => $provinceRow['provinsi_id'],
                'namaprovinsi' => $provinceRow['namaprovinsi'],
            ]);
            $daftarKota = $rajaOngkir->kota()->dariProvinsi($provinceRow['provinsi_id'])->get();
            foreach ($daftarKota as $cityRow) {
                Kota::create([
                    'provinsi_id'   => $provinceRow['provinsi_id'],
                    'kota_id'       => $cityRow['kota_id'],
                    'namakota'       => $cityRow['namakota'],
                ]);
            }
        }





    }
}
