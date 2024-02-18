<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Grocery;
use App\Models\IngredientMeasurement;

class IngredientResource extends JsonResource
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
            'receipe_id' => $this->receipe_id,
            'grocery_id' => $this->grocery_id,
            'grocery_name' => Grocery::where('id', '=', $this->grocery_id)->value('name'),
            'count' => $this->count,
            'measurement' => IngredientMeasurement::where('id', '=', $this->ingredient_measurement_id)->value('name'),
        ];
    }
}
