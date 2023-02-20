<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class Artists_SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[1] = [
                ['song_id' => 1],
                ['song_id' => 2],
                ['song_id' => 3],
                ['song_id' => 4],
              ];

        $data[2] = [
                     [ 'song_id' => 5],
                     ['song_id' => 6],
                     ['song_id' => 7],
                     ['song_id' => 8],
                     ['song_id' => 9],
            ];

        $data[3] = [
                      ['song_id' => 10],
                      ['song_id' => 11],
                      ['song_id' => 12],
                      ['song_id' => 13],
                   ];

        $data[4] = [
                       ['song_id' => 14],
                       ['song_id' => 15],
                   ];

        foreach (Artist::all() as $artist) {
            foreach ($data[$artist->id] as $item)
            {
               $artist->songs()->attach($item['song_id']);
            }
        }
    }
}
