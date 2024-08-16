<?php

namespace App\Livewire;
use App\Models\Aluno;
use Livewire\Component;

class GetAutorizacoesAlunos extends Component
{

    public $alunosAutorizar; 
    //descobrir forma de exibir na ordem dos dias da semana
     public function mount(){ 
         $this->alunosAutorizar = Aluno::where('status', 0)->get(); 
     }
    public function render()
    {
        return view('livewire.get-autorizacoes-alunos');
    }
}
