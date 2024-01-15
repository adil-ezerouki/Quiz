<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            '1F6B4' => 'Biking',
            '1F3CB' => 'Lifting Weights',
            '1F3CC' => 'Swinging Golf Clubs',
            '1F6A3' => 'Rowing',
            '1F3C4' => 'Surfing',
            '1F3CA' => 'Swimming',
            '1F6B5' => 'Mountain Biking',
            '1F3AF' => 'Throwing Darts',
            '1F3B3' => 'Bowling',
            '26BD' => 'Playing Soccer',
            '1F3C0' => 'Playing Basketball',
            '1F3C8' => 'Playing American Football',
            '26BE' => 'Playing Baseball',
            '1F3BE' => 'Playing Tennis',
            '1F3D0' => 'Playing Volleyball',
            '1F3D3' => 'Playing Ping Pong',
            '1F3F8' => 'Playing Badminton',
            '1F94A' => 'Boxing',
            '1F94B' => 'Practicing Martial Arts',
            '26F8' => 'Ice Skating',
            '1F3BF' => 'Skiing',
            '1F3C2' => 'Snowboarding',
            '1F3C2' => 'Snowboarding',
            '1F3C7' => 'Horse Racing',
            '1F3C6' => 'Winning a Trophy',
            '1F947' => 'Winning a Gold Medal',
            '1F948' => 'Winning a Silver Medal',
            '1F949' => 'Winning a Bronze Medal',
            '1F3AE' => 'Gaming',
            '1F579' => 'Playing Arcade Games',
            '1F3B2' => 'Rolling Dice',
            '1F0CF' => 'Playing Cards',
            '1F3A7' => 'Listening to Music',
            '1F3A4' => 'Singing',
            '1F3B5' => 'Playing Musical Notes',
            '1F3B6' => 'Playing Musical Notes',
            '1F3B9' => 'Playing the Piano',
            '1F3BA' => 'Playing the Trumpet',
            '1F3B7' => 'Playing the Saxophone',
            '1F3B8' => 'Playing the Guitar',
            '1F3BB' => 'Playing the Violin',
            '1F941' => 'Playing the Drum',
            '1F3AC' => 'Directing a Movie',
            '1F3A5' => 'Filming',
            '1F3AD' => 'Performing Arts',
            '1F3A8' => 'Creating Art',
            '1F5BC' => 'Framing Pictures',
            '1F3A4' => 'Using a Microphone',
            '1F3AB' => 'Holding a Ticket',
            '1F39F' => 'Holding an Admission Ticket',
            '1F3A2' => 'Riding a Roller Coaster',
            '1F3A1' => 'Riding a Ferris Wheel',
            '1F3A0' => 'Riding a Carousel Horse',
        ];


        foreach ($activities as $key => $value) {
            Activity::create([

                'code' => $key,
                'description' => $value

            ]);
        }
    }
}
