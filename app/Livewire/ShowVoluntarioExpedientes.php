<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Expediente;
use Carbon\Carbon; 


class ShowVoluntarioExpedientes extends Component
{
    public $expedientes;
    public function mount(){ 
        $this->expedientes = Expediente::where('id_voluntario', 1)->get(); 
    }
    public function render()
    {
        return view('livewire.show-voluntario-expedientes');
    }

    public function teste(Expediente $expediente){
        // dd(gettype($expediente));
        
        $expediente->inicioExpediente = Carbon::now()->format('H:00');  
        
        // dd($obj->inicioExpediente); 
            // Expediente::insert([
            //         $obj->inicioExpediente = Carbon::now()->format('H:00'),
            //         $obj->fimExpediente = Carbon::now()->format('19:00'),
            //         $obj->diaSemana = 'Monday' 
            //     ]
            // );
    }
}
