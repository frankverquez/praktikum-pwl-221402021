<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();
        $i;

        for($i = 1; $i <= 10; $i++){
            $posts [] = [
                'title'      => $faker->sentence,
                'excerpt'    => $faker->paragraph,
                'content'    => $faker->text,
                'image'      => $faker->imageUrl($width = 640, $height = 480),
                'author_id'  => $faker->numberBetween(1,10)
            ];
        }

        DB::table("posts")->insert($posts);
    }
}
