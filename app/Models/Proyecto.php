<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evidencia;
use App\Models\Aprendiz;


class Proyecto extends Model
{
    public function Evidencia(){
        return $this->belongsTo(Evidencia::class, 'id_EvidenciaFK', 'idEvidencia');
    }

    public function Aprendiz(){
        return $this->hasMany(Aprendiz::class, 'id_proyectoFK', 'idProyecto');
    }
    

    use HasFactory;
}
