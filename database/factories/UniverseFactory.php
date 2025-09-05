<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Universe>
 */
class UniverseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'universe' => 'U' . $this->faker->unique()->numberBetween(6, 100),
            'company' => $this->faker->randomElement(['DC', 'Marvel']),
            'age' => $this->faker->randomElement(['silvery', 'golden', 'modern']),
        ];
    }
}

