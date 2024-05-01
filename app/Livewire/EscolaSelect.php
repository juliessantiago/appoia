<?php

namespace App\Livewire;
use App\Models\Escola;
use Livewire\Component;

class EscolaSelect extends Component
{
    public $escolas;
    public function mount(){ //NÃO pode mudar nome do método!
        $this->escolas = Escola::all(); 
    }
    public function render()
    {
        return view('livewire.escola-select');
    }
}
