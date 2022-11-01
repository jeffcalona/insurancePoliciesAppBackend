<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = [
            [
                'name' => fake()->name(),
                
                'identification' => '10333',
                
            ],
            [
                'name' => fake()->name(),
                
                "identification"=> 3243234,
                 // password
               
            ],
            [
                'name' => fake()->name(),
                
                "identification"=> 56546554,
                 // password
               
            ],
            [
                'name' => fake()->name(),
                
                "identification"=> 766577667,
                 // password
               
            ],
    
            [
                'name' => fake()->name(),
                
                "identification"=> 343234,
                // password
               
            ],
            [
                'name' => fake()->name(),
                
                "identification"=> 3432234,
                // password
               
            ],
            [
                'name' => fake()->name(),
                
                "identification"=> 33345,
                // password
               
            ]
            ];

            foreach ($doctors as $doctor) {
                Doctor::create($doctor);
            }
    }
}
