<?php

namespace App\Livewire;
use App\Models\Consulta;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class AlunoGetConsultas extends Component
{
    public $consultas; 

    public function mount(){
        $this->consultas = Consulta::where('id_aluno', Auth::user()->id)->get(); 
    }
    public function render()
    {
        return view('livewire.aluno.aluno-get-consultas');
    }
}
