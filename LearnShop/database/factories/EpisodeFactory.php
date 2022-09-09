<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{

//    public function autoIncreament()
//    {
//        for($i=1; $i<100; $i++)
//        {
//            yield $i;
//        }
//    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $x=1;
        return [
            'user_id' => User::all()->random()->id,
            'title' => fake()->sentence(),
            'video_path' => fake()->url,
            'duration' => fake()->numberBetween(15,72000),
            'number' => $x++,
        ];
    }
}
