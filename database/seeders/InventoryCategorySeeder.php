<?php

namespace Database\Seeders;

use App\Models\InventoryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InventoryCategory::create([
            'nama' => 'Elektronik'
        ]);

        InventoryCategory::create([
            'nama' => 'Furniture'
        ]);
        InventoryCategory::create([
            'nama' => 'kendaraan'
        ]);
    }
}
