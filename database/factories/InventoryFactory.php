<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "kode" => Str::random(15),
            "nama" => fake()->firstName(),
            "inventory_category_id" => random_int(1, 3),
            "ruang_id" => random_int(1, 3),
            "merek" => fake()->lastName(),
            "no_seri" => Str::random(15),
            "kondisi" => "Baik",
            "tanggal_pengadaan" => fake()->date(),
            "danainventory_id" => random_int(1, 3),
            "user_id" => random_int(1, 5),
        ];
    }
}
