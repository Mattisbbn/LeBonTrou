<?php

namespace Database\Factories;

use App\Models\Trou;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'trou_id' => Trou::factory(), // ou à passer dans create([...])
            'name' => $this->faker->randomElement(['Express', 'Standard', 'Économique']),
            'time_to_ship' => $this->faker->numberBetween(1, 14), // jours
        ];
    }
}
