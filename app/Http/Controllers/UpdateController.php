<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CsvData;

class UpdateController extends Controller
{
    public function update(Request $request, $tblimportid){

        $objeto = CsvData::find($tblimportid);
        return view("viewUpdate",['dataimport' => $objeto]);
     }

     public function store(Request $request, $tblimportid){

      $this->validate($request, [
            'birth' => 'required|max:45|min:4',
            'gender' => 'required|max:15|min:1',
            'tethnicity' => 'required|max:45|min:1',
            'childfirst' => 'required|max:45|min:1',
            'count' => 'required|max:3|min:1',
            'rank' => 'required|max:3|min:1',
      ]);

        $objeto = CsvData::find($tblimportid);
        $objeto->tblimportbirth = $request->birth;
        $objeto->tblimportgender = $request->gender;
        $objeto->tblimportethnicity = $request->tethnicity;
        $objeto->tblimportchildfirst = $request->childfirst;
        $objeto->tblimportcount = $request->count;
        $objeto->tblimportrank = $request->rank;
        $objeto->save();

        return view("viewUpdate",['dataimport' => $objeto]);
     }
}
