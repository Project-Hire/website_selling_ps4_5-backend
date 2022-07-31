<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cd_games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('trademark_id')->unsigned()->index();
            $table->foreign('trademark_id')->references('id')->on('trademarks')->onDelete('cascade');
            $table->bigInteger('quantity');
            $table->integer('discount');
            $table->integer('price');
            $table->string('image', 1000);
            $table->bigInteger('viewer');
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
        Schema::dropIfExists('cd_games');
    }
}
