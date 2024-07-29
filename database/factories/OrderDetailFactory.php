<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
            'quantity' => $this->faker->numberBetween(1,20), //số lượng product đc đặt 
            'price'=> $this->faker->randomFloat(2,2,100), //đơn giá của 1 sp
            'order_id' => Order::inRandomOrder()->first()->order_id, 
            'product_id' => Product::inRandomOrder()->first()->product_id, 
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}