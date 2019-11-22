<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBLimport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblimport', function (Blueprint $table) {
            $table->increments('tblimportid');
            $table->year('tblimportbirth');
            $table->string('tblimportgender',6);
            $table->string('tblimportethnicity',45);
            $table->string('tblimportchildfirst',45);
            $table->integer('tblimportcount');
            $table->integer('tblimportrank');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblimport');
    }
}
