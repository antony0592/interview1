<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassImport extends Model
{
    protected $table = 'tblimport';
    protected $primaryKey = 'tblimportid';
    protected $fillable = ['tblimportbirth','tblimportgender','tblimportethnicity','tblimportchildfirst','tblimportcount','tblimportrank',];
}
