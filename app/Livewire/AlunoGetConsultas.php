<?php

namespace App\Livewire;
use App\Models\Consulta;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon; 


class AlunoGetConsultas extends Component
{
    public $consultas; 
    //exibe consultas de hoje
    public function mount(){
        $hoje = (Carbon::now()->format('Y-m-d')); 
        $this->consultas = Consulta::where('id_aluno', Auth::user()->id)->get()->where('dia', $hoje); 
    }
    public function render()
    {
        return view('livewire.aluno.aluno-get-consultas');
    }
}
