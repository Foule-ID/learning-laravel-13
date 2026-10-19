<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        // Daftar seluruh kombinasi kelas 10, 11, dan 12
        $name = fake()->unique()->randomElement([
            '10 PPLG 1', '10 PPLG 2',
            '10 ANIMASI 1', '10 ANIMASI 2', '10 ANIMASI 3', '10 ANIMASI 4', '10 ANIMASI 5',
            '10 DKV 1', '10 DKV 2', '10 DKV 3', '10 DKV 4', '10 DKV 5', '10 DKV 6',

            '11 PPLG 1', '11 PPLG 2', '11 PPLG 3',
            '11 ANIMASI 1', '11 ANIMASI 2', '11 ANIMASI 3', '11 ANIMASI 4', '11 ANIMASI 5',
            '11 DKV 1', '11 DKV 2', '11 DKV 3', '11 DKV 4', '11 DKV 5', '11 DKV 6',

            '12 PPLG 1', '12 PPLG 2',
            '12 ANIMASI 1', '12 ANIMASI 2', '12 ANIMASI 3', '12 ANIMASI 4', '12 ANIMASI 5',
            '12 DKV 1', '12 DKV 2', '12 DKV 3', '12 DKV 4', '12 DKV 5', '12 DKV 6',
        ]);

        $parts = explode(' ', $name);
        $major = $parts[1];

        return [
            'name' => $name,
            'major' => $major,
        ];
    }
}
