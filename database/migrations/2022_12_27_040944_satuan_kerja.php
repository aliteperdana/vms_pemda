<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SatuanKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satuan_kerja', function (Blueprint $table) {
            $table->id('id');
            $table->string('stk_id', 255)->nullable();
            $table->string('agc_id', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('stk_nama', 255)->nullable();
            $table->string('stk_alamat', 255)->nullable();
            $table->string('stk_telepon', 255)->nullable();
            $table->string('stk_contact_person', 255)->nullable();
            $table->string('stk_fax', 255)->nullable();
            $table->string('stk_kodepos', 255)->nullable();
            $table->string('stk_kode', 255)->nullable();
            $table->string('instansi_id', 255)->nullable();
            $table->string('rup_stk_id', 255)->nullable();
            $table->string('rup_stk_tahun', 255)->nullable();
            $table->string('hosted', 255)->nullable();
            $table->string('last_sync', 255)->nullable();
            $table->string('tahun_dekon', 255)->nullable();
            $table->string('eselon', 255)->nullable();
            $table->string('is_sync', 255)->nullable();
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
