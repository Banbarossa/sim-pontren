<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function InventoryCategory()
    {
        return $this->belongsTo(InventoryCategory::class);
    }

    public function Ruang()
    {
        return $this->belongsTo(Ruang::class);
    }
    public  function danainventory()
    {
        return $this->belongsTo(Danainventory::class);
    }

    public function InventoryMaintenaces()
    {
        return $this->hasMany(InventoryMantenance::class);
    }
}
