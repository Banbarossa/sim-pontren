<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meeting>
 */
class MeetingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'unik_id' => Str::random(30),
            'tanggal' => fake()->date(),
            'pimpinan' => fake()->name(),
            'deskripsi' => fake()->sentence(15),
            'kesimpulan' => fake()->sentence(50),
        ];
    }
}
