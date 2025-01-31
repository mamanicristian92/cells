<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cell>
 */
class CellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private $gender=["m","f"];
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'address' => fake()->address(),
            'gender' => $this->gender[random_int(0,1)],
            'day' => random_int(0,6),
            'leader_id' => random_int(1,10),
            'country_id' => random_int(1,3),
            'state_id' => random_int(1,20),
            
        ];
    }
}
