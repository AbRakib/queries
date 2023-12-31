<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => fake()->text( 500 ),
            'user_id' => fake()->numberBetween( 1, 3 ),
            'rating'  => fake()->numberBetween( 1, 5 ),
            'commentable_type' => fake()->randomElement(['App\Models\Room', 'App\Models\Image']),
            'commentable_id' => fake()->numberBetween(1, 10),
        ];
    }
}
