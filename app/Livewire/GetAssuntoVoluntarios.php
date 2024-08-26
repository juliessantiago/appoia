<?php

namespace App\Livewire;
use App\Models\Assunto;
use Livewire\Component;

class GetAssuntoVoluntarios extends Component
{
    public $voluntarios;
    public function mount($id){
        $this->voluntarios = Assunto::find($id)->voluntarios()->get();
    }
    public function render()
    {
        return view('livewire.get-assunto-voluntarios');
    }
}
