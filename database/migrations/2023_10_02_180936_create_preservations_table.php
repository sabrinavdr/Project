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
        Schema::create('preservations', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nomor_dokumen');
            $table->string('id_nama_dokumen');
            $table->string('id_asal_dokumen');
            $table->string('id_jenis_dokumen');
            $table->date('tanggal_pembuatan');
            $table->integer('periode_preservasi');
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
        Schema::dropIfExists('preservations');
    }
};
