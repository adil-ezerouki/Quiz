<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id'=> 1,
            'postContent' => 'hi this is post 1',
            'postMeidaPath' => 'posts/1RRCeJxTHLkxukd1zPN7nBQrSr3aAha0qgGD0po2.jpg',
            'feeling_id' => 1,
            'tag' => 'friend 1',
            'location' => 'new york',
            'visibility' => 'public',
        ]);

        Post::create([
            'user_id'=> 1,
            'postContent' => 'hi this is post 2',
            'postMeidaPath' => 'posts/1RRCeJxTHLkxukd1zPN7nBQrSr3aAha0qgGD0po2.jpg',
            'activity_id' => 1,
            'tag' => 'friend 2',
            'location' => 'paris',
            'visibility' => 'friends',
        ]);


    }
}
