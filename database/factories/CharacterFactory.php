<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name,
            'real_name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Not Applicable']),
            'universe_id' => Universe::factory(), // genera un universo si no existe
        ];
    }
}
