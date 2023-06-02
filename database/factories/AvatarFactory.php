<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avatar>
 */
class AvatarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        //$faker = Faker::create();
        //$faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));

        return [
            'users_id' => $this->faker->numberBetween($min = 1, $max = 99),
            'image' => $this->faker->imageUrl(500,500, true),
            'image_type' => $this->faker->randomElement($array = array ('jpg','png','gif'), $count = 1),
        ];
    }
}
