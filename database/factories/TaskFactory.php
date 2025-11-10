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
            'name' => fake()->realTextBetween(15, 30),
            'text' => fake()->realTextBetween(50, 100),
            'expiration_at' => fake()->dateTimeBetween('-2 week', '+2 week')
        ];
    }
}
