<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ficha;

class Instructor extends Model
{   

    public function Ficha(){
        return $this->belongsTo(Ficha::class , 'id_instructorFK' , 'idInstructor');
    }

    
    use HasFactory;

   
}
