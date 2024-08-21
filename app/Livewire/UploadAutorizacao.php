<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Masmerise\Toaster\Toaster;
use Masmerise\Toaster\Toastable;
use App\Models\Aluno;
use Illuminate\Support\Facades\Storage; 
class UploadAutorizacao extends Component
{
    use WithFileUploads;
    use Toastable; 

    public $file;

    public function save(){
        $hashNome = $this->file->hashName(); //cria hash para o nome do arquivo, mas mantém extensão
            // $local = $this->file->store('files',  'public'); 
        $retorno = Storage::disk('s3')->put('/files', $this->file, 'public');

        $updated = Aluno::where('id', Auth::user()->id)->update([
            'linkAutorizacao' => $hashNome
        ]); 
        if($updated){
            //não estou enviando notificação cada vez que um aluno envia um arquivo de autorização 
            //porque vai criar um número muito grande de notificações
            //dispara toaster
            Toaster::success('Obrigada! Sua autorização será analisada e logo você poderá ter acesso às funcionalidades'); 
            return redirect()->route('dashboardAluno');
        }
    }
}
