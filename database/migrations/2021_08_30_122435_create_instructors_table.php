<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //     CREATE TABLE Instructor (
        //     idInstructor INT AUTO_INCREMENT,
        //     NombreInstructor VARCHAR(45) NOT NULL,
        //     ApellidoInstructor VARCHAR(45) NOT NULL,
        //     TelefonoInstructor INT NOT NULL,
        //     idUsuarioFK INT NOT NULL,

        Schema::create('instructors', function (Blueprint $table) {
            $table->id('idInstructor');
            $table->integer('id_usuarioFK');

            $table->string('nombreInstructor');
            $table->string('apellidoInstructor');
            $table->integer('telefonoInstructor');
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
        Schema::dropIfExists('instructors');
    }
}
