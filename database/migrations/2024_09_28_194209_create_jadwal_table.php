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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('id_mk', 10);
            $table->string('hari');
            $table->string('ruangan', 5)->nullable()->index('kode_ruangan');
            $table->string('nama_mk');
            $table->integer('sks');
            $table->string('sifat');
            $table->char('kelas');
            $table->integer('semester');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('koordinator_mk');
            $table->string('pengampu_1');
            $table->string('pengampu_2')->nullable();
            $table->string('pengampu_3')->nullable();
            $table->boolean('persetujuan')->default(0);
            $table->timestamps();

            $table->foreign('id_mk')->references('kode_mk')->on('matakuliah')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
