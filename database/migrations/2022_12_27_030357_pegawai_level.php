<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PegawaiLevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_level', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_level',255)->nullable();
            $table->string('id_peg',255)->nullable();
            $table->string('id_app_level',255)->nullable();
            $table->string('ext',255)->nullable();
            $table->string('ket',255)->nullable();
            $table->string('utama',255)->nullable();
            $table->string('suspend',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
