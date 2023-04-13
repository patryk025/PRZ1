<?php

namespace Database\Factories;

use App\Models\Timetable;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimetableFactory extends Factory
{
    protected $model = Timetable::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nazwa_zajec' => $this->faker->sentence(3),
            'opis_zajec' => $this->faker->paragraph(3),
            'data_rozpoczecia' => $this->faker->dateTimeBetween('now', '+1 week'),
            'data_zakonczenia' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
        ];
    }
}