<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Consulta;
use App\Models\Expediente;

class FullCalendarController extends Controller
{
    public function index(Request $request, $id)
    {
        // dd($id);
        if($request->ajax()) {
             $data = Consulta::where('id_voluntario', $id)
                        ->whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end', 'id_voluntario']);
             return response()->json($data);
        }
   
    }

    public function expedientes($id){
        $data = Expediente::where('id_voluntario', $id)->get(); 
        
        $retorno = $data->map(function ($expediente){
            switch ($expediente->diaSemana){
                case $expediente->diaSemana == "Monday":
                    $expediente->diaSemana = 1;
                    break; 
                case $expediente->diaSemana == "Tuesday":
                    $expediente->diaSemana = 2;
                    break; 
                case $expediente->diaSemana == "Wednesday":
                    $expediente->diaSemana = 3;
                    break; 
                case $expediente->diaSemana == "Thursday":
                    $expediente->diaSemana = 4;
                    break; 
                case $expediente->diaSemana == "Friday":
                    $expediente->diaSemana = 5;
                    break; 
            }
            return  [
                'dow' => [$expediente->diaSemana],
                'start' => $expediente->inicioExpediente, 
                'end' => $expediente->fimExpediente, 
            ]; 
        });  
        return response()->json($retorno);
    }

    public function ajax(Request $request): JsonResponse
    {
        switch ($request->type) {
           case 'add':
              $event = Consulta::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
                  'id_voluntario' => $request->idVoluntario
              ]);
            //   dd($request); 

              return response()->json($event);
             break;

           case 'update':
              $event = Consulta::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);

              return response()->json($event);
             break;

            case 'delete':
              $event = Consulta::find($request->id)->delete();
              return response()->json($event);
            break;
        }
    }
}
