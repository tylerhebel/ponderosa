<?php namespace Ponderosa\League\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSignupsTable extends Migration
{

    public function up()
    {
        Schema::create('ponderosa_league_signups', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('league_id')->unsigned();
            $table->foreign('league_id')->references('id')->on('ponderosa_league_leagues');

            $table->string('team_name');
            $table->string('location_name');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ponderosa_league_signups');
    }

}
