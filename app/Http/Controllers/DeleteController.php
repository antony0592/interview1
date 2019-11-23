<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CsvData;

class DeleteController extends Controller
{
    public function delete($tblimportid){

        $objeto = CsvData::find($tblimportid);
        $objeto->delete();

        $objeto1 = CsvData::all();
        return view("viewData",['alldata' => $objeto1]);
     }
}
