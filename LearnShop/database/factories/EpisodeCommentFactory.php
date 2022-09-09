<?php

namespace Database\Factories;

use App\Models\Episode;
use App\Models\EpisodeComment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EpisodeComment>
 */
class EpisodeCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'episode_id' => Episode::all()->random()->id,
            'parent_id' => null
//                fake()->boolean(85) ? null :
//                EpisodeComment::all()->random()->id,
        ];
    }
}
