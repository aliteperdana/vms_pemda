<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IjinUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijin_usaha', function (Blueprint $table) {
            $table->id('id');
            $table->string('ius_id',255)->nullable();
            $table->string('rkn_id', 255)->nullable();
            $table->string('jni_id', 255)->nullable();
            $table->string('kls_id', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('ius_no', 255)->nullable();
            $table->string('ius_tanggal', 255)->nullable();
            $table->string('ius_berlaku', 255)->nullable();
            $table->string('ius_instansi', 255)->nullable();
            $table->string('ius_id_attachment', 255)->nullable();
            $table->text('ius_klasifikasi')->nullable();
            $table->string('jni_nama', 255)->nullable();
            $table->string('vms_id', 255)->nullable();
            $table->string('status_berlaku', 255)->nullable();
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
