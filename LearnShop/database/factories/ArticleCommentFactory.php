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
            'article_id' => Article::all()->random()->id,
            'body' => fake()->text(),
            'parent_id' => null
//                fake()->boolean(80) ? null :
//                ArticleComment::all()->random()->id,
        ];
    }
}
