<?php

namespace App\Http\Controllers;

use App\Models\Evidencia;
// use App\Models\Ficha;

use Illuminate\Http\Request;
use App\Models\Evidencia_aprendiz;
use App\Models\Aprendiz;
use Carbon\Carbon;

class EvidenciaController extends Controller
{

////***********////recuerda que el id debe coinsidir con el del instructor///////************* */

    public function getEvidencias()
    {
        // $result = Evidencia::getEvidenciasModel(user->auth()->id);
        $result = Evidencia::getEvidenciasModel(10);

        // return  $result;
        return view('evidencias.list')->with("result", $result->evidencias);

    }

    public function activarEvidencias($id){

        Evidencia::where('idEvidencia', '=', $id)
                   ->update([
                       'estadoEvidencia' => 1
                   ]);
        
        $result = Evidencia::getEvidenciasModel(10);           
        return view('evidencias.list')->with("result", $result->evidencias);
    }


    public function getEvidenciasAprendiz(){
        // $result = Evidencia::getEvidenciasAprendizModel(user->auth()->id);
        $result = Evidencia::getEvidenciasAprendizModel(1);

        // return $result;
        return view('evidencias.aprendiz')->with("evidencia", $result[0])->with("nombreFicha", $result[1] );
    }


    public function verEvidencia($id){
        $evidencia = Evidencia::where('idEvidencia', '=' , $id)->get();
        // return $evidencia;
        return view('evidencias.subirEvidencia')->with("evidencia", $evidencia[0] );
    }

    public function actualizarEvidencia(Request $request, $id){
        // return $request;
        // $idProyecto = Aprendiz::where('idAprendiz', '=', user->auth()->id)->get();
        $aprendiz = Aprendiz::where('idAprendiz', '=', 1)->get();
        Evidencia_aprendiz::create([
            'evidenciaAprendiz' => $request['linkEvidencia'],
            'comentario' => $request['comentario'],
            'fechaevidencia' => Carbon::now(),
             'idProyectoFK' => $aprendiz[0]->id_proyectoFK,
             'idEvidenciaFK' => $id,
        ]); 

     // $result = Evidencia::getEvidenciasAprendizModel(user->auth()->id);
     $result = Evidencia::getEvidenciasAprendizModel(1);
     // return $result;
     return view('evidencias.aprendiz')->with("evidencia", $result[0])->with("nombreFicha", $result[1] );
    }

}
