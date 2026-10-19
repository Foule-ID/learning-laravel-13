<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nis' => fake()->unique()->randomNumber(5, false),
            'classroom' => fake()->randomElement(['11 pplg 1', '11 pplg 2', '11 pplg 3']),
            'address' => fake()->address(),
        ];
    }
}
