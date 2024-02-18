<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Receipe;

class ReceipeStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('receipe_steps')->truncate();

        DB::table('receipe_steps')->insert([
            'description' => 'Fry the peppers for 5 minutes until softened, add the garlic and chorizo and fry for a further minute',
            'ordinal' => '1',
            'receipe_id' => Receipe::where('title','=','jambalaya')->value('id')
        ]);

        DB::table('receipe_steps')->insert([
            'description' => 'Add the tofu and fry for a further 2 mins until it takes on the colour of the chorizo oil',
            'ordinal' => '2',
            'receipe_id' => Receipe::where('title','=','jambalaya')->value('id')
        ]);
    }
}
