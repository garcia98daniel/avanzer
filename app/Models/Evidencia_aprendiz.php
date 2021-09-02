<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencia_aprendiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'idevidencia_aprendiz',
        'idProyectoFK',
        'idEvidenciaFK',
        
        'evidenciaAprendiz',
        'comentario',
        'fechaevidencia',
    ];

}
