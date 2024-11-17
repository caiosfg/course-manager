<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'category' => randomElements(['easy', 'medium', 'hard']),
            'active' => fake()->boolean(),
            'start_date' => now(),
            'end_date' => now(),
            'vacancies' => fake()->randomDigit(),
            'price' => randomFloat(2, 1, 100),
        ];
    }
}
