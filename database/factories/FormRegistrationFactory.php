<?php

namespace Database\Factories;

use App\Models\FormRegistration;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FormRegistrationFactory extends Factory
{
    protected $model = FormRegistration::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
        ];
    }
}
