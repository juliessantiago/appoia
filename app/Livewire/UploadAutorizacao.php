<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Masmerise\Toaster\Toaster;
use Masmerise\Toaster\Toastable;
use App\Models\Aluno;
use Illuminate\Support\Facades\Crypt;

class UploadAutorizacao extends Component
{
    use WithFileUploads;
    use Toastable; 

    public $file;

    public function save(){
        dd("save"); 
        // $nomeAlterado = str_replace(' ', '', Auth::user()->name);
        $hashNome = $this->file->hashName(); 
        // dd($hashNome); 
        $this->file->storeAs('files', $hashNome, 'public');
        // https://laravel.com/docs/11.x/filesystem#other-uploaded-file-information
        $updated = Aluno::where('id', Auth::user()->id)->update([
            'status' => true,
            'linkAutorizacao' => $hashNome
        ]); 
        // if($updated){
            //dispatch: dispara evento pelo Livewire
            Toaster::success('Arquivo enviado com sucesso!'); //não está funcionando!!!!!!
        // }
    }
}
