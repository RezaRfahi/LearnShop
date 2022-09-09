<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\EpisodeComment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleComment>
 */
class ArticleCommentFactory extends Factory
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
            'episode_id' => Article::all()->random()->id,
            'parent_id' => fake()->boolean(85) ? null :
                ArticleComment::all()->random()->id,
        ];
    }
}
