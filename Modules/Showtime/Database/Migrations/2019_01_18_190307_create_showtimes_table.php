<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowtimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showtimes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id')->unsigned()->index();
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
           
            $table->integer('cinema_id')->unsigned()->index();
            $table->foreign('cinema_id')->references('id')->on('cinemas')->onDelete('cascade');

            $table->time('showtime');
            $table->time('showtimeb');
            $table->time('showtimec');
            $table->timestamps();
        });

        
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showtimes');
    }
}
