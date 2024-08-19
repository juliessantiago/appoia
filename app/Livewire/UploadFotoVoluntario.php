<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Masmerise\Toaster\Toaster;
use Masmerise\Toaster\Toastable;
use App\Models\Voluntario;
use Illuminate\Support\Facades\Storage; 
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadFotoVoluntario extends Component
{
    use WithFileUploads;
    use Toastable; 
    public $photo;

    public function save(){
        $hashNome = $this->file->hashName(); //cria hash para o nome do arquivo, mas mantém extensão
        if(app()->env == 'local'){
            $local = $this->file->store('files',  'public'); 
        }else{
            $retorno = Storage::disk('s3')->put('/files', $this->file, 'public');
        }
        $updated = Voluntario::where('id', Auth::user()->id)->update([
            'linkAutorizacao' => $hashNome
        ]); 
        if($updated){
            //não estou enviando notificação cada vez que um aluno envia um arquivo de autorização 
            //porque vai criar um número muito grande de notificações
            //dispara toaster
            Toaster::success('Obrigada! Sua autorização será analisada e logo você poderá ter acesso às funcionalidades'); 
        }
    }
    public function render()
    {
        return view('livewire.upload-foto-voluntario');
    }
}
