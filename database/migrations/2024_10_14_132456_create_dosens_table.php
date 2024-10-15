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
        Schema::create('dosens', function (Blueprint $table) {
            $table->char('nidn', 10)->primary();
            $table->string('nama_dosen', 10);
            $table->date('tgl_mulai_tugas', 50);
            $table->string('bidang_keilmuan', 50);
            $table->string('foto_dosen', 50)->nullable();
            $table->enum('jenjang_pendidikan', ['s2','s3']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
