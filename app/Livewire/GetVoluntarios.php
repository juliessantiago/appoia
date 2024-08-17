<?php

namespace App\Livewire;
use App\Models\Voluntario;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class GetVoluntarios extends Component
{
    use WithPagination;
   
    public function render()
    {
        //Atenção: para usar paginação NÃO pode usar método MOUNT, usa-se diretamente  o render 
        $voluntarios = Voluntario::where('supervisor_id', Auth::user()->id)->get(); 
        return view('livewire.get-voluntarios', ['voluntarios' => $voluntarios]);
    }
}
