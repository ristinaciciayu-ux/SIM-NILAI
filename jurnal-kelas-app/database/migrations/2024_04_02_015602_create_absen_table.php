<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->id('absen_id');
            $table->date('tanggal');
            $table->enum('keterangan', ['hadir','izin','alpa']);
            $table->foreignId('mahasiswa_id')->references('mahasiswa_id')->on('mahasiswa');
            $table->foreignId('dosen_id')->references('dosen_id')->on('dosen');
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
        Schema::dropIfExists('absen');
    }
}
