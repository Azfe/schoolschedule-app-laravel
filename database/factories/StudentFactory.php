<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->username(),
            'pass' => '123',
            'email' => $this->faker->email(),
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'telephone' => $this->faker->phoneNumber(),
            'nif' => $this->faker->randomNumber(8),
        ];
    }
}
