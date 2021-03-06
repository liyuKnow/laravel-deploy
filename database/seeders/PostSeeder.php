<?php

namespace Database\Seeders;

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
        //
        Post::create([
            'title' => 'Post 8',
            'slug' => 'post-8',
            'content' => 'Post 8 content',
            'image' => 'https://i.pravatar.cc/150?img=32'
        ]);
    }
}
