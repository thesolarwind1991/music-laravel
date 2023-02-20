<?php

namespace App\Http\Controllers;

use App\Models\Albom;
use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @OA\Get(
     *      path="/artists",
     *      operationId="ActionArtists",
     *      tags={"Channels"},
     *      summary="Получение всех доступных певцов-артистов",
     *      description="Метод возвращает данные",
     *     @OA\Parameter(
     *
     *      ),
     *     @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *     @OA\JsonContent(ref="#/components/schemas/Channel")
     *       ),
     *     )
     */
    public function ActionArtists() {
       $artists = Artist::all();
       return view('sites.artists', compact('artists'));
    }

    /**
     * * @OA\Get(
     *      path="/alboms/",
     *      operationId="ActionAlboms",
     *      tags={"Channels"},
     *      summary="Получить список всех альбомов и песен из данных альбомов",
     *      description="Получаем список всех альбомов и песен",
     *     @OA\Response(
     *         response=200,
     *          description="successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Channel")
     *       ),
     *     )
     */
    public function ActionAlboms() {
        $alboms = Albom::with('artists')->with('songs')->
                         get();
        return view('sites.alboms', compact('alboms'));
    }

    /**
     * * @OA\Get(
     *      path="/songs/",
     *      operationId="ActionSongs",
     *      tags={"Channels"},
     *      summary="Получить список всех песен с подписями исполнителей",
     *      description="Получаем список всех песен",
     *     @OA\Response(
     *         response=200,
     *          description="successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Channel")
     *       ),
     *     )
     */
    public function ActionSongs() {
        $songs = Song::with('artists')->get();
        return view('sites.songs', compact('songs'));
    }


}
