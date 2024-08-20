<?php

namespace App\Livewire;
use App\Models\Consulta;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon; 
use Livewire\Attributes\On; 

class AlunoGetConsultas extends Component //traz as consultas de HOJE
{
    public $consultas; 
    //exibe consultas de hoje
    public function mount(){
        $today = Carbon::now()->format('Y-m-d'); 
        $this->consultas = Consulta::where('id_aluno', Auth::user()->id)
        ->where('dia', $today)->get(); 
    }

    #[On('recebeLinkChamada')] 
    public function abreChamada($link){
        return redirect()->away($link);
    }
  
    public function render()
    {
        return view('livewire.aluno.aluno-get-consultas');
    }
}
