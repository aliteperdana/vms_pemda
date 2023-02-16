<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PegawaiSpse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_spse', function (Blueprint $table) {
            $table->id('id');
            $table->string('peg_nip', 255)->nullable();
            $table->string('cer_id', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('peg_nama', 255)->nullable();
            $table->string('peg_alamat', 255)->nullable();
            $table->string('peg_telepon', 255)->nullable();
            $table->string('peg_mobile', 255)->nullable();
            $table->string('peg_email', 255)->nullable();
            $table->string('peg_golongan', 255)->nullable();
            $table->string('peg_pangkat', 255)->nullable();
            $table->string('peg_jabatan', 255)->nullable();
            $table->string('peg_isactive', 255)->nullable();
            $table->string('peg_namauser', 255)->nullable();
            $table->string('peg_no_sk', 255)->nullable();
            $table->string('peg_masa_berlaku', 255)->nullable();
            $table->string('peg_id', 255)->nullable();
            $table->string('agc_id', 255)->nullable();
            $table->string('peg_no_pbj', 255)->nullable();
            $table->string('passw', 255)->nullable();
            $table->string('isbuiltin', 255)->nullable();
            $table->string('disableuser', 255)->nullable();
            $table->string('reset_password', 255)->nullable();
            $table->string('ams_id', 255)->nullable();
            $table->string('ukpbj_id', 255)->nullable();
            $table->string('satker_id', 255)->nullable();
            $table->string('peg_nik', 255)->nullable();
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
