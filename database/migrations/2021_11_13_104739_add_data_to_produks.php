<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToProduks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produks', function (Blueprint $table) {
            //
            $table->string('gambar_produk1')->after('gambar_produk')->nullable();
            $table->string('gambar_produk2')->after('gambar_produk1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produks', function (Blueprint $table) {
            //
            $table->dropColumn(['gambar_produk1']);
            $table->dropColumn(['gambar_produk2']);
        });
    }
}
