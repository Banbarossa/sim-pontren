<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
