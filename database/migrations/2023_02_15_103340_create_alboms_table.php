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
        Schema::create('alboms', function (Blueprint $table) {
            $table->id();
            $table->string('albom_name', 255);
            $table->string('albom_slug', 255)->unique();
            $table->unsignedBigInteger('artist_id');
            $table->string('albom_year', 4);
            $table->timestamps();

            //внешний ключ исполнителя песен
            $table->foreign('artist_id')
                ->references('id')
                ->on('artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alboms');
    }
};
