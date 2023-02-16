<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemilik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemilik', function (Blueprint $table) {
            $table->id('id');
            $table->string('pml_id',255)->nullable();
            $table->string('rkn_id',255)->nullable();
            $table->string('audittype',255)->nullable();
            $table->string('audituser',255)->nullable();
            $table->string('auditupdate',255)->nullable();
            $table->string('pml_nama',255)->nullable();
            $table->string('pml_ktp',255)->nullable();
            $table->string('pml_alamat',255)->nullable();
            $table->string('pml_saham',255)->nullable();
            $table->string('pml_valid_start',255)->nullable();
            $table->string('pml_valid_end',255)->nullable();
            $table->string('pml_satuan',255)->nullable();
            $table->string('pml_npwp',255)->nullable();
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
