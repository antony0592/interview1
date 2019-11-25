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

        $this->validate($request, [
            'birth' => 'required|max:45|min:4',
            'gender' => 'required|max:15|min:1',
            'tethnicity' => 'required|max:45|min:1',
            'childfirst' => 'required|max:45|min:1',
            'count' => 'required|max:3|min:1',
            'rank' => 'required|max:3|min:1',
      ]);

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
