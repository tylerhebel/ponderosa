<?php namespace Ponderosa\League\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLeaguesTable extends Migration
{

    public function up()
    {
        Schema::create('ponderosa_league_leagues', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('season_id')->unsigned();
            $table->foreign('season_id')->references('id')->on('ponderosa_league_seasons');

            $table->string('name');
            $table->string('description');

            $table->boolean('active')->default(false);

            $table->integer('players_per_team')->default(1);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ponderosa_league_leagues');
    }

}
