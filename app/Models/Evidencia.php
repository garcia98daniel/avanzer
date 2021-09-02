<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Ficha;
use App\Models\Proyecto;


class Evidencia extends Model
{

    use HasFactory;

    public static function getEvidenciasModel($id_instructor){
        $result = Ficha::with(['Instructor', 'Evidencias']) 
                            ->where('fichas.id_instructorFK','=',$id_instructor)
                            ->get();
        // $result = Instructor::all();
        return $result[0];
    }

    public static function getEvidenciasAprendizModel($id){
        $result_1 = Proyecto::with([
        // preguntamos por los datos del aprendiz logueado
        'Aprendiz'=> function($aprendiz) use ($id){
            $aprendiz->where('aprendizs.idAprendiz', '=', $id);
        }
        , 
        //cuando la evidencia este activa 1 podra verse
        'Evidencia' => function($evidencias) {
            $evidencias->where('evidencias.estadoEvidencia', '=', 1);
        }
        ]) 
        ->get();

        $ficha =  DB::table('fichas')
            ->join('evidencias', 'fichas.idFicha', '=', 'evidencias.id_FichaFK')
            ->join('proyectos', 'evidencias.idEvidencia', '=', 'proyectos.id_EvidenciaFK')
            ->join('aprendizs', 'proyectos.idProyecto', '=', 'aprendizs.id_ProyectoFK')

            ->where('aprendizs.idAprendiz', '=', $id)
            ->get('ficha');

         $result = array($result_1[0]->evidencia, $ficha[0]);
        return $result;
    }
 
}
