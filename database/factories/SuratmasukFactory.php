<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suratmasuk>
 */
class SuratmasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pengirim' => fake()->name(),
            'nomor_surat' => Str::random(8),
            'tanggal' => fake()->date(),
            'isi_ringkas' => fake()->sentence(8),
        ];
    }
}
