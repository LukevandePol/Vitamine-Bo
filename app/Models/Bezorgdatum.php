<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bezorgdatum extends Model
{
    use HasFactory;

    public function bestellings(): BelongsToMany
    {
        return $this->belongsToMany(Bestelling::class);
    }
}
