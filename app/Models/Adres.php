<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adres extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function klantgegevens(): BelongsTo
    {
        return $this->belongsTo('App\Models\Klantgegevens');
    }
}
