<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(
 *     title="Artist",
 *     description="Модель артистов-певцов",
 *     @OA\Xml(
 *         name="Artist"
 *     )
 * )
 */
class Artist extends Model
{
    use HasFactory;

    /**
     * @OA\Property(
     *      title="Songs",
     *      description="Связь модели Artist с моделью Song",
     *      example="Иванушки (артист) - Тополинный пух (песня)"
     * )
     *
     * @var array
     */
    /*
     * Связь модели Artist с моделью Song
     */
    public function songs() {
        return $this->belongsToMany(Song::class)->withTimestamps();
    }

    /**
     * @OA\Property(
     *      title="Alboms",
     *      description="Связь модели Artist с моделью Albom",
     *      example="Иванушки (артист) -  10 лет во вселенной (альбом)"
     * )
     *
     * @var array
     */
    /*
    * Связь модели Артисты с моделью Альбомы, позволяет получить
    * все альбомы текущего артиста
    */
    public function alboms() {
        return $this->hasMany(Albom::class);
    }
}
