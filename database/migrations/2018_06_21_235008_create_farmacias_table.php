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
         $table->string('latitud');
         $table->string('longitud');
         $table->integer('farm_id')->unsigned()->unique();
         $table->string('objeto');
         $table->string('calle');
         $table->integer('altura')->unsigned();
         $table->string('direc_norm');
         $table->string('direc_arcg');
         $table->string('telefono')->nullable();
         $table->string('obs_telefono')->nullable();
         $table->string('barrio');
         $table->integer('comuna')->unsigned();
         $table->timestamps();
       });
     }
     public function down()
     {
       Schema::dropIfExists('farmacias');
     }
}
