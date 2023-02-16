<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BentukUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bentuk_usaha', function (Blueprint $table) {
            $table->id('id');
            $table->string('btu_id')->nullable();
            $table->string('audittype',255)->nullable();
            $table->string('audituser',255)->nullable();
            $table->string('auditupdate',255)->nullable();
            $table->string('btu_nama',255)->nullable();
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
