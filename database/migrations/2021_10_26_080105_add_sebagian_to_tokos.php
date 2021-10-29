<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSebagianToTokos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tokos', function (Blueprint $table) {
            //
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->longText('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('nomor_telp_perusahaan')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('kategori_usaha')->nullable();
            $table->longText('alamat_perusahaan')->nullable();
            $table->longText('nomor_rekening')->nullable();
            $table->string('jenis_bank')->nullable();
            $table->string('foto')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tokos', function (Blueprint $table) {
            //
            $table->dropColumn(['name']);
            $table->dropColumn(['email']);
            $table->dropColumn(['jenis_kelamin']);
            $table->dropColumn(['tempat_lahir']);
            $table->dropColumn(['tanggal_lahir']);
            $table->dropColumn(['nomor_hp']);
            $table->dropColumn(['nomor_telp_perusahaan']);
            $table->dropColumn(['alamat']);
            $table->dropColumn(['nama_usaha']);
            $table->dropColumn(['kategori_usaha']);
            $table->dropColumn(['alamat_perusahaan']);
            $table->dropColumn(['nomor_rekening']);
            $table->dropColumn(['jenis_bank']);
            $table->dropColumn(['foto']);


        });
    }
}
