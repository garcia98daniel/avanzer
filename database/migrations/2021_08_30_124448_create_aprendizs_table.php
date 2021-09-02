<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREATE TABLE Aprendiz (
        //     idAprendiz INT AUTO_INCREMENT,
        //     NombreAprendiz VARCHAR(45) NOT NULL,
        //     ApellidoAprendiz VARCHAR(45) NOT NULL,
        //     DocumentoAprendiz VARCHAR(45) NOT NULL,
        //     idUsuarioFK INT NOT NULL,
        //     idProyectoFK INT NOT NULL,

        Schema::create('aprendizs', function (Blueprint $table) {
            $table->id('idAprendiz');
            $table->integer('id_usuarioFK');
            $table->integer('id_proyectoFK');

            $table->string('nombreAprendiz');
            $table->string('apellidoAprendiz');
            $table->string('documentoAprendiz');
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
        Schema::dropIfExists('aprendizs');
    }
}
