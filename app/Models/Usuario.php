<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    // public function Aprendiz(){
    //     return $this->hasOne(Usuario::class, 'idUsuario', 'idUsuarioFK');
    // }

    // public function Instructor(){
    //     return $this->hasOne(Usuario::class, 'idUsuario', 'idUsuarioFK');
    // }

    // public function Administrador(){
    //     return $this->hasOne(Usuario::class, 'idUsuario', 'idUsuarioFK');
    // }
    use HasFactory;
}
