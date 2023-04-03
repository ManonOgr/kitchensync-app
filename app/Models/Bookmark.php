<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bookmark extends Model
{
    use HasFactory;

    public function ressource(): HasOne 
    {
        return $this->hasOne(Ressource::class);
    }

    public function categorie(): BelongsTo 
    {
        return $this->belongsTo(Categorie::class);
    }
}

