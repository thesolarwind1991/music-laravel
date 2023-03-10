<?php

use Illuminate\Support\Facades\Route;
use App\Models\Artist;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('artists/', [MainController::class, 'ActionArtists'])->name('artists');

Route::get('alboms/', [MainController::class, 'ActionAlboms'])->name('alboms');

Route::get('songs/', [MainController::class, 'ActionSongs'])->name('songs');

Route::get('about/', function() {
    return view('sites.about');
})->name('about');
