<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder{

/**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Toronto'],
            ['name' => 'Montreal'],
            ['name' => 'Ottawa'],
            ['name' => 'Quebec City'],
            ['name' => 'Vancouver'],
            ['name' => 'Ottawa'],
            ['name' => 'Edmonton'],
            ['name' => 'Calgary'],
            ['name' => 'Halifax'],
            ['name' => 'Victoria'],
            ['name' => 'Missisauga'],
            ['name' => 'Hamilton'],
            ['name' => 'Regina'],
            ['name' => 'Kingston'],
            ['name' => 'Moncton'],
        ]);
    
    }
}