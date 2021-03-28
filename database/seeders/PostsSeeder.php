<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $posts= Post::factory(100)->create();
        
       foreach($posts as $post) {
        Image::factory(1)->create([
            'imageblae_id'=>$post->id,
            'imageblae_type'=>Post::class
            ]);
            $post->tag()->attach([

                rand(1,4),
                rand(5,8)
            ]);
       }
    
    }
}
