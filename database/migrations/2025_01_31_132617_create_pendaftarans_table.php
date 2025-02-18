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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id('id_pendaftaran');
            $table->string('token_pendaftaran', 16);
            $table->foreignId('peserta_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('kegiatan_id')->constrained('kegiatans', 'id_kegiatan')->cascadeOnUpdate();
            $table->enum('status', [
                'pending', 'diterima', 'hadir', 'alpa'
            ])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
