<?php

use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;

use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        for($i=0; $i<=10; $i++){

           \Illuminate\Support\Facades\DB::table('users')->insert([
               'id' => $faker->unique()->randomNumber(),
               'firstName' => $faker->name(),
               'lastName' => $faker->name(),
               'studentID' => $faker->randomNumber(),
               'entryYear' => $faker->randomNumber(),
               'takenUnitsNumber' => $faker->numberBetween(10,20),
               'deptID' => $faker->numberBetween(1,3),
               'email' => $faker->unique()->randomNumber().'@gmail.com',
               'password' => \Illuminate\Support\Facades\Hash::make('secret'),
               'remember_token' => str_random(10),
           ]);
        }
    }
}
