<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_produk')->nullable();
            $table->string('deskripsi_produk')->nullable();
            $table->string('gambar_produk')->nullable();
            $table->string('kategori')->nullable();
            $table->string('harga_jual')->nullable();
            $table->string('harga_diskon')->nullable();
            $table->string('stok_terjual')->nullable();
            $table->string('stok_sisa')->nullable();
            $table->string('rating_produk')->nullable();
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
        Schema::dropIfExists('produks');
    }
}
