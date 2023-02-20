<?php

namespace App\Providers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('layout.site',
              function($view) {
                 $artist_d = Artist::query()->OrderByDESC('id')->limit(3)->get();
                 $artist_song = Song::with('artists')->OrderByDESC('id')->limit(5)->get();
                 $view->with(['artist_d' => $artist_d,
                              'artist_song_d' => $artist_song
                     ]);
              }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
