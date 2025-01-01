<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'synopsis' => $this->faker->text(),
            'poster' => $this->faker->imageUrl(),
            'stock' => $this->faker->randomNumber(1, 8),
            'available' => true,
            'genre_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
