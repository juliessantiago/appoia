<?php

namespace App\Livewire;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class GetConsultas extends Component
{
    public $consultas; 

    public function mount($id){
        $this->consultas = Consulta::where('id_voluntario', $id)->get(); 
        // $this->consultas = DB::table('consultas')->join('alunos', 'consultas.id_aluno', '=', 'alunos.id')->
        //     select('consultas.id', 'consultas.dia', 'consultas.start', 'consultas.status', 'alunos.name')->get(); 
            //consulta usando relacionamento não funcionou... 
        }
    public function render()
    {
        return view('livewire.get-consultas');
    }
}
