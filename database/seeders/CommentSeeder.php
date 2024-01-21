<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'content'=> 'comment 1',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 2',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 3',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 4',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 5',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 6',
            'user_id' => 1,
            'post_id' => 1,
        ]);
    }
}
