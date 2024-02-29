<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adress>
 */
class AdressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city' => fake()->city(),
            'state' => fake()->streetAddress(),
            'street' => fake()->streetAddress(),
            'number' => fake()->numberBetween(1, 1000),
            'complement' => fake()->address(),
            'cep' => fake()->numerify('#####-###'),
            'neighborhood' => fake()->streetName(),
        ];
    }
}
