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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('nim', 14)->primary();
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->string('prodi');
            $table->string('jalur_masuk');
            $table->year('angkatan');
            $table->integer('semester_berjalan');
            $table->float('ipk');
            $table->text('alamat')->nullable();
            $table->string('dosen_wali');
            $table->string('status')->nullable();

            $table->foreign('dosen_wali')->references('nip')->on('dosens')
          ->onDelete('cascade'); // Set foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
