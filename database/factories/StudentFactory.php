<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $name = $this->faker->name;
        return [
            "name"=> $name,
            "age"=>$this->faker->numberBetween(18, 100),
            "address" => $faker->address,
            "telephone" => $faker->phoneNumber,
        ];
    }
}
