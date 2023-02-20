<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['artist_name' => 'Иванушки', 'artist_slug' => 'Ivanushki'],
            ['artist_name' => 'Русский размер', 'artist_slug' => 'Russian-Size'],
            ['artist_name' => 'Руки Вверх', 'artist_slug' => 'Ryki-Vverh'],
            ['artist_name' => 'Enigma', 'artist_slug' => 'Enigma'],
        ];

        foreach ($data as $item) {
            $artist = new Artist();
            $artist->artist_name = $item['artist_name'];
            $artist->artist_slug = $item['artist_slug'];
            $artist->save();
        }
    }
}
