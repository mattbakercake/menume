<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class IngredientMeasurementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredient_measurements')->truncate();

        DB::table('ingredient_measurements')->insert([
            'name' => 'milligrams (mg)'
        ]);

        DB::table('ingredient_measurements')->insert([
            'name' => 'grams (g)'
        ]);

        DB::table('ingredient_measurements')->insert([
            'name' => 'millilitres (ml)'
        ]);

        DB::table('ingredient_measurements')->insert([
            'name' => 'centilitres (cl)'
        ]);

        DB::table('ingredient_measurements')->insert([
            'name' => 'litres (l)'
        ]);

        DB::table('ingredient_measurements')->insert([
            'name' => 'quantity'
        ]);

        DB::table('ingredient_measurements')->insert([
            'name' => 'pinch'
        ]);

        DB::table('ingredient_measurements')->insert([
            'name' => 'tablespoon (tbsp)'
        ]);

        DB::table('ingredient_measurements')->insert([
            'name' => 'teaspoon (tsp)'
        ]);
    }
}
