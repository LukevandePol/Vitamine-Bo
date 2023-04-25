<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
