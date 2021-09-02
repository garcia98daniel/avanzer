<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenciaAprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    { 
        Schema::create('evidencia_aprendizs', function (Blueprint $table) {
            $table->id('idevidencia_aprendiz');
            $table->integer('idProyectoFK');
            $table->integer('idEvidenciaFK');
            
            $table->string('evidenciaAprendiz');
            $table->string('comentario');
            $table->date('fechaevidencia');//->now();
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
        Schema::dropIfExists('evidencia_aprendizs');
    }
}
