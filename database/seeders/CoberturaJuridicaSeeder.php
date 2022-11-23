<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoberturaJuridicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users  = User::all();
        $coberturas = [
            [
                "plan"=> fake()->text(),
                "price"=> fake()->randomElement([1100000, 2000000,3000000]),
                "fullNameP"=> fake()->name,
                "identificationP"=> fake()->randomElement([10, 10]),
                "directionP" => fake()->randomElement([7, 8]),
                "phoneP" => fake()->randomElement([10, 10]),
                "nitC" => fake()->randomElement([10, 10]),
                "directionC" => fake()->randomElement([7, 8]),
                "cityC"=> fake()->randomElement(["Medellin", "cali", "Bogota", "Barranquilla"]),
                "procedureTipe"=> fake()->randomElement(["Quirúrgico", "Estético"])
            ],
        
            [
                "plan"=> fake()->text(),
                "price"=> fake()->randomElement([1100000, 2000000,3000000]),
                "fullNameP"=> fake()->name,
                "identificationP"=> fake()->randomElement([10,434,43, 10]),
                "directionP" => fake()->randomElement([7,6454,6565, 8]),
                "phoneP" => fake()->randomElement([10,5454,5654,4543, 10]),
                "nitC" => fake()->randomElement([10,56,5434,345, 10]),
                "directionC" => fake()->randomElement([7,54564,3434, 8]),
                "cityC"=> fake()->randomElement(["Medellin", "cali", "Bogota", "Barranquilla"]),
                "procedureTipe"=> fake()->randomElement(["Quirúrgico", "Estético"])

            ],
            [
                "plan"=> fake()->text(),
                "price"=> fake()->randomElement([1100000, 2000000,3000000]),
                "fullNameP"=> fake()->name,
                "identificationP"=> fake()->randomElement([10,3243,6554,545, 10]),
                "directionP" => fake()->randomElement([7,3443,43 ,4354,8]),
                "phoneP" => fake()->randomElement([10,23342,2343, 10]),
                "nitC" => fake()->randomElement([10, 10]),
                "directionC" => fake()->randomElement([7, 8]),
                "cityC"=> fake()->randomElement(["Medellin", "cali", "Bogota", "Barranquilla"]),
                "procedureTipe"=> fake()->randomElement(["Quirúrgico", "Estético"])
            ]
            ];
       
        foreach ($users as $user) {

            foreach ($coberturas as $cobertura) {
                $user->coberturas()->create($cobertura);
            }
                
           
        }
    }
}
