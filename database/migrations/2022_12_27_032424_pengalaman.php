<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengalaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->id('id');
            $table->string('pgn_id',255)->nullable();
            $table->string('rkn_id',255)->nullable();
            $table->string('audittype',255)->nullable();
            $table->string('audituser',255)->nullable();
            $table->string('auditupdate',255)->nullable();
            $table->text('pgl_kegiatan')->nullable();
            $table->string('pgl_lokasi',255)->nullable();
            $table->string('pgl_pembtgs',255)->nullable();
            $table->string('pgl_almtpembtgs',255)->nullable();
            $table->string('pgl_telppembtgs',255)->nullable();
            $table->string('pgl_nokontrak',255)->nullable();
            $table->string('pgl_tglkontrak',255)->nullable();
            $table->string('pgl_nilai',255)->nullable();
            $table->string('pgl_tglprogress',255)->nullable();
            $table->string('pgl_persenprogress',255)->nullable();
            $table->string('pgl_slskontrak',255)->nullable();
            $table->string('pgl_slsba',255)->nullable();
            $table->string('pgl_id_attachment',255)->nullable();
            $table->text('pgl_keterangan')->nullable();
            $table->string('vms_id',255)->nullable();
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
