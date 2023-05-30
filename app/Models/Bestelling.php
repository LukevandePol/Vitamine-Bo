<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bestelling extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function selecties(): BelongsToMany
    {
        return $this->belongsToMany(Selectie::class);
    }

    public function adres(): HasMany
    {
        return $this->hasMany(Adres::class);
    }

    public function Bezorgdatums(): BelongsToMany
    {
        return $this->belongsToMany(Bezorgdatum::class);
    }


}
