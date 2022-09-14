<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private int $i=1;

    public function definition()
    {
        return [
            'course_id' => Course::all()->random()->id,
            'title' => fake()->sentence(),
            'video_path' => fake()->url,
            'duration' => fake()->numberBetween(15,72000),
            'number' => $this->i++
        ];
    }
}
