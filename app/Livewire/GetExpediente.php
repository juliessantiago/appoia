<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Expediente;
use Illuminate\Support\Facades\Auth;


class GetExpediente extends Component
{
    public $expedientes; 
    public function mount(){ 
        $this->expedientes = Expediente::where('id_voluntario', Auth::user()->id )->get(); 
    }
    //Consigo acessar Auth:user() dentro do componente Livewire
    //porque ele é uma extensão do Laravel e compartilha o mesmo ciclo de vida

    public function render()
    {
        return view('livewire.get-expediente');
    }
}
