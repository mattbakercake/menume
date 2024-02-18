<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Receipe;
use App\Models\Grocery;
use App\Models\IngredientMeasurement;

class ingredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->truncate();

        DB::table('ingredients')->insert([
            'receipe_id' => Receipe::where('title', '=', 'jambalaya')->value('id'),
            'grocery_id' => Grocery::where('name', '=', 'Bell Peppers')->value('id'),
            'count' => 2,
            'ingredient_measurement_id' => IngredientMeasurement::where('name', '=', 'quantity')->value('id')
        ]);

        DB::table('ingredients')->insert([
            'receipe_id' => Receipe::where('title', '=', 'jambalaya')->value('id'),
            'grocery_id' => Grocery::where('name', '=', 'Chorizo')->value('id'),
            'count' => 75,
            'ingredient_measurement_id' => IngredientMeasurement::where('name', '=', 'grams (g)')->value('id')
        ]);

        DB::table('ingredients')->insert([
            'receipe_id' => Receipe::where('title', '=', 'jambalaya')->value('id'),
            'grocery_id' => Grocery::where('name', '=', 'Cajun Seasoning')->value('id'),
            'count' => 1,
            'ingredient_measurement_id' => IngredientMeasurement::where('name', '=', 'tablespoon (tbsp)')->value('id')
        ]);

        DB::table('ingredients')->insert([
            'receipe_id' => Receipe::where('title', '=', 'jambalaya')->value('id'),
            'grocery_id' => Grocery::where('name', '=', 'Tofu')->value('id'),
            'count' => 1,
            'ingredient_measurement_id' => IngredientMeasurement::where('name', '=', 'quantity')->value('id')
        ]);
    }
}
