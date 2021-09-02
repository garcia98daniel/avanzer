<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // CREATE TABLE  Evidencia (
        //     idEvidencia INT PRIMARY KEY AUTO_INCREMENT,
        //     Trimestre VARCHAR(45) NOT NULL,
        //     NombreEvidencia VARCHAR(45) NOT NULL,
        //     FaseEvidencia VARCHAR(45) NOT NULL,
        //     FechaInicio datetime,
        //     FechaFin datetime,
        //     EvidenciaP varchar(400),
        //     EstadoEvidencia INT NOT NULL
        //     );
        Schema::create('evidencias', function (Blueprint $table) {
            $table->id('idEvidencia');
            $table->integer('id_FichaFK');

            $table->string('trimestre');
            $table->string('nombreEvidencia');
            $table->string('faseEvidencia');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->string('evidenciaP');
            $table->boolean('estadoEvidencia');
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
        Schema::dropIfExists('evidencias');
    }
}
