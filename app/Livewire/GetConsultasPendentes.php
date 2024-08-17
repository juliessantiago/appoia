<?php

namespace App\Livewire;
use App\Models\Consulta;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On; 
use Masmerise\Toaster\Toastable;

class GetConsultasPendentes extends Component //exibe consultas pendentes para supervisor autorizar
{
    use WithPagination;
    use Toastable; 
    #[On('autorizaConsulta')] 
    public function autorizaConsulta($id){
        $updated = Consulta::where('id', $id)->update([
            'status' => 'autorizada'
        ]); 
        if($updated){
            $this->success('Status da consulta atualizado para Autorizada'); 
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
