<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Post::truncate();

       for($i = 0; $i < 50; $i++){
            Post::create([
                'title' => \Faker\Factory::create()->sentence,
                'body'=> \Faker\Factory::create()->paragraph
                ]);
       }
    }
}
