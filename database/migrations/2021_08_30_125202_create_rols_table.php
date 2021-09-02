<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        // CREATE TABLE  Rol (
        //     idRol INT PRIMARY KEY AUTO_INCREMENT,
        //     NombreRol VARCHAR(45) NOT NULL
        //     );
        Schema::create('rols', function (Blueprint $table) {
            $table->id('idRol');
            $table->string('NombreRol');
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
        Schema::dropIfExists('rols');
    }
}
