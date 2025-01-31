<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kegiatan>
 */
class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'token_kegiatan' => Str::random(16),
            'nama_kegiatan' => fake()->word(3),
            'tanggal_mulai' => Carbon::now(),
            'tanggal_akhir' => Carbon::now()->addMonth(),
            'thumbnail' => fake()->imageUrl(),
            'deskripsi' => fake()->paragraph(3),
            'status' => 'dimulai',
        ];
    }
}
