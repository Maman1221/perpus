<?php

namespace Database\Factories;

use App\Models\buku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         return [
            'judul' => fake()->name(),
            'penulis' => fake()->name(),
            'penerbit' => fake()->name(),
            'tahunterbit' => fake()->randomDigit(),
        ];
    }
}
