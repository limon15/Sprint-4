<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
  protected $table = 'farmacias';
  protected $fillable = ['X','Y','FARM_ID','OBJETO','CALLE','ALTURA','DIREC_NORM','DIREC_ARCG','TELEFONO','OBS_TELEFONO','BARRIO','COMUNA'];
}
