<?php

namespace App\Livewire;
use App\Models\Expediente;
use Livewire\Component;

class GetSupervisorExpediente extends Component //mostra expedientes de voluntário dentro de dashboard de supervisor
{
    public $expedientes; 
    public function mount($id){ 
        // dd($id); 
        $this->expedientes = Expediente::where('id_voluntario', $id)->orderByRaw("FIELD(diaSemana, 'segunda', 'terca',
        'quarta', 'quinta', 'sexta')")->get(); 
    }
    public function render()
    {
        return view('livewire.get-supervisor-expediente');
    }
}
