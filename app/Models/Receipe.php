<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\ReceipeSteps;
use App\Models\Ingredient;

class Receipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','cook_mins','prep_mins','ease'
    ];

    public function steps(): HasMany
    {
        return $this->hasMany(ReceipeSteps::class);
    }

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class);
    }
}
