<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path'           => fake()->imageUrl(),
            'imageable_id'   => fake()->numberBetween( 1, 3 ),
            'imageable_type' => fake()->randomElement( ['App\Models\User', 'App\Models\City'] ),
        ];
    }
}
