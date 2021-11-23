<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $class = ['1A', '1B', '1C', '2A', '2B', '2C'];

        return [
            'name' => $this->faker->name(),
            'score' => [
                'MTK' => $this->faker->numberBetween(0, 100),
                'Bhs. Indonesia' => $this->faker->numberBetween(0, 100),
                'Bhs. Inggris' => $this->faker->numberBetween(0, 100),
                'Kompetensi' => $this->faker->numberBetween(0, 100),
            ],
            'class' => $class[array_rand($class, 1)]
        ];
    }
}
