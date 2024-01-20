<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Like::create([
            'type'=> 'like',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Like::create([
            'type'=> 'love',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Like::create([
            'type'=> 'like',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Like::create([
            'type'=> 'love',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Like::create([
            'type'=> 'care',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Like::create([
            'type'=> 'love',
            'user_id' => 1,
            'post_id' => 1,
        ]);
    }
}
