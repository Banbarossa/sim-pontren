<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suratkeluar>
 */
class SuratkeluarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_unik' => Str::random(30),
            'kode_surat' => Str::random(18),
            'tanggal' => fake()->date(),
            'tujuan' => fake()->name(),
            'isi_ringkas' => fake()->sentence(10)
        ];
    }
}
