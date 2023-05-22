<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function bestelling(): BelongsTo
    {
        return $this->belongsTo('App\Models\Bestelling');
    }

    public function fruit(): HasMany
    {
        return $this->hasMany('App\Models\Fruit');
    }
}
