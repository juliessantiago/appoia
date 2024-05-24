<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Expediente;


class ShowVoluntarioExpedientes extends Component
{
    public $expedientes;
    public function mount(){ 
        $this->expedientes = Expediente::where('id_voluntario', 1)->get(); 
    }
    public function render()
    {
        return view('livewire.show-voluntario-expedientes');
    }
}
