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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('id_profile');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('token_user', 16);
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('foto')->default('default.png');
            $table->foreignId('team_id')->nullable()->constrained('teams', 'id_team')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
