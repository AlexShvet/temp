<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genderForTable = $this->faker->randomElement($array = array ('m','f'));
        if($genderForTable == 'm') {
            $nameWithGender = $this->faker->firstName($gender = 'male');
        } else {
            $nameWithGender = $this->faker->firstName($gender = 'female');
        }

        $firstName = $this->faker->firstName($gender = "$nameWithGender");
        $middleName = $this->faker->firstName($gender = "$nameWithGender");
        $lastName = $this->faker->lastName();
        $name = $firstName[0] . '.' . $lastName;

        $day = $this->faker->numberBetween($min = 1, $max = 31);
        if($day < 10){
            $day = 0 . $day;
        }
        $month = $this->faker->numberBetween($min = 1, $max = 12);
        if($month < 10){
            $month = 0 . $month;
        }
        $birthday = $day . $month;
        
        return [
            'name' => $name,
            'gender' => $genderForTable,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'middle_name' => $middleName,
            'birthday' => $birthday,
            'hide' => $this->faker->boolean(),
            'thumbnail' => $this->faker->boolean(),
            'cn' => $firstName . ' ' . $middleName . ' ' . $lastName,
            'city' => $this->faker->city(),
            'note' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'company_name' => $this->faker->company(),
            'company_type' => $this->faker->randomElement($array = array ('ООО','ОАО','АНО', 'ЗАО'), $count = 1),
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'department' => $this->faker->catchPhrase(),                     
        ];
    }

   
}
