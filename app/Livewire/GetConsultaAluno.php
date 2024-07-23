<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On; 
use Masmerise\Toaster\Toastable;


class GetConsultaAluno extends Component
{
    public $consultaAberta; 
    public function mount(){ //MUDAR CONSULTA
        $this->consultaAberta = Consulta::where('id_aluno', Auth::user()->id)->get(); 
    }
    public function render()
    {
        return view('livewire.get-consulta-aluno');
    }
}
