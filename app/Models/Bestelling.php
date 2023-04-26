<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bestelling extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function product(): HasMany
    {
        return $this->hasMany('App\Models\Product');
    }

    public function adres(): HasMany
    {
        return $this->hasMany('App\Models\Adres');
    }
}
