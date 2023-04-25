<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestelling extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function adres()
    {
        return $this->hasMany('App\Models\Adres');
    }
}
