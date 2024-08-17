<?php

namespace App\Livewire;
use App\Models\Consulta;
use Livewire\Component;
use Livewire\WithPagination;

class GetConsultasPendentes extends Component //exibe consultas pendentes para supervisor autorizar
{
    use WithPagination;
    public function render()
    {
        $pendentes = Consulta::where('status', 'pendente')->paginate(3);
        //Preciso trazer nome paciente
        return view('livewire.get-consultas-pendentes', ['pendentes' => $pendentes]);
    }
}
