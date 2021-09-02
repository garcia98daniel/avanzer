<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{ 
    public function ComentEvidencia(){
        return $this->hasOne(Evidencia_aprendiz::class, 'idComentario', 'idComentarioFK');
    }

    use HasFactory;
}
