<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Assunto;
use Masmerise\Toaster\Toastable;
use Livewire\Attributes\On; 
use Illuminate\Support\Facades\Auth;


class CreateAssunto extends Component
{
    // public function mount(){

    // }
    public $descricao;
    protected $rules = [

        'descricao' => 'required',
    ];
    use Toastable; 
    public function save(){
        $this->validate();
        $desc = trim(strtolower($this->descricao)); 
        // dd($desc);
        $count = Assunto::where('descricao', $desc)->get()->count();
         //existe forma de verificar através da validação, mas exibição de erro não ficou boa
        if($count > 0){
            $this->warning('Assunto já existe'); 
        }else{
            $created = Assunto::create([
                'descricao' => $desc
              ]);
              // $created = false;
              if($created){
                  $this->success('Novo assunto criado com sucesso'); 
                  $this->dispatch('atualiza-assuntos')->to(GetAssunto::class);  
              }else{
                  $this->error('Desculpe, ocorreu um erro.');
              }
        }
       
       
      
        
    }

    #[On('enviaDadosExclusao')]
    public function deleteAssunto($id){
        if(Assunto::where( 'id', $id)->delete()){
             // //notificação pelo Toaster
            $this->success('Assunto excluído com sucesso'); 
            //dispatch: dispara evento pelo Livewire
            $this->dispatch('atualiza-assuntos')->to(GetAssunto::class); 
        }else{
            $this->error('Não foi possível excluir o assunto');
        }
       
    } 
    public function render()
    {
        return view('livewire.create-assunto');
    }
}
