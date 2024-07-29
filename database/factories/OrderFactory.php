<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            //
            'totalPrice' => $this->faker->randomFloat(2,1,10000), 
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'cancelled']), 
            'user_id' => User::inRandomOrder()->first()->user_id, 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}