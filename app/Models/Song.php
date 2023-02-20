<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(
 *     title="Song",
 *     description="Модель песен",
 *     @OA\Xml(
 *         name="Song"
 *     )
 * )
 */
class Song extends Model
{
    use HasFactory;
    /**
     * @OA\Property(
     *      title="Artists",
     *      description="Связь модели Song с моделью Artist",
     *      example="Иванушки (артист) - Тополинный пух (песня)"
     * )
     *
     * @var array
     */
    /*
     * Связь модели Song с моделью Artist
     */
    public function artists() {
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }
    /**
     * @OA\Property(
     *      title="Alboms",
     *      description="Связь модели Song с моделью Albom",
     *      example="Конечно он (альбом) - Тополинный пух (песня)"
     * )
     *
     * @var array
     */
    /*
     * Связь модели Song с моделью Albom
     */
    public function alboms() {
        return $this->belongsToMany(Albom::class)->withTimestamps();
    }
}
