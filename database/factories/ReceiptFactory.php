<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receipt>
 */
class ReceiptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value'        => fake()->randomFloat(2, 1, 1000),
            'date'         => fake()->date(),
            'user_id'      => fake()->numberBetween(1, 10),
            'payer'        => fake()->name,
            'cpf_payer'    => fake()->numerify('###.###.###-##'),
            'referent'     => fake()->text(100),
            'city'         => fake()->city(),
            'sender'       => fake()->name,
            'cpf_sender'   => fake()->numerify('###.###.###-##'),
            'phone_sender' => fake()->phoneNumber(),
            'type_payment' => fake()->numberBetween(0, 3),
            'company_id'   => fake()->numberBetween(1, 10),
        ];
    }
}
