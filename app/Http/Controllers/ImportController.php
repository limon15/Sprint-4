<?php

namespace App\Http\Controllers;

use Input;
use DB;
use Excel;
use App\Farmacia;
use Illuminate\Http\Request;

class ImportController extends Controller
{
  // public function import()
  // {
  //   Excel::load('Farmacias.csv', function($reader) {
  //
  //     foreach ($reader->get() as $farma) {
  //        Farmacia::create([
  //           'X' => $farma->X,
  //           'Y' => $farma->Y,
  //           'FARM_ID' => $farma->FARM_ID,
  //           'OBJETO' => $farma->OBJETO,
  //           'CALLE' => $farma->CALLE,
  //           'ALTURA' => $farma->ALTURA,
  //           'DIREC_NORM' => $farma->DIREC_NORM,
  //           'DIREC_ARCG' => $farma->DIREC_ARCG,
  //           'TELEFONO' => $farma->TELEFONO,
  //           'OBS_TELEFONO' => $farma->OBS_TELEFONO,
  //           'BARRIO' => $farma->BARRIO,
  //           'COMUNA' => $farma->COMUNA
  //           ]);
  //     }
  //   });
  //   return Farmacia::all();

    public function importExport()
    {
      return view('importExport');
    }
    public function downloadExcel($type)
    {
      $data = Farmacia::get()->toArray();
      return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
        $excel->sheet('mySheet', function($sheet) use ($data)
            {
          $sheet->fromArray($data);
            });
      })->download($type);
    }
    public function importExcel()
    {
      if(Input::hasFile('import_file')){
        $path = Input::file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {
        })->get();
        if(!empty($data) && $data->count()){
          foreach ($data as $key => $value) {
            $insert[] = ['X' => $value->X, 'Y' => $value->Y];
          }
          if(!empty($insert)){
            DB::table('farmacias')->insert($insert);
            dd('Insert Record successfully.');
          }
        }
      }
      return back();
    }
}
