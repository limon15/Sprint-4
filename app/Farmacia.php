<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
  protected $fillable = ['latitud','longitud','farm_id','objeto','calle','altura','direc_norm','direc_arcg','telefono','obs_telefono','barrio','comuna'];
}
