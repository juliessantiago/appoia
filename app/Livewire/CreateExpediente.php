<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\On; 
use App\Models\Expediente;
use Illuminate\Support\Facades\Auth;
use Masmerise\Toaster\Toaster;
use Masmerise\Toaster\Toastable;
use Carbon\Carbon; 
class CreateExpediente extends Component
{

    use Toastable; 
    public $diaSemana; 
    public $inicioExpediente; 
    public $fimExpediente; 

    public $dias; 

    protected $rules = [
        'diaSemana' => 'required',
        'inicioExpediente' => 'required|date_format :H:i',
        'fimExpediente' => 'required|date_format:H:i',
    ];

    public function validateHours(){
        
        if(strtotime($this->fimExpediente) <= strtotime($this->inicioExpediente)){
            $this->error('O horário de fim de expediente deve ser maior do que o início');
            return false; 
        }
        return true;
    }

    public function validateDayAvailability(){
        // in_array verifica a existência de um valor em um array 
        // array_column retorna os valores de uma coluna, dado por sua chave (column_key) do array associativo 
        // column_key -> diaSemana
        $this->dias = Expediente::where('id_voluntario', Auth::user()->id )->get('diaSemana')->toArray(); 
          if(in_array($this->diaSemana, (array_column($this->dias, 'diaSemana')))){
                 //notificação do Toaster: 
                $this->warning('Expediente para ' .$this->diaSemana. ' já foi definido. Você pode editá-lo na tabela'); 
                return false;
            }
            return true; 
    }
        
    public function save()
    {
        $this->validate();
        if(!$this->validateHours() || !$this->validateDayAvailability()){
            return; 
        };
        
        // dd('recebeu dados save'); 

        Expediente::create([
            'id_voluntario' => Auth::user()->id, 
            'diaSemana' => $this->diaSemana,
            'inicioExpediente' =>Carbon::parse($this->inicioExpediente)->format('H:i'),
            'fimExpediente' => $this->fimExpediente,
        ]);
         //notificação pelo Toaster
        $this->success('Novo expediente criado com sucesso'); 
        //dispara evento pelo Livewire
        $this->dispatch('atualiza-expedientes')->to(GetExpediente::class);  //NÃO ESTÁ FUNCIONANDO
       
    }
    public function render()
    {
        return view('livewire.create-expediente');
    }

    
    #[On('enviaDadosEdicao')] //escuta do evento 'enviaDadosEdicao' disparado no dashboard 
    //método imediatamente abaixo é o que lida com os dados recebidos
    public function updateExpediente($dados){
        $obj = (object)$dados; 
        Expediente::where('id_voluntario', Auth::user()->id)->where( 'id', $obj->id)->update([
            'inicioExpediente' => $obj->inicioExpediente,
            'fimExpediente' => $obj->fimExpediente
        ]); 
        // dd($expediente); 
        $this->dispatch('atualiza-expedientes')->to(GetExpediente::class);
    }

    #[On('enviaDadosExclusao')]
    public function deleteExpediente($id){
        Expediente::where('id_voluntario', Auth::user()->id)->where( 'id', $id)->delete(); 
        // //notificação pelo Toaster
        $this->success('Expediente excluído com sucesso'); 
         //dispatch: dispara evento pelo Livewire
         $this->dispatch('atualiza-expedientes')->to(GetExpediente::class); //Após primeira exclusão, não abre mais modal 
    } 

}
