<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ArtistsTableSeeder::class);
        $this->command->info('Таблица певцов-артистов загружена данными!');

        $this->call(AlbomTableSeeder::class);
        $this->command->info('Таблица альбомов загружена данными!');

        $this->call(SongsTableSeeder::class);
        $this->command->info('Таблица песен загружена данными!');

        $this->call(Alboms_SongsTableSeeder::class);
        $this->command->info('Таблица альбом-песни загружена данными!');

        $this->call(Artists_SongsTableSeeder::class);
        $this->command->info('Таблица исполнитель-песня загружена данными!');
    }
}
