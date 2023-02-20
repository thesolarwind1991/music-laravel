<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="OpenApi Documentation",
     *      description="Документация для мультимедийного проекта",
     *      @OA\Contact(
     *          email=L5_SWAGGER_CONST_EMAIL
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Основной API"
     * )
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST_V2,
     *      description="Для Логирования"
     * )
     *
     * @OA\Tag(
     *     name="Channels",
     *     description="Работа с мультимедийным проектом"
     * )
     */
       //Источник: https://27sysday.ru/programmirovanie/laravel-8-ustanovka-openapi-swagger

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
