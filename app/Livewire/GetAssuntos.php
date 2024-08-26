<?php

namespace App\Livewire;
use App\Models\Assunto;
use Livewire\Component;

class GetAssuntos extends Component
{
   
    public function render()
    {
        $assuntos = Assunto::all(); 
        return view('livewire.get-assuntos', ['assuntos' => $assuntos]);
    }
}
