<?php

namespace Database\Factories;

use App\Models\Tests;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestsFactory extends Factory
{
    protected $model = Tests::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Pytanie' => $this->faker->sentence(3),
            'Odpowiedź' => $this->faker->sentence(3),
            'Ilość punktów' => $this->faker->numberBetween(1,3),         
        ];
    }
}