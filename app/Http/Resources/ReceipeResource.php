<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\ReceipeStepsCollection;
use App\Http\Resources\IngredientCollection;

class ReceipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'prep_mins' => $this->prep_mins,
            'cook_mins' => $this->cook_mins,
            'ease' => $this->ease,
            'steps' => new ReceipeStepsCollection($this->whenLoaded('steps')),
            'ingredients' => new IngredientCollection($this->whenLoaded('ingredients'))
        ];
    }
}
