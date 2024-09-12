<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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
            //
            'name' => $this->faker->randomElement(['Sabritas', 'Pepsi', 'Coca cola']),
            'description' => $this->faker->paragraph(2),
            'amount' => $this->faker->randomNumber(3, true),
            'price' => $this->faker->randomFloat(2, 20, 30),
            'category' => $this->faker->randomElement(['Resfrescos', 'Botana']),
        ];
    }
}
