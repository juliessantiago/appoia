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
        
    public function save()
    {
        $this->validate();
        Expediente::create([
            'id_voluntario' => Auth::user()->id, 
            'diaSemana' => $this->diaSemana,
            'inicioExpediente' => $this->inicioExpediente,
            'fimExpediente' => $this->fimExpediente,
        ]);
 
        return redirect()->to('/dashboardVoluntario');
    }
    public function render()
    {
        return view('livewire.create-expediente');
    }
}
