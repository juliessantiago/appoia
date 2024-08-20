<?php

namespace App\Livewire;
use App\Models\Supervisor;
use Livewire\Component;

class SupervisorSelect extends Component
{
    public $sup;
    public function mount(){ 
        $this->sup = Supervisor::all(); 
    }
    public function render()
    {
        return view('livewire.supervisor-select');
    }
}
