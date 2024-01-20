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
            'content'=> 'comment 1',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 1',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 1',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 1',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Comment::create([
            'content'=> 'comment 1',
            'user_id' => 1,
            'post_id' => 1,
        ]);
    }
}
