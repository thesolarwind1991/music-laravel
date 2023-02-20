<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Albom",
 *     description="Модель альбомов",
 *     @OA\Xml(
 *         name="Albom"
 *     )
 * )
 */
//Источник: https://27sysday.ru/programmirovanie/laravel-8-ustanovka-openapi-swagger
class Albom extends Model
{
    use HasFactory;

    /**
     * @OA\Property(
     *      title="Songs",
     *      description="Связь альбомов с песнями",
     *      example="Конечно он (альбом) - Вселенная (песня)"
     * )
     *
     * @var array
     */
    /*
    * Связь модели Albom с моделью Songs
    */
    public function songs() {
        return $this->belongsToMany(Song::class)->withTimestamps();
    }

    /**
     * @OA\Property(
     *      title="Artists",
     *      description="Связь альбомов с артистами",
     *      example="Конечно он (альбом) - Иванушки (артист)"
     * )
     *
     * @var array
     */
    /*
    * Связь модели Albom с моделью Artist, позволяет получить
    * родителя-исполнителя
    */
    public function artists()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }
}
