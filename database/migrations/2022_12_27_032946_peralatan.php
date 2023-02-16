<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Peralatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peralatan', function (Blueprint $table) {
            $table->id('id');
            $table->string('alt_id', 255)->nullable();
            $table->string('rkn_id', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('alt_jenis', 255)->nullable();
            $table->string('alt_jumlah', 255)->nullable();
            $table->string('alt_kapasitas', 255)->nullable();
            $table->string('alt_merktipe', 255)->nullable();
            $table->string('alt_thpembuatan', 255)->nullable();
            $table->string('alt_kondisi', 255)->nullable();
            $table->string('alt_lokasi', 255)->nullable();
            $table->string('alt_kepemilikan', 255)->nullable();
            $table->string('skp_id', 255)->nullable();
            $table->string('vms_id', 255)->nullable();
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
