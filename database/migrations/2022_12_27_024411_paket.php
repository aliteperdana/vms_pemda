<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->id('id');
            $table->string('pkt_id',255)->nullable();
            $table->string('stk_id',255)->nullable();
            $table->string('pnt_id',255)->nullable();
            $table->string('audittype',255)->nullable();
            $table->string('audituser',255)->nullable();
            $table->string('auditupdate',255)->nullable();
            $table->text('pkt_nama')->nullable();
            $table->string('pkt_pagu',255)->nullable();
            $table->string('pkt_hps',255)->nullable();
            $table->string('pkt_lokasi',255)->nullable();
            $table->string('pkt_id_attachment',255)->nullable();
            $table->string('pkt_tgl_realisasi',255)->nullable();
            $table->string('pkt_tgl_assign',255)->nullable();
            $table->string('pkt_tgl_buat',255)->nullable();
            $table->string('pkt_tgl_ppk_setuju',255)->nullable();
            $table->string('pkt_status',255)->nullable();
            $table->string('kls_id',255)->nullable();
            $table->string('pkt_flag',255)->nullable();
            $table->string('kgr_id',255)->nullable();
            $table->string('ppk_id',255)->nullable();
            $table->string('pkt_no_spk',255)->nullable();
            $table->string('rup_id',255)->nullable();
            $table->string('ttp_ticket_id',255)->nullable();
            $table->string('unspsc_id',255)->nullable();
            $table->string('pkt_hps_enable',255)->nullable();
            $table->string('ukpbj_id',255)->nullable();
            $table->string('is_pkt_konsolidasi',255)->nullable();
            $table->string('pkt_id_konsolidasi',255)->nullable();
            $table->string('pkt_tgl_build',255)->nullable();
            $table->string('id_ketua_ukpbj',255)->nullable();
            $table->string('pkt_tgl_assign_ukpbj',255)->nullable();
            $table->string('pkt_tgl_assign_pokja',255)->nullable();
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
