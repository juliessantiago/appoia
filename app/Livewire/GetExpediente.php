<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Expediente;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On; 


class GetExpediente extends Component
{
    public $expedientes; 
   //descobrir forma de exibir na ordem dos dias da semana
    public function mount(){ 
        $this->expedientes = Expediente::where('id_voluntario', Auth::user()->id )->orderByRaw("FIELD(diaSemana, 'segunda', 'terca',
        'quarta', 'quinta', 'sexta')")->get(); 
    }
    //Consigo acessar Auth:user() dentro do componente Livewire
    //porque ele é uma extensão do Laravel e compartilha o mesmo ciclo de vida

    #[On('atualiza-expedientes')] 
    public function refreshComponent(){
        // dd('atualizou');
        // $this->dispatch('$refresh'); 
        $this->mount(); 
        $this->render(); 
    }
    public function render()
    {
        // dd($this->expedientes); 
        return view('livewire.get-expediente');
    }
   
}
