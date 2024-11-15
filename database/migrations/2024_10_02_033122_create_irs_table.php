<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('irs', function (Blueprint $table) {
            $table->id('id_irs');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('nama');
            $table->string('program_studi');
            $table->integer('semester');            
            $table->string('tahun_akademik');
            $table->string('kode_matkul');
            $table->string('nama_matkul');
            $table->integer('sks');
            $table->boolean('status')->default(0);
            $table->date('tanggal_pengajuan');
            $table->date('tanggal_persetujuan')->nullable();

            $table->foreign('mahasiswa_id')->references('nim')->on('mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('irs', function (Blueprint $table) {
            $table->dropForeign(['mahasiswa_id']);
        });

        Schema::dropIfExists('irs');
    }
};
