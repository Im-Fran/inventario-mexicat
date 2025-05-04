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
        'nombre' => fake()->name()
        'precio' => fake->randomFloat(2, 5, 100),
        'cantidad' => fake->numberBetween(1, 20),
        'imagen' => fake->imageUrl(300, 300, 'technics', true),
        ];
    }
}
