<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusTransaksiToPemesanans extends Migration
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
            $table->string('namajasa')->nullable();
            $table->string('nomor_resi')->nullable();
            $table->string('status_message')->nullable();
            $table->string('order_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('transaction_time')->nullable();
            $table->string('transaction_status')->nullable();
            $table->longText('transaction_id')->nullable();
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
            $table->dropColumn(['nomor_resi']);
            $table->dropColumn(['namajasa']);
            $table->dropColumn(['status_message']);
            $table->dropColumn(['order_id']);
            $table->dropColumn(['payment_type']);
            $table->dropColumn(['transaction_time']);
            $table->dropColumn(['transaction_status']);
            $table->dropColumn(['transaction_id']);
        });
    }
}
