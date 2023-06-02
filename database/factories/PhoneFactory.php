<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\phone>
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $change = $this->faker->numberBetween($min = 0, $max = 1);
        if($change == 0){
            $mobilNumber = $this->faker->numerify('####');
            $phoneType = "внутренний рабочий";
        } else {
            $mobilNumber = $this->faker->e164PhoneNumber();
            $phoneType = $this->faker->randomElement($array = array ('мобильный рабочий','мобильный личный'), $count = 1);
        }

        return [
            'users_id' => $this->faker->numberBetween($min = 1, $max = 99),
            'telephone' => $mobilNumber,
            'telephone_type' => $phoneType,
        ];
    }
}
