<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengurus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->id('id');
            $table->string('pgr_id', 255)->nullable();
            $table->string('rkn_id', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('pgr_nama', 255)->nullable();
            $table->string('pgr_ktp', 255)->nullable();
            $table->string('pgr_alamat', 255)->nullable();
            $table->string('pgr_jabatan', 255)->nullable();
            $table->string('pgr_iskomis', 255)->nullable();
            $table->string('pgr_valid_start', 255)->nullable();
            $table->string('pgr_valid_end', 255)->nullable();
            $table->string('pgr_npwp', 255)->nullable();
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
