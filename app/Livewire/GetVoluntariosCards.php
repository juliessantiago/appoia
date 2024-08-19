<?php

namespace App\Livewire;
use App\Models\Voluntario;
use Livewire\Component;

class GetVoluntariosCards extends Component
{
    public function render()
    {
        $voluntarios = Voluntario::paginate(3);
        return view('livewire.get-voluntarios-cards', ['voluntarios' => $voluntarios]);    
    }

}
