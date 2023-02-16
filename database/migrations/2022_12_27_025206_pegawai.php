<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_peg',255)->nullable();
            $table->string('id_skpd',255)->nullable();
            $table->string('id_golongan',255)->nullable();
            $table->string('username',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('nip',255)->nullable();
            $table->string('nama',255)->nullable();
            $table->string('alamat',255)->nullable();
            $table->string('tmp_lahir',255)->nullable();
            $table->string('tgl_lahir',255)->nullable();
            $table->string('no_telp',255)->nullable();
            $table->string('jabatan',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('npwp',255)->nullable();
            $table->string('superadmin',255)->nullable();
            $table->string('admin',255)->nullable();
            $table->string('ppk',255)->nullable();
            $table->string('pokja',255)->nullable();
            $table->string('helpdesk',255)->nullable();
            $table->string('kasubag',255)->nullable();
            $table->string('karo',255)->nullable();
            $table->string('lpse',255)->nullable();
            $table->string('pejabat',255)->nullable();
            $table->string('apip',255)->nullable();
            $table->string('admskpd',255)->nullable();
            $table->string('dprd',255)->nullable();
            $table->string('photo',255)->nullable();
            $table->string('temp',255)->nullable();
            $table->string('sso',255)->nullable();
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
