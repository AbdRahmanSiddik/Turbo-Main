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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->string('token_kegiatan', 16);
            $table->string('nama_kegiatan');
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_akhir');
            $table->string('thumbnail');
            $table->text('deskripsi');
            $table->enum('status', ['dimulai', 'akan_datang', 'selesai'])->default('akan_datang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
