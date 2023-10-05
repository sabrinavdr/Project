<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->string('id_nomor_arsip');
            $table->string('id_nama_arsip');
            $table->string('id_asal_arsip');
            $table->string('id_jenis_arsip');
            $table->date('id_tanggal_keluar');
            $table->string('id_pengirim');
            $table->string('id_penerima');
            $table->string('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokumens');
    }
};
