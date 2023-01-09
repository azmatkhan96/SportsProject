<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_ID');
            $table->foreign('match_ID')->references('id')->on('matches')->onDelete('cascade'); 
            $table->unsignedBigInteger('players_ID');
            $table->foreign('players_ID')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('team_ID');
            $table->foreign('team_ID')->references('id')->on('teamnames')->onDelete('cascade'); 
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
        Schema::dropIfExists('players');
    }
}
