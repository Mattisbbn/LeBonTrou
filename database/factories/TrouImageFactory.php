<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrouImage>
 */
class TrouImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_path' => 'images/trous/'.$this->faker->image('public/images/trous',640,480,null,false),
            'name' => $this->faker->word,
        ];
    }
}
