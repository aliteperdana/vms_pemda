<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StafAhli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf_ahli', function (Blueprint $table) {
            $table->id('id');
            $table->string('sta_id', 255)->nullable();
            $table->string('rkn_id', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('sta_nama', 255)->nullable();
            $table->string('sta_tgllahir', 255)->nullable();
            $table->string('sta_alamat', 255)->nullable();
            $table->string('sta_jabatan', 255)->nullable();
            $table->string('sta_pendidikan', 255)->nullable();
            $table->string('sta_pengalaman', 255)->nullable();
            $table->string('sta_keahlian', 255)->nullable();
            $table->string('sta_email', 255)->nullable();
            $table->string('sta_telepon', 255)->nullable();
            $table->string('sta_jenis_kelamin', 255)->nullable();
            $table->string('sta_kewarganearaan', 255)->nullable();
            $table->string('sta_status', 255)->nullable();
            $table->longText('sta_cv')->nullable();
            $table->string('sta_npwp', 255)->nullable();
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
