<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToTokos extends Migration
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

            $table->unsignedBigInteger('user_id')->after('rating_toko')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::table('tokos', function (Blueprint $table) {
            //

            $table->dropForeign('user_id');
            $table->dropColumn(['user_id']);

        });
    }
}
