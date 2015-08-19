<?php namespace Ponderosa\League\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSeasonsTable extends Migration
{

    public function up()
    {
        Schema::create('ponderosa_league_seasons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('active')->default(false);
            $table->boolean('registration_open');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ponderosa_league_seasons');
    }

}
