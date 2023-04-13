<?php

namespace Database\Factories;

use App\Models\Invoices;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoicesFactory extends Factory
{
    protected $model = Invoices::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kwota' => $this->faker->numberBetween(150, 250),
            'Data Faktury' => $this->faker->dateTime()
        ];
    }
}