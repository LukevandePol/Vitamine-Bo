<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adres extends Model
{
    use HasFactory;

    public function klantgegevens()
    {
        return $this->belongsTo('App\Models\Klantgegevens');
    }
}
