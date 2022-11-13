<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       Post::factory(100)->create()->each(function(Post $post){

          Image::factory(4)->create([

            'imageable_id'=>$post->id,
            'imageable_type'=>Post::class

          ]);

          $post->tags()->attach([ //se agregan registros a la tabla post_tag relacion de muchos a muchos
            rand(1, 4),
            rand(5, 8)
          ]);
       });

    }
}
