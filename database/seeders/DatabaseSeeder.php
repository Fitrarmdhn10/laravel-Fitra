<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(){
    $faker = \Faker\Factory::create();

    foreach (range(1, 100) as $index) {
        DB::table('pelanggan')->insert([
            'first_name' => $faker->firstName,
            'last_name'  => $faker->lastName,
            'birthday'   => $faker->date('Y-m-d', '2005-12-31'),
            'gender'     => $faker->randomElement(['Male', 'Female', 'Other']),
            'email'      => $faker->unique()->safeEmail,
            'phone'      => $faker->phoneNumber,
        ]);
    }
}
}
