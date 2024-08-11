<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Masmerise\Toaster\Toaster;
use Masmerise\Toaster\Toastable;
use App\Models\Aluno;

class UploadAutorizacao extends Component
{
    use WithFileUploads;
    use Toastable; 

    public $imagem;
    public function updatedPhoto(){
        $this->validate([
            'imagem' => 'image|max:1024',
        ]);
    }

    public function save(){
        $nomeAluno = Auth::user()->name; 
        $nomeAlterado = str_replace(' ', '', $nomeAluno);
        // dd($nomeAlterado); 
        $this->imagem->storeAs('images',  'autorizacao'.$nomeAlterado, 'public');
        $updated = Aluno::where('id', Auth::user()->id)->update([
            'status' => 'autorizado',
        ]); 
        $this->success('Arquivo enviado com sucesso!'); //não está funcionando!!!!!!
        //dispatch: dispara evento pelo Livewire
        
    }
}
