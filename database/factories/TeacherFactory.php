<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
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
            'niy' => fake()->numerify('##########'),
            'subjects' => fake()->randomElement([
                'Pendidikan Agama dan Budi Pekerti',
                'Pendidikan Pancasila',
                'Bahasa Indonesia',
                'Pendidikan Jasmani Olahraga dan Kesehatan',
                'Sejarah',
                'Bahasa Jawa',
                'Baca Tulis Al-Qur\'an',
                'Matematika',
                'Bahasa Inggris',
                'Projek Kreatif dan Kewirausahaan',
                'Bahasa Jepang',
                'Internet of Things (IoT)',
                'Game Development',
                'Mobile Development',
                'Web Development',
                'Informatika'
            ]),
            'start_date' => fake()->date(),
        ];
    }
}
