<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voluntario;
use App\Models\Expediente;

class ExpedienteController extends Controller
{
    public function showHorarios($id){
        $expedientes = Expediente::where('id_voluntario', $id)->get(); 
        // return response()->json($expedientes); 
        
        // foreach($horarios as $horario)
        //     dd($horario->diaSemana, $horario->inicioExpediente, $horario->fimExpediente); 
        return view ('voluntarioHorarios', ['voluntario' => $id]); 
    }
 

}
