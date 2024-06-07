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
       
        return redirect()->route('dashboardVoluntario')->success('Novo horário de expediente criado! ');
        //ajustar para dar refresh automaticamente após criação de novo expediente

    }
    public function render()
    {
        return view('livewire.create-expediente');
    }

    
    #[On('enviaDadosEdicao')] //escuta do evento 'enviaDadosEdicao' disparado no dashboard 
    //método imediatamente abaixo é o que lida com os dados recebidos
    public function recebeDadosSwal($dados){
        $obj = (object)$dados; 
        Expediente::where('id_voluntario', Auth::user()->id)->where( 'id', $obj->id)->update([
            'inicioExpediente' => $obj->inicioExpediente
        ]); 
        // dd($expediente); 
        $this->dispatch('atualiza-expedientes')->to(GetExpediente::class);
    }

}
