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
    // Acessar Auth::user() dentro de um componente Livewire é bastante simples, 
    // pois Livewire é uma extensão do Laravel e compartilha o mesmo ciclo de vida 
    // e contexto de autenticação. Portanto, você pode usar o Auth::user() diretamente
    //  dentro do seu componente Livewire da mesma forma que faria em um controlador 
    //  Laravel ou em um middleware.
    public function render()
    {
        return view('livewire.get-expediente');
    }
}
