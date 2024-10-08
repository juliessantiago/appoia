<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Consulta;
use App\Models\Supervisor;
use App\Models\Voluntario;
use App\Models\Notificacao;
use App\Models\Expediente;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FullCalendarController extends Controller
{
    public $div;

    public function index(Request $request, $id)
    {
       
        if($request->ajax()) {
             $data = Consulta::where('id_voluntario', $id)
                        ->where('status', '!=', 'cancelada')
                        ->whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'start', 'end', 'id_voluntario', 'id_aluno']);
             return response()->json($data);
        }
   
    }

    public function expedientes($id){
        // dd(Auth::user()->id);
        $data = Expediente::where('id_voluntario', $id)->get(); 
        
        $retorno = $data->map(function ($expediente){//alteração por causa do formato aceito no fullcalendar
            switch ($expediente->diaSemana){
                case $expediente->diaSemana == "segunda":
                    $expediente->diaSemana = 1;
                    break; 
                case $expediente->diaSemana == "terca":
                    $expediente->diaSemana = 2;
                    break; 
                case $expediente->diaSemana == "quarta":
                    $expediente->diaSemana = 3;
                    break; 
                case $expediente->diaSemana == "quinta":
                    $expediente->diaSemana = 4;
                    break; 
                case $expediente->diaSemana == "sexta":
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

    public function verificaConsultas($id){
        $dataGambi = Carbon::create('2024-01-01')->format('Y-m-d'); //preciso retornar uma data se não tem consulta marcada  com status válido
        // dd($dataGambi); 
        $ultimaConsulta = Consulta::where('id_aluno', $id)->where('status', '!=', 'cancelada')->get()->last();
        // dd($ultimaConsulta); 
        if($ultimaConsulta != null || $ultimaConsulta != ''){
            $data =  Carbon::create($ultimaConsulta->dia)->addDays(7); 
            // dd($dias); 
            return response()->json($data);
        }else{
            return response()->json($dataGambi);
        }
       
    }
    public function ajax(Request $request): JsonResponse //criação de consulta 
    {
        $checkDiaExpediente = false; 
        $ckeckHoraExpediente = false; 
        $div = explode(" ", $request->start); //$div[0] = dia, $div[1] = hora
        
        // foreach ($request->expedientes as $expediente){
        //     foreach($expediente['dow'] as $dia){
        //         // dd($expediente);
        //         if($dia === $request->diaSemana){ //dia escolhido está dentro do expediente
        //             // dd($request->start);
        //             $checkDiaExpediente = true;
        //             $end = (explode(':',$expediente['end']));
        //             //$end = hora final formatada sem os minutos e segundos
        //             //preciso diminuir 1h do horário final porque não posso marcar consulta no horário de fechamento do expediente
        //            if( $div[1] >= $expediente['start'] && ($div[1] < ($end[0]) - 1)){
        //                 $ckeckHoraExpediente = true; 
        //            }
        //             break; 
        //         }
        //     }
        // }
        
        // if(!$checkDiaExpediente || ! $ckeckHoraExpediente){
        //     exit();
        // }
        switch ($request->type) { 
           case 'add':
            
            //FIXME:
            $data = Carbon::createFromFormat('Y-m-d', $request->dia)->format('Y-m-d');
           
            // dd($data);
            // $inicio = Carbon::createFromFormat('H:i', $request->inicio); 
            // $inicioFormat = $inicio->format('H:i'); 
            // $final  = $inicio->addHour()->format('H:i');

              $event = Consulta::create([
                'id_aluno'=> Auth::user()->id, 
                'status' => $request->status,
                'link' => $request->link,
                'dia' => $data,
                'start' => $request->start, 
                'end' => $request->end,
                'id_voluntario' => $request->idVoluntario
              ]);
              $voluntario = Voluntario::find($request->idVoluntario); 
            //   dd($voluntario->supervisor_id); 
             $supervisor = Supervisor::find($voluntario->supervisor_id); 
            //   dd($supervisor); 

              $notificacao = new  Notificacao([
                    'mensagem' => 'Consulta marcada com voluntário '. $voluntario->name.'. Acesse a página de consultas e a autorize.',
                    'lida' => false,
                ]);
                // $voluntario->notificacoes()->save($notificacao); 
                $supervisor->notificacoes()->save($notificacao); //cria relação entre supervisor e a notificação criada
              return response()->json($event);
             break;

           case 'update':
              $event = Consulta::find($request->id)->update([
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
