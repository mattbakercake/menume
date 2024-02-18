<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('receipes')->truncate();

        DB::table('receipes')->insert([
            'title' => 'Jambalaya',
            'prep_mins' => '15',
            'cook_mins' => '35',
            'ease' => 1
        ]);
    }
}
