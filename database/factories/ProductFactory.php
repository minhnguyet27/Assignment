<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        return [
            'name' => $this->faker->word, // Tạo một tên sản phẩm ngẫu nhiên
            'description' => $this->faker->sentence, // Mô tả sản phẩm
            'price' => $this->faker->randomFloat(2, 1, 100000), // Giá sản phẩm, số thực với 2 chữ số thập phân
            'image_url' => $this->faker->imageUrl(),
            'quantity' => $this->faker->numberBetween(1,999),  // Số lượng trong kho
            'view'=>$this->faker->numberBetween(1,1000),//Lượt xem 
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}