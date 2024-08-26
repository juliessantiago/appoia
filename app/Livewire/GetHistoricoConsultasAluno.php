<?php

namespace App\Livewire;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;


class GetHistoricoConsultasAluno extends Component
{
    use WithPagination;
    public function render()
    {
        $consultas = Consulta::where('id_aluno', Auth::user()->id)->get(); 
        return view('livewire.get-historico-consultas-aluno', ['consultas' => $consultas]);
        
    }
}
