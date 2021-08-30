<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_produk')->nullable();
            $table->string('gambar_produk')->nullable();
            $table->string('kategori')->nullable();
            $table->string('harga_jual')->nullable();
            $table->string('jumlah_pesan')->nullable();
            $table->string('harga_diskon')->nullable();
            $table->string('harga_total')->nullable();
            $table->string('ongkos_kirim')->nullable();
            $table->string('nama_toko')->nullable();
            $table->string('media_pengiriman')->nullable();
            $table->string('media_pembayaran')->nullable();
            $table->integer('status_pembayaran')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
}
