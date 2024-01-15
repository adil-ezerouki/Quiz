<?php

namespace Database\Seeders;

use App\Models\Feeling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeelingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $feelings = [
            '1F600' => 'Joyful',
            '1F601' => 'Cheerful',
            '1F602' => 'Amused',
            '1F603' => 'Happy',
            '1F604' => 'Smiling',
            '1F605' => 'Lighthearted',
            '1F606' => 'Grinning',
            '1F607' => 'Angelic',
            '1F608' => 'Mischievous',
            '1F609' => 'Winking',
            '1F60A' => 'Content',
            '1F60B' => 'Delighted',
            '1F60C' => 'Relieved',
            '1F60D' => 'Adoring',
            '1F60E' => 'Cool',
            '1F60F' => 'Smirking',
            '1F610' => 'Neutral',
            '1F611' => 'Expressionless',
            '1F612' => 'Unimpressed',
            '1F613' => 'Anxious',
            '1F614' => 'Disappointed',
            '1F615' => 'Confused',
            '1F616' => 'Frustrated',
            '1F617' => 'Kissing',
            '1F61B' => 'Playful',
            '1F61D' => 'Cheeky',
            '1F61E' => 'Disapproving',
            '1F61F' => 'Worried',
            '1F620' => 'Angry',
            '1F621' => 'Furious',
            '1F622' => 'Crying',
            '1F623' => 'Suffering',
            '1F626' => 'Frowning',
            '1F627' => 'Anguished',
            '1F628' => 'Fearful',
            '1F629' => 'Weary',
            '1F62A' => 'Sleepy',
            '1F62B' => 'Tired',
            '1F62C' => 'Grimacing',
            '1F62D' => 'Sobbing',
            '1F62E' => 'Surprised',
            '1F62F' => 'Astonished',
            '1F630' => 'Anxious with Sweat',
            '1F631' => 'Screaming',
            '1F632' => 'Astounded',
            '1F633' => 'Flushed with Embarrassment',
            '1F634' => 'Sleeping',
            '1F635' => 'Dizzy',
            '1F636' => 'Muted',
            '1F637' => 'Masked',
        ];


        foreach($feelings as $key=>$value) {
            Feeling::create([

                'code' => $key,
                'description' => $value

        ]);
        }
    }
}
