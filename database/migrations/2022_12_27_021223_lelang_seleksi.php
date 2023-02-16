<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LelangSeleksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelang_seleksi', function (Blueprint $table) {
            $table->id('id');
            $table->string('lls_id',255)->nullable();
            $table->string('pkt_id',255)->nullable();
            $table->string('mtd_id',255)->nullable();
            $table->string('audittype',255)->nullable();
            $table->string('audituser',255)->nullable();
            $table->string('auditupdate',255)->nullable();
            $table->string('lls_passinggrade',255)->nullable();
            $table->string('lls_versi_lelang',255)->nullable();
            $table->string('lls_keterangan',255)->nullable();
            $table->string('lls_dibuat_tanggal',255)->nullable();
            $table->text('lls_diulang_karena')->nullable();
            $table->text('lls_ditutup_karena')->nullable();
            $table->string('lls_terverifikasi',255)->nullable();
            $table->string('lls_tgl_setuju',255)->nullable();
            $table->string('lls_wf_id',255)->nullable();
            $table->string('lls_status',255)->nullable();
            $table->string('mtd_pemilihan',255)->nullable();
            $table->string('mtd_evaluasi',255)->nullable();
            $table->string('lls_penetapan_pemenang',255)->nullable();
            $table->string('lls_kontrak_pembayaran',255)->nullable();
            $table->string('lls_kontrak_tahun',255)->nullable();
            $table->string('lls_kontrak_sbd',255)->nullable();
            $table->string('lls_bobot_teknis',255)->nullable();
            $table->string('lls_bobot_biaya',255)->nullable();
            $table->string('lls_kontrak_pekerjaan',255)->nullable();
            $table->string('lls_sesi',255)->nullable();
            $table->string('lls_dibuka_karena',255)->nullable();
            $table->string('lls_penawaran_ulang',255)->nullable();
            $table->string('lls_tanggal_pembukaan_harga',255)->nullable();
            $table->string('lls_tanggal_pembukaan_admteknis',255)->nullable();
            $table->string('lls_metode_penawaran',255)->nullable();
            $table->string('lls_tanggal_pembukaan',255)->nullable();
            $table->string('is_kualifikasi_tambahan',255)->nullable();
            $table->string('kirim_pengumuman_pemenang',255)->nullable();
            $table->string('kirim_pengumuman_pemenang_pra',255)->nullable();
            $table->string('lls_evaluasi_ulang',255)->nullable();
            $table->string('oap',255)->nullable();
            $table->string('lls_konfirmasi_evaluasi',255)->nullable();
            $table->string('lls_evaluasi_ulang_prakualifikasi',255)->nullable();
            $table->string('lls_allow_penawaran_ulang',255)->nullable();
            $table->string('lls_validasi_kelengkapan',255)->nullable();
            $table->string('lls_tgl_ppk_batal',255)->nullable();
            $table->text('paket_info')->nullable();
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
