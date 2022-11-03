<?php

namespace Database\Seeders;

use App\Models\TrackingService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackingServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trackings = [
            [
                'nameU' => "Muevete libre",
                "description" => fake()->text(),
                "price" => 300000,
                "logo" => "images/ArrowCircleRight2-Linear-32px.svg",


                
              
                

                
            ],
            [
                'nameU' => "Utilitarios y pesados",
                "description" => fake()->text(),
                "price" => 215000,
                "logo" => "images/Bag-Linear-32px.svg",

                
            ],
            [
                'nameU' => "Autos",
                "description" => fake()->text(),
                "price" => 420000,
                "logo" => "images/Car-Linear-32px.svg",

                
            ],
            [
                'nameU' => "Bicis y patinetas",
                "description" => fake()->text(),
                "price" => 190000,
                "logo" => "images/bicicle.svg",


                
            ],
    
            [
                'nameU' => "Motos",
                "description" => fake()->text(),
                "price" => 320000,
                "logo" => "images/bicicle.svg",


                
            ],
            [
                'nameU' => "Soat",
                "description" => fake()->text(),
                "price" => 525000,
                "logo" => "images/SoatLogo.png",


                
            ],
            [
                'nameU' => "Seguro viaje",
                "description" => fake()->text(),
                "price" => 120000,
                "logo" => "images/HeartAdd-Linear-32px.svg",


                
            ],
            [
                'nameU' => "Seguro viaje",
                "description" => fake()->text(),
                "price" => 120000,
                "logo" => "Airplane-Linear-32px.svg",


                
            ],
            [
                'nameU' => "Poliza de salud",
                "description" => fake()->text(),
                "price" => 500000,
                "logo" => "images/HeartAdd-Linear-32px.svg",


                
            ],
            [
                'nameU' => "Enfermedades graves",
                "description" => fake()->text(),
                "price" => 321000,
                "logo" => "Health-Linear-32px.svg",


                
            ],
            [
                'nameU' => "Renta diaria",
                "description" => fake()->text(),
                "price" => 480000,
                "logo" => "images/coin.svg",


                
            ],
            [
                'nameU' => "Fondo ahorros",
                "description" => fake()->text(),
                "price" => 100000,
                "logo" => "images/cash-coin.svg",


                
            ],
            [
                'nameU' => "Mascotas",
                "description" => fake()->text(),
                "price" => 300000,
                "logo" => "images/Pet-Linear-32px.svg",


                
            ],
            [
                'nameU' => "Profesional salud",
                "description" => fake()->text(),
                "price" => 480000,
                "logo" => "Health-Linear-32px.svg",


                
            ],

            [
                'nameU' => "Profesionales Veterinarios",
                "description" => fake()->text(),
                "price" => 300000,
                "logo" => "images/Pet-Linear-32px.svg",


                
            ],
            [
                'nameU' => "Accidentes",
                "description" => fake()->text(),
                "price" => 480000,
                "logo" => "images/Car-Linear-32px.svg",


                
            ],

            [
                'nameU' => "Colectivo de vida",
                "description" => fake()->text(),
                "price" => 450000,
                "logo" => "images/Heart-Linear-32px.svg",


                
            ],

            [
                'nameU' => "Educacíon",
                "description" => fake()->text(),
                "price" => 450000,
                "logo" => "images/Personalcard-Linear-32px.svg",


                
            ],

            [
                'nameU' => "Exequías",
                "description" => fake()->text(),
                "price" => 325000,
                "logo" => "images/Heart-Linear-32px.svg",


                
            ],

            [
                'nameU' => "Pensión",
                "description" => fake()->text(),
                "price" => 200000,
                "logo" => "images/Heart-Linear-32px.svg",


                
            ],

            [
                'nameU' => "Renta vitalicia",
                "description" => fake()->text(),
                "price" => 200000,
                "logo" => "images/coin.svg",
               

                
            ],

            [
                'nameU' => "Seguro de vida",
                "description" => fake()->text(),
                "price" => 1200000,
                "logo" => "images/Heart-Linear-32px.svg",


                
            ],

            
            [
                'nameU' => "Seguro de hogar",
                "description" => fake()->text(),
                "price" => 1000000,
                "logo" => "images/Home-Linear-32px.svg",


                
            ],

            
            [
                'nameU' => "Seguro de arrendamiento",
                "description" => fake()->text(),
                "price" => 301000,
                "logo" => "images/Home-Linear-32px.svg",


                
            ],

            [
                'nameU' => "Seguro de arrendamiento",
                "description" => fake()->text(),
                "price" => 301000,
                "logo" => "images/Home-Linear-32px.svg",


                
            ],
            [
                'nameU' => "Seguro de arrendamiento digital",
                "description" => fake()->text(),
                "price" => 105000,
                "logo" => "images/Home-Linear-32px.svg",


                
            ],

            [
                'nameU' => "Inversión protegida",
                "description" => fake()->text(),
                "price" => 105000,
                "logo" => "images/coin-cash.svg",


                
            ],
            
            [
                'nameU' => "Protección digital",
                "description" => fake()->text(),
                "price" => 85000,
                "logo" => "images/KyberNetwork-Linear-32px.svg",


                
            ],
            ];

            foreach ($trackings as $tracking) {
                TrackingService::create($tracking);
            }
    }
}
