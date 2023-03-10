<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\City;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();
        $faker = \Faker\Factory::create();
        foreach ($cities as $city) {
            for ($i = 0; $i < 99; $i++) {
                Student::create([
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'phone' => $faker->phoneNumber,
                    'city_id' => $city->id,
                ]);
            }
        }        
    }
}

// Student::factory()->count(100)->create();