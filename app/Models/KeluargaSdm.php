<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaSdm extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function Sdm()
    {
        return $this->belongsTo(Sdm::class);
    }
}
