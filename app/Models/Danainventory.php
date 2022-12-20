<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danainventory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
