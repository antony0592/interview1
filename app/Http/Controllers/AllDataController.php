<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CsvData;

class AllDataController extends Controller
{
    public function getAllData (){

        $objeto1 = CsvData::all();

        return view("viewData",['alldata' => $objeto1]);
     }
}
