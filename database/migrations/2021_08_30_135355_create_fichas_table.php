<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREATE TABLE Ficha (
        //     idFicha INT AUTO_INCREMENT,
        //     Ficha VARCHAR(45) NOT NULL,
        //     FechaInicio DATETIME NOT NULL,

        //     FechaFin DATETIME NOT NULL,
        //     estadoFicha INT NOT NULL,
        //     idProgramaFK INT NOT NULL,

        Schema::create('fichas', function (Blueprint $table) {
            $table->id('idFicha');
            $table->integer('id_instructorFK');

            $table->string('ficha');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->boolean('estadoFicha');
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
        Schema::dropIfExists('fichas');
    }
}
