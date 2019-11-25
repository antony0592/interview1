<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CsvData;

class AddController extends Controller
{
    public function viewAdd (){

        return view("viewAdd");
     }

    public function store(Request $request){

        $registro = CsvData::create(
            [   'tblimportbirth' => $request->input('birth'),
                'tblimportgender' => $request->input('gender'),          
                'tblimportethnicity' => $request->input('tethnicity'),
                'tblimportchildfirst' =>  $request->input('childfirst'),
                'tblimportcount'      => $request->input('count'),
                'tblimportrank'  =>  $request->input('rank')
            ]);

        $objeto1 = CsvData::all();
        return view("viewData",['alldata' => $objeto1]);
    }
}
