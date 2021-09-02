<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public function ProgramaFicha(){
        return $this->hasOne(Ficha::class, 'idPrograma', 'idProgramaFK');
    }

    use HasFactory;
}
