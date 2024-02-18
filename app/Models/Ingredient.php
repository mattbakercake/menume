<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Grocery;
use App\Models\Receipe;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ingredient extends Model
{
    use HasFactory;

    public function grocery(): HasOne
    {
        return $this->hasOne(Grocery::class);
    }

    public function receipe(): BelongsTo
    {
        return $this->BelongsTo(Receipe::class);
    }
}
