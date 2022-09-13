<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CourseUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                UserSeeder::class,
                ArticleSeeder::class,
                CourseSeeder::class,
//                EpisodeSeeder::class,
                UserCourseSeeder::class,
                ArticleCommentSeeder::class,
//                EpisodeCommentSeeder::class
            ]
        );
    }
}
