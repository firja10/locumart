<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkProdukToPemesanans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemesanans', function (Blueprint $table) {
            //

            $table->unsignedBigInteger('produk_id')->after('user_id')->nullable();
            $table->foreign('produk_id')->references('id')->on('produks')
            ->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemesanans', function (Blueprint $table) {
            //

            $table->dropForeign('produk_id');
            $table->dropColumn(['produk_id']);


        });
    }
}
