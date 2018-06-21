<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmaciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('farmacias', function(Blueprint $table)
       {
         $table->increments('id');
         $table->string('X');
         $table->string('Y');
         // $table->integer('FARM_ID')->unsigned();
         // $table->string('OBJETO');
         // $table->string('CALLE');
         // $table->integer('ALTURA')->unsigned();
         // $table->string('DIREC_NORM');
         // $table->string('DIREC_ARCG');
         // $table->string('TELEFONO')->nullable();
         // $table->string('OBS_TELEFONO')->nullable();
         // $table->string('BARRIO');
         // $table->integer('COMUNA')->unsigned();
         $table->timestamps();
       });
     }
     public function down()
     {
       Schema::dropIfExists('farmacias');
     }
}
