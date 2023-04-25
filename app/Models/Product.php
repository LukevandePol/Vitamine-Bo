<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function bestelling()
    {
        return $this->belongsTo('App\Models\Bestelling');
    }

    public function fruit()
    {
        return $this->hasMany('App\Models\Fruit');
    }
}
