<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
