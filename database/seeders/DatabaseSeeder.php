<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('plans')->insert([
            ['type' => 'SIMPLE', 'value' => 299,'cant'=> 50],
            ['type' => 'GOLD', 'value' => 1199,'cant'=> 100],
            ['type' => 'plus', 'value' => 499, 'cant' => 500]
        ]);
    }
}
