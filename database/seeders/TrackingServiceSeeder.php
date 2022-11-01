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
                'nameU' => fake()->sentence(2),
                
                'service' => fake()->sentence(),
                'end' => fake()->dateTime(),
                'start' => fake()->dateTime(),
                "user_id"=> fake()->randomElement([1,2,3,4,5])

                
            ],
            [
                'nameU' => fake()->sentence(2),
                
                'service' => fake()->sentence(),
                'end' => fake()->dateTime(),
                'start' => fake()->dateTime(),
                "user_id"=> fake()->randomElement([1,2,3,4,5])

                
            ],
            [
                'nameU' => fake()->sentence(2),
                
                'service' => fake()->sentence(),
                'end' => fake()->dateTime(),
                'start' => fake()->dateTime(),
                "user_id"=> fake()->randomElement([1,2,3,4,5])

                
            ],
            [
                'nameU' => fake()->sentence(2),
                
                'service' => fake()->sentence(),
                'end' => fake()->dateTime(),
                'start' => fake()->dateTime(),
                "user_id"=> fake()->randomElement([1,2,3,4,5])

                
            ],
    
            [
                'nameU' => fake()->sentence(2),
                
                'service' => fake()->sentence(),
                'end' => fake()->dateTime(),
                'start' => fake()->dateTime(),
                "user_id"=> fake()->randomElement([1,2,3,4,5])

                
            ],
            [
                'nameU' => fake()->sentence(2),
                
                'service' => fake()->sentence(),
                'end' => fake()->dateTime(),
                'start' => fake()->dateTime(),
                "user_id"=> fake()->randomElement([1,2,3,4,5])

                
            ],
            [
                'nameU' => fake()->sentence(2),
                
                'service' => fake()->sentence(),
                'end' => fake()->dateTime(),
                'start' => fake()->dateTime(),
                "user_id"=> fake()->randomElement([1,2,3,4,5])

                
            ]
            ];

            foreach ($trackings as $tracking) {
                TrackingService::create($tracking);
            }
    }
}
