<?php

namespace App\Livewire;
use App\Models\Assunto;
use Livewire\Attributes\On; 
use Livewire\Component;
use Masmerise\Toaster\Toastable;

class SearchAssunto extends Component
{
    use Toastable; 
        public $search = '';

        #[On('atualiza-assuntos')] 
        public function refreshComponent(){

            $this->render(); 
        }

        #[On('excluiAssunto')]
        public function deleteAssunto($id){
            if(Assunto::where( 'id', $id)->delete()){
                 // //notificação pelo Toaster
                $this->success('Assunto excluído com sucesso'); 
                //dispatch: dispara evento pelo Livewire
                $this->dispatch('atualiza-assuntos')->to(SearchAssunto::class); 
            }else{
                $this->error('Não foi possível excluir o assunto');
            }
           
        } 
        public function render()
        {
            $assuntos = Assunto::where('descricao', 'like', '%' . $this->search . '%')
                ->get();
    
            return view('livewire.search-assunto', ['assuntos' => $assuntos]);
        }
    
}
