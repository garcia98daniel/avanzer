<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREATE TABLE  Proyecto (
        //     idProyecto INT PRIMARY KEY AUTO_INCREMENT,
        //     NombreProyecto VARCHAR(45) NOT NULL,
        //     DescripcionProyecto VARCHAR(100) NOT NULL,
        //     EstadoAProyecto INT NOT NULL
        //       );
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('idProyecto');
            $table->integer('id_EvidenciaFK');
            
            $table->string('nombreProyecto');
            $table->string('descripcionProyecto');
            $table->boolean('estadoProyecto');
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
        Schema::dropIfExists('proyectos');
    }
}
