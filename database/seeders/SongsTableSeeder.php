<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            /*1*/ ['song_name' => 'Малина'],
            /*2*/  ['song_name' => 'Вселенная'],
            /*3*/ ['song_name' => 'Вселенная (REMIX)'],
            /*4*/['song_name' => 'Тополинный пух'],

            /*5*/['song_name' => 'Пуск'],
            /*6*/['song_name' => 'Звездный полицай'],
            /*7*/['song_name' => 'Бэтмен'],
            /*8*/['song_name' => 'Когда его нет рядом'],
            /*9*/['song_name' => 'Извини'],

            /*10*/['song_name' => 'Здравствуй, это я'],
            /*11*/['song_name' => 'Алеша'],
            /*12*/['song_name' => 'Он тебя целует'],
            /*13*/['song_name' => 'Думала'],

            /*14*/['song_name' => 'Seven Lives'],
            /*15*/['song_name' => 'Touchness'],
        ];

        foreach ($data as $item) {
            $artist = new Song();
            $artist->song_name = $item['song_name'];
            $artist->save();
        }
    }
}
