<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Assunto;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On; 

class GetAssunto extends Component
{
    public $assuntos; 
  
    #[On('atualiza-assuntos')] 
    public function refreshComponent(){
        // dd('atualizou');
        // $this->dispatch('$refresh'); 
        $this->mount(); 
        $this->render(); 
    }
     public function mount(){ 
         $this->assuntos = Assunto::all(); 
     }
    public function render()
    {
        return view('livewire.get-assunto');
    }
}
