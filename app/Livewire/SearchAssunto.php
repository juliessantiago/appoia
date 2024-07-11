<?php

namespace App\Livewire;
use App\Models\Assunto;
use Livewire\Attributes\On; 
use Livewire\Component;

class SearchAssunto extends Component
{
        public $search = '';

        #[On('atualiza-assuntos')] 
        public function refreshComponent(){

            $this->render(); 
        }
        public function render()
        {
            $assuntos = Assunto::where('descricao', 'like', '%' . $this->search . '%')
                ->get();
    
            return view('livewire.search-assunto', ['assuntos' => $assuntos]);
        }
    
}
