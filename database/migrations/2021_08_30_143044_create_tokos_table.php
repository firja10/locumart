<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_toko')->nullable();
            $table->string('deskripsi_toko')->nullable();
            $table->string('gambar_toko')->nullable();
            $table->longText('lokasi_toko')->nullable();
            $table->longText('nomor_hp_toko')->nullable();
            $table->string('rating_toko')->nullable();
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
        Schema::dropIfExists('tokos');
    }
}
