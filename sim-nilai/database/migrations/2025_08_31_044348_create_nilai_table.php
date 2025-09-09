<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->string('nis');              // Nomor Induk Siswa
            $table->string('nama_siswa');       // Nama lengkap siswa
            $table->string('kelas');            // Kelas siswa
            $table->string('mapel');            // Mata pelajaran
            $table->integer('tugas')->nullable(); // Nilai tugas
            $table->integer('pts')->nullable();   // Nilai PTS
            $table->integer('pas')->nullable();   // Nilai PAS
            $table->decimal('nilai_akhir', 5, 2)->nullable(); // nilai akhir hasil perhitungan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
