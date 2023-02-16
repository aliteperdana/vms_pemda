<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kontrak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrak', function (Blueprint $table) {
            $table->id('id');
            $table->string('kontrak_id', 255)->nullable();
            $table->string('lls_id', 255)->nullable();
            $table->string('rkn_id', 255)->nullable();
            $table->string('kontrak_no', 255)->nullable();
            $table->string('kontrak_nilai', 255)->nullable();
            $table->string('kontrak_mulai', 255)->nullable();
            $table->string('kontrak_akhir', 255)->nullable();
            $table->text('kontrak_lingkup')->nullable();
            $table->string('kontrak_id_attacment', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('ppk_id', 255)->nullable();
            $table->string('kontrak_norekening', 255)->nullable();
            $table->string('kontrak_tanggal', 255)->nullable();
            $table->string('kontrak_kota', 255)->nullable();
            $table->string('kontrak_waktu', 255)->nullable();
            $table->string('kontrak_wakil_penyedia', 255)->nullable();
            $table->string('kontrak_jabatan_wakil', 255)->nullable();
            $table->string('kontrak_tipe_penyedia', 255)->nullable();
            $table->text('kontrak_kso')->nullable();
            $table->text('kontrak_sskk')->nullable();
            $table->string('kontrak_sskk_perubahan', 255)->nullable();
            $table->string('kontrak_id_attacment2', 255)->nullable();
            $table->string('kontrak_sskk_attacment', 255)->nullable();
            $table->string('kontrak_namarekening', 255)->nullable();
            $table->text('kontrak_lingkup_pekerjaan')->nullable();
            $table->string('kontrak_namapemilikrekening', 255)->nullable();
            $table->text('alasanubah_kontrak_nilai')->nullable();
            $table->string('jabatan_ppk_kontrak', 255)->nullable();
            $table->string('anggota_kso', 255)->nullable();
            $table->text('no_skpemenang')->nullable();
            $table->string('tgl_skpemenang', 255)->nullable();
            $table->string('kode_akun_kegiatan', 255)->nullable();
            $table->string('lama_durasi_penyerahan1', 255)->nullable();
            $table->string('lama_durasi_pemeliharaan', 255)->nullable();
            $table->string('nilai_pdn', 255)->nullable();
            $table->string('nip_ppk_kontrak', 255)->nullable();
            $table->string('no_sk_ppk_kontrak', 255)->nullable();
            $table->string('nama_ppk_kontrak', 255)->nullable();
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
