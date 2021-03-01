<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         public function run(Faker $faker)
    {
        for ($i=0; $i < 45; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->sentence(5);
            $newPost->body = $faker->text(200);
            $newPost->slug = Str::slug($newPost->title);
            $newPost->save();
        }
    }
    }
}