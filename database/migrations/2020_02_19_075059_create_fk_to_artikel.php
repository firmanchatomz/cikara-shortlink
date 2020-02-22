<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFkToArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artikel', function (Blueprint $table) {
            $table->unSignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unSignedBigInteger('kategori_id')->after('user_id');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artikel', function (Blueprint $table) {
            //
        });
    }
}
