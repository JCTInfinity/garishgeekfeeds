<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeedText>
 */
class FeedTextFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return fake()->randomElement([
            [
                'type' => 'business-bs',
                'text' => fn() => fake()->bs,
            ],
            [
                'type' => 'color',
                'text' => fn() => fake()->colorName,
            ],
            [
                'type' => 'lorem-ipsum',
                'text' => fn() => fake()->sentence,
            ],
            [
                'type' => 'emoji',
                'text' => fn() => fake()->emoji,
            ]
        ]);
    }
}
