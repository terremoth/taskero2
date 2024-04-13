<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(rand(4, 15), true),
            'due_date' => fake()->dateTime('+3 years'),
            'description' => fake()->words(rand(12, 50), true),
            'completed' => fake()->boolean(),
        ];
    }
}
