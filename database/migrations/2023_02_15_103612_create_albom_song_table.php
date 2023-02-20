<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albom_song', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('albom_id');
            $table->unsignedBigInteger('song_id');
            $table->integer('number_song')->default(1);
            $table->timestamps();

            //внешний ключ, ссылается на поле id таблицы alboms
            $table->foreign('albom_id')
                ->references('id')
                ->on('alboms')
                ->onDelete('cascade');
            //внешний ключ, ссылается на поле id таблицы songs
            $table->foreign('song_id')
                ->references('id')
                ->on('songs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albom_song');
    }
};
