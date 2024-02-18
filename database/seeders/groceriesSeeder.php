<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class groceriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groceries')->truncate();

        DB::table('groceries')->insert([
            'name' => 'Bell Peppers'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Chorizo'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Tofu'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Tinned Tomatoes'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Garlic'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Cajun Seasoning'
        ]);

        DB::table('groceries')->insert([
            'name' => 'Long Grain Rice'
        ]);
    }
}
