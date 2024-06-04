<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Expediente;
use Illuminate\Support\Facades\Auth;
use Masmerise\Toaster\Toaster;
use Masmerise\Toaster\Toastable;
class CreateExpediente extends Component
{
    use Toastable; 
    public $diaSemana; 
    public $inicioExpediente; 
    public $fimExpediente; 

    protected $rules = [
        'diaSemana' => 'required',
        'inicioExpediente' => 'required',
        'fimExpediente' => 'required',
    ];

    public function validateHorarios(){
        if(strtotime($this->fimExpediente) < strtotime($this->inicioExpediente)){
            $this->warning('Cuidado: o horário de fim de expediente deve ser maior do que o início');
            return false; 
        }
        return true;
    }
        
    public function save()
    {
        $this->validate();
        if(!$this->validateHorarios()){
            return;
        };
        Expediente::create([
            'id_voluntario' => Auth::user()->id, 
            'diaSemana' => $this->diaSemana,
            'inicioExpediente' => $this->inicioExpediente,
            'fimExpediente' => $this->fimExpediente,
        ]);

        return redirect()->route('dashboardVoluntario')->success('Novo horário de expediente criado! ');
        //ajustar para dar refresh automaticamente após criação de novo expediente

    }
    public function render()
    {
        return view('livewire.create-expediente');
    }
}
