<?php

namespace App;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\CsvData;

class CsvImport implements ToModel, WithBatchInserts, WithStartRow{

    public function model(array $row)
    {
        return new CsvData([ 
            'tblimportbirth' => $row[0],
            'tblimportgender' => $row[1],           
            'tblimportethnicity' => $row[2],  
            'tblimportchildfirst' =>  $row[3], 
            'tblimportcount'      => $row[4],  
            'tblimportrank'  => $row[5]
        ]);
    }
    public function batchSize(): int
    {
        return 1000;
    }
    public function startRow(): int
    {
        return 2;
    }
}