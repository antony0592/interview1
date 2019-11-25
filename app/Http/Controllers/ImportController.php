<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\CsvData;
use App\CsvImport;

class ImportController extends Controller 
{
    public function viewImport (){

        return view("viewImport");
    }

    public function import(Request $request)
    {
        //asegura que solo se aceptará un archivo CSV
        request()->validate(['file' => 'required|mimes:csv,txt']);
        //guardar una ruta al archivo
        $path = request()->file('file')->getRealPath();

        Excel::import(new CsvImport, $path);
        
       // $objeto1 = CsvData::all();
        //return view("viewData",['alldata' => $objeto1]);
        return view("viewImport");
    }



}
