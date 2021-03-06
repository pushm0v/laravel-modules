<?php

use Illuminate\Database\Seeder;
use App\Models\Users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        Users::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('password');

        Users::create([
            'id' => $faker->uuid,
            'name' => 'admin',
            'username' => 'admin',
            'password' => $password,
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            Users::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'username' => $faker->username,
                'password' => $password,
            ]);
        }
    }
}
