<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'token_team' => Str::random(16),
            'nama_team' => fake()->word(3),
            'mentor_id' => fake()->randomElement([6,7]),
            'deskripsi' => fake()->paragraph(2),
            'avatar' => fake()->imageUrl()
        ];
    }
}
