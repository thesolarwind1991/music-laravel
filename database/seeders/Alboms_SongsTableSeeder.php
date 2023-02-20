<?php

namespace Database\Seeders;

use App\Models\Albom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Alboms_SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albom[1] = [
            ['song_id' => 1],
            ['song_id' => 2],
            ['song_id' => 3],
        ];
        $albom[2] = [
            ['song_id' => 2],
        ];
        $albom[3] = [
            ['song_id' => 2],
            ['song_id' => 3],
            ['song_id' => 4],
        ];

        $albom[4] = [
            ['song_id' => 5],
            ['song_id' => 6],
            ['song_id' => 7],
            ['song_id' => 8],
        ];
        $albom[5] = [
            ['song_id' => 9],
        ];

        $albom[6] = [
            ['song_id' => 10],
            ['song_id' => 11],
        ];
        $albom[7] = [
            ['song_id' => 12],
            ['song_id' => 13],
        ];

        $albom[8] = [
            ['song_id' => 14],
            ['song_id' => 15],
        ];

        foreach (Albom::all() as $al) {
            foreach ($albom[$al->id] as $item)
            {
                $al->songs()->attach($item['song_id']);
            }
        }

    }
}
