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
        Feeling::create([

                'state' => 'happy',
                'code' => '128516',
            
        ]);
    }
}
