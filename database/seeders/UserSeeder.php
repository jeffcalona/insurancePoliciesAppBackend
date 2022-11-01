<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Daniel Arguelles',
                'email' => 'daniel391992@gmail.com',
                'identification' => '10333',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                "identification"=> 3243234,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
               
            ],
            [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                "identification"=> 56546554,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
               
            ],
            [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                "identification"=> 766577667,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
               
            ],
    
            [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                "identification"=> 343234,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
               
            ]
            ];

            foreach ($users as $user) {
                User::create($user);
            }
         
        

}

    
}
