<?php

namespace App\Livewire;
use App\Models\Consulta;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On; 
use Masmerise\Toaster\Toastable;
use App\Models\Notificacao;
use App\Models\Voluntario;
use Carbon\Carbon; 


class GetConsultasPendentes extends Component //exibe consultas pendentes para supervisor autorizar
{
    use WithPagination;
    use Toastable; 
    #[On('autorizaConsulta')] 
    public function autorizaConsulta($consulta){ //por algum motivo o dado enviado na chamada do evento vem como ARRAY
        // dd($consulta); 
        $objConsulta = (object)$consulta; 
        // dd($objConsulta->id); 
        $updated = Consulta::where('id', $objConsulta->id)->update([
            'status' => 'autorizada'
        ]); 
        if($updated){
            $dataFormat = Carbon::create($objConsulta->dia)->format('d/m/Y'); 
            $horarioFormat = Carbon::create($objConsulta->start)->format('H:i'); 
            // dd($horarioFormat); 
            $voluntario = Voluntario::find($objConsulta->id_voluntario); 
            $this->success('Status da consulta atualizado para Autorizada'); 
            $notificacao = new Notificacao([
                'mensagem' => 'Status da consulta do dia '.$dataFormat.' às '.$horarioFormat.'h foi atualizado para Autorizada', 
                'lida' => false,
            ]);
            $voluntario->notificacoes()->save($notificacao); //cria relação entre voluntário e a notificação criada
        }else{
            $this->error('Desculpe, ocorreu um erro'); 

        }
    }
    public function render()
    {
        $pendentes = Consulta::where('status', 'pendente')->paginate(3);
        //Preciso trazer nome paciente
        return view('livewire.get-consultas-pendentes', ['pendentes' => $pendentes]);
    }
}
