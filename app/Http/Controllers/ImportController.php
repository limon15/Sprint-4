<?php

namespace App\Http\Controllers;

use App\Farmacia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{

  public function import()
  {
    Excel::load('farmacias.csv', function($reader) {

      foreach ($reader->get() as $farmacia) {
         Farmacia::create([
            'latitud' => $farmacia->latitud,
            'longitud' => $farmacia->longitud,
            'farm_id' => $farmacia->farm_id,
            'objeto' => $farmacia->objeto,
            'calle' => $farmacia->calle,
            'altura' => $farmacia->altura,
            'direc_norm' => $farmacia->direc_norm,
            'direc_arcg' => $farmacia->direc_arcg,
            'telefono' => $farmacia->telefono,
            'obs_telefono' => $farmacia->obs_telefono,
            'barrio' => $farmacia->barrio,
            'comuna' => $farmacia->comuna
            ]);
      }
    });
    return Farmacia::all();
  }
}
