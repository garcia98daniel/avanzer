<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // CREATE TABLE  Avance (
        //     idAvance INT AUTO_INCREMENT,
        //     Avance VARCHAR(4000) NOT NULL,
        //     FechaAvance datetime,
        //     IdFichaFK VARCHAR(45) NOT NULL,
        //     idComentarioFK INT NOT NULL,
        //     idProyectoFK INT NOT NULL,
        //     idEvidenciaFK INT NOT NULL,

        Schema::create('avances', function (Blueprint $table) {
            $table->id('idAvance');
            $table->date('fechaAvance');
            $table->string('avance');
            $table->integer('idProyectoFK');
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
        Schema::dropIfExists('avances');
    }
}
