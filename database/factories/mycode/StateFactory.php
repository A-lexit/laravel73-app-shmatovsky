<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\State;
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'likes' => $this->faker->numberBetween($min=1, $max=20),                     //2.1
            'views' => $this->faker->numberBetween($min=21, $max=100),                   //2.1
        ];
    }
}
