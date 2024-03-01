<?php

namespace Database\Factories;

use App\Models\Adress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_company' => fake()->name(),
            'cnpj' => fake()->numerify('##.###.###/####-##'),
            'phone' => fake()->phoneNumber(),
            'photo' => fake()->imageUrl(),
            'email' => fake()->email(),
            'description' => fake()->text(),
            'adress_id' => Adress::factory(),
            'instagram' => fake()->userName(),
            'slogan' => fake()->text(),
            'marca_dagua' => fake()->imageUrl(),
        ];
    }
}
