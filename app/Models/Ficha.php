<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evidencia;
use App\Models\Instructor;


class Ficha extends Model
{   
    public function Evidencias(){
        return $this->hasMany(Evidencia::class, 'id_FichaFK', 'idFicha');
    }

    public function Instructor(){
        return $this->hasOne(Instructor::class, 'idInstructor', 'id_instructorFK');
    }

    use HasFactory;


}
