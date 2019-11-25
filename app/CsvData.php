<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CsvData extends Model
{
    protected $table = 'tblimport';
    protected $primaryKey = 'tblimportid';
    protected $fillable = ['tblimportbirth','tblimportgender','tblimportethnicity','tblimportchildfirst','tblimportcount','tblimportrank','created_at','updated_at'];
}
