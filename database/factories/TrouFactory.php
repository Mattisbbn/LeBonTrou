<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trou>
 */
class TrouFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'depth' => fake()->randomFloat(2, 1, 100),
            'volume' => fake()->randomFloat(2, 10, 1000),
            'location' => fake()->city(),
            'diameter' => fake()->randomFloat(2, 0.5, 10),
            'description' => fake()->sentence(),  
            'category_id' => \App\Models\Category::factory(), // crée automatiquement une catégorie
        ];
    }
}
