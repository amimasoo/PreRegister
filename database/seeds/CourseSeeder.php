<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $generator)
    {
        for($i=0; $i<=25; $i++){
            \Illuminate\Support\Facades\DB::table('course')->insert([
                'id' => $generator->unique()->randomNumber(),
                'courseName' => $generator->name(),
                'courseCode' => $generator->randomNumber(),
                'courseOccupied'=> $generator->numberBetween(10,20),
                'courseUnit'=> $generator->numberBetween(1,4),
                'courseType' =>$generator->name(),
                'deptID' => $generator->numberBetween(1,3)
            ]);
        }
    }
}
