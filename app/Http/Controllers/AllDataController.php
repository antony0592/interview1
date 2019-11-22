<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CsvData;

class AllDataController extends Controller
{
    public function getAllData (){

        $objeto1 = CsvData::all();

        //$objeto1 = DB::table('tblimport')->get(); 
            //->select('tblimportid', 'tblimportbirth', '.tblimportgender', '.tblimportethnicity', 'tblimportchildfirst', 'tblimportcount', 'tblimportrank')
            


        return view("viewData",['alldata' => $objeto1]);
     }
}
