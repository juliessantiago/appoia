<?php

namespace App\Livewire;
use App\Models\Universidade;
use Livewire\Component;

class UniversidadeSelect extends Component
{
    public $universidades;

    public function mount(){ //NÃO pode mudar nome do método!
        $this->universidades = Universidade::all(); 
    }
    public function render()
    {
        return view('livewire.universidade-select');
    }
}
