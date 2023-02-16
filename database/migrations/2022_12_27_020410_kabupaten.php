<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kabupaten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->id('id');
            $table->string('kbp_id')->nullable();
            $table->string('prp_id',255)->nullable();
            $table->string('audittype',255)->nullable();
            $table->string('audituser',255)->nullable();
            $table->string('auditupdate',255)->nullable();
            $table->string('kbp_nama',255)->nullable();
            $table->string('kbp_statusadm',255)->nullable();

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
