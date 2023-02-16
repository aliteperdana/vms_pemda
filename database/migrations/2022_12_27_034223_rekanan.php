<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rekanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekanan', function (Blueprint $table) {
            $table->id('id');
            $table->string('rkn_id', 255)->nullable();
            $table->string('btu_id', 255)->nullable();
            $table->string('cer_id', 255)->nullable();
            $table->string('kbp_id', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('rkn_nama', 255)->nullable();
            $table->string('rkn_alamat', 255)->nullable();
            $table->string('rkn_kodepos', 255)->nullable();
            $table->string('rkn_telepon', 255)->nullable();
            $table->string('rkn_fax', 255)->nullable();
            $table->string('rkn_mobile_phone', 255)->nullable();
            $table->string('rkn_npwp', 255)->nullable();
            $table->string('rkn_pkp', 255)->nullable();
            $table->string('rkn_statcabang', 255)->nullable();
            $table->string('rkn_email', 255)->nullable();
            $table->string('rkn_website', 255)->nullable();
            $table->string('rkn_tgl_daftar', 255)->nullable();
            $table->string('rkn_tgl_setuju', 255)->nullable();
            $table->string('rkn_almtpusat', 255)->nullable();
            $table->string('rkn_telppusat', 255)->nullable();
            $table->string('rkn_faxpusat', 255)->nullable();
            $table->string('rkn_emailpusat', 255)->nullable();
            $table->string('rkn_namauser', 255)->nullable();
            $table->string('rkn_isactive', 255)->nullable();
            $table->string('rkn_status', 255)->nullable();
            $table->text('rkn_keterangan')->nullable();
            $table->string('pps_id', 255)->nullable();
            $table->string('rkn_status_verifikasi', 255)->nullable();
            $table->string('ver_namauser', 255)->nullable();
            $table->string('repo_id', 255)->nullable();
            $table->string('rkn_namapusat', 255)->nullable();
            $table->string('ngr_id', 255)->nullable();
            $table->string('kota', 255)->nullable();
            $table->string('status_migrasi', 255)->nullable();
            $table->string('last_sync_vms', 255)->nullable();
            $table->string('passw', 255)->nullable();
            $table->string('isbuiltin', 255)->nullable();
            $table->string('disableuser', 255)->nullable();
            $table->string('reset_password', 255)->nullable();
            $table->string('ams_id', 255)->nullable();
            $table->text('edited_data')->nullable();
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
