<?php

namespace App\Livewire;

use App\Models\Notificacao;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On; 

class Notificacoes extends Component
{
    public $notificacoes;
    public function mount(){
        $guard = (Auth()->guard()->name);
        switch ($guard) {
            case 'aluno':
                $this->notificacoes = Notificacao::where('lida', false)->where('notifiable_type', 'LIKE',"%Aluno%")
                ->where('notifiable_id', Auth::user()->id)->get();
                break;
            case 'voluntario':
                $this->notificacoes = Notificacao::where('lida', false)->where('notifiable_type', 'LIKE',"%Voluntario%")
                ->where('notifiable_id', Auth::user()->id)->get();
                break;
            case 'supervisor':
                $this->notificacoes = Notificacao::where('lida', false)->where('notifiable_type', 'LIKE',"%Supervisor%")
            ->where('notifiable_id', Auth::user()->id)->get();
                break;
        }
        
        
       

    }
    public function render()
    {
        return view('livewire.notificacoes');
    }
    #[On('alteraStatusNotificacao')] 
    public function mudaStatus($id){
        // dd($id);
        $updated = Notificacao::where('id', $id)->update([
            "lida" => 1
        ]); 
        if($updated){
            $this->mount();
        }
    }
}
