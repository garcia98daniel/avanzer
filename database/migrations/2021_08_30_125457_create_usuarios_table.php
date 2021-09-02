<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREATE TABLE Usuario (
        //     idUsuario INT AUTO_INCREMENT,
        //     password VARCHAR(45) NOT NULL,
        //     correoUsuario VARCHAR(45) NOT NULL,
        //     estadoUsuario INT NOT NULL,
        //     idRolFK INT NOT NULL,
 
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->integer('idRolFK');

            $table->string('password');
            $table->string('correo');
            $table->boolean('estado');
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
        Schema::dropIfExists('usuarios');
    }
}
