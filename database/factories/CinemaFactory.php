<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cinema>
 */
class CinemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Generate a 3-word title
            'director' => $this->faker->name,
            'genre' => $this->faker->randomElement(['Action', 'Comedy', 'Drama', 'Thriller', 'Animation', 'Sci-Fi']),
            'date' => $this->faker->year, // Random year
            'rating' => $this->faker->numberBetween(1.0, 5.0), // Rating between 1 and 5
            'duration' => $this->faker->numberBetween(90, 180), // Duration in minutes (1.5 - 3 hours)
            'synopsis' =>$this->faker->paragraph(2), // Generate a 2-paragraph synopsis
            'studio' =>$this->faker->company,
        ];
    }
}
