<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToKotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kotas', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('provinsi_id')->after('kota_id')->nullable();
            $table->foreign('provinsi_id')->references('id')->on('kotas')
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
        Schema::table('kotas', function (Blueprint $table) {
            //
            $table->dropForeign('provinsi_id');
            $table->dropColumn(['provinsi_id']);
        });
    }
}
