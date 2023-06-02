<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Email>
 */
class EmailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'users_id' => $this->faker->numberBetween($min = 1, $max = 99),
            'email' => $this->faker->email(),
            'email_about' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }
}
