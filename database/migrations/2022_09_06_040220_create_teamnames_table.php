<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamnamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamnames', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_ID');
            $table->foreign('match_ID')->references('id')->on('matches')->onDelete('cascade'); 
            $table->string('TeamName');
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
        Schema::dropIfExists('teamnames');
    }
}
