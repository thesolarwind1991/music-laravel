<?php

namespace Database\Seeders;

use App\Models\Albom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AlbomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            /*1 */[
                'albom_name' => 'Конечно он',
                'albom_slug' => 'Konechno-on',
                'artist_id' => 1,
                'albom_year' => '1996',

            ],
            /*2*/[
                'albom_name' => 'Подожди меня',
                'albom_slug' => 'Podojdi-mena',
                'artist_id' => 1,
                'albom_year' => '2000',

            ],
            /*3*/[
                'albom_name' => '10 лет во Вселенной',
                'albom_slug' => '10-let-vo-Vselennoi',
                'artist_id' => 1,
                'albom_year' => '2005',

            ],
            /*4*/[
                'albom_name' => 'Ю-А-Ю',
                'albom_slug' => 'I-A-I',
                'artist_id' => 2,
                'albom_year' => '1994',

            ],
            /*5*/[
                'albom_name' => 'Восходящие воздушные потоки',
                'albom_slug' => 'Vosxodashie-vozdushnie-potoki',
                'artist_id' => 2,
                'albom_year' => '2003',

            ],
            /*6*/[
                'albom_name' => 'Здравствуй, это я',
                'albom_slug' => 'Zdravstvyi-eto-i',
                'artist_id' => 3,
                'albom_year' => '2000',

            ],
            /*7*/[
                'albom_name' => 'The Best',
                'albom_slug' => 'The-Best',
                'artist_id' => 3,
                'albom_year' => '2013',

            ],
            /*8*/[
                'albom_name' => 'Seven Lives, Many Faces',
                'albom_slug' => 'SevenLivesManyFaces',
                'artist_id' => 4,
                'albom_year' => '2008',

            ],
       ];

        foreach ($data as $item) {
            $albom = new Albom();
            $albom->albom_name = $item['albom_name'];
            $albom->albom_slug = $item['albom_slug'];
            $albom->artist_id = $item['artist_id'];
            $albom->albom_year = $item['albom_year'];
            $albom->save();
        }
    }
}
