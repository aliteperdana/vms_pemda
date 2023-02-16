<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ppk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppk', function (Blueprint $table) {
            $table->id('id');
            $table->string('ppk_id', 255)->nullable();
            $table->string('audittype', 255)->nullable();
            $table->string('audituser', 255)->nullable();
            $table->string('auditupdate', 255)->nullable();
            $table->string('ppk_valid_start', 255)->nullable();
            $table->string('ppk_valid_end', 255)->nullable();
            $table->string('peg_id', 255)->nullable();
            $table->string('ppk_id_attachment', 255)->nullable();
            $table->string('ppk_pembuat_sk', 255)->nullable();
            $table->string('ppk_nomor_sk', 255)->nullable();
            $table->string('ppk_unit_kerja_sk', 255)->nullable();
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
