<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Budget>
 */
class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => fake()->numberBetween(1, 10),
            'cnpj_client' => fake()->numerify('##.###.###/####-##'),
            'client' => fake()->name(),
            'date_budget' => fake()->date(),
            'description' => fake()->randomHtml(),
            'email_client' => fake()->email(),
            'phone_client' => fake()->phoneNumber(),
            'status' => 'open',
            'value_budget' => fake()->randomFloat(2, 100, 1000),
            'reference' => fake()->text(),
        ];
    }
}
