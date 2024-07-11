<?php

namespace App\Livewire;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GetConsultas extends Component
{
    public $consultas; 

    public function mount(){
        $this->consultas = Consulta::where('id_voluntario', Auth::user()->id)->get(); 
    }
    public function render()
    {
        return view('livewire.get-consultas');
    }
}
