<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;


class UploadAutorizacao extends Component
{
    use WithFileUploads;

    public $photo;
    public function updatedPhoto(){
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function save(){
        $aluno = Auth::user()->name; 
        //tratar o nome!
        $this->photo->storeAs('images',  'autorizacao'.$aluno, 'public');
    }
}
