<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Expediente;
use Illuminate\Support\Facades\Auth;

class CreateExpediente extends Component
{
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
            $this->addError('fimExpediente', 'O horário de fim do expediente deve ser posterior ao início do expediente.');
        }
    }
        
    public function save()
    {
        $this->validate();
        $this->validateHorarios();
        Expediente::create([
            'id_voluntario' => Auth::user()->id, 
            'diaSemana' => $this->diaSemana,
            'inicioExpediente' => $this->inicioExpediente,
            'fimExpediente' => $this->fimExpediente,
        ]);
        
        return redirect()->route('dashboardVoluntario')->with('success', 'Novo horário de expediente criado! ');

    }
    public function render()
    {
        return view('livewire.create-expediente');
    }
}
