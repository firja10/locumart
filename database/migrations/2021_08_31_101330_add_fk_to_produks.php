<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToProduks extends Migration
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
            $table->unsignedBigInteger('toko_id')->after('rating_produk')->nullable();
            $table->foreign('toko_id')->references('id')->on('tokos')
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
        Schema::table('produks', function (Blueprint $table) {
            //
            $table->dropForeign('toko_id');
            $table->dropColumn(['toko_id']);
        });
    }
}
