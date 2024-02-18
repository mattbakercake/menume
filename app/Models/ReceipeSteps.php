<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Receipe;

class ReceipeSteps extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'ordinal'
    ];

    public function receipe(): BelongsTo
    {
        return $this->belongsTo(Receipe::class);
    }
}
