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
        // dd("save"); 
        // $nomeAlterado = str_replace(' ', '', Auth::user()->name);
        $hashNome = $this->file->hashName(); 
        // dd($hashNome); 
        // $this->file->storeAs('files', $hashNome, 'public'); 
        $this->file->storeAs(path: 'files', name: $hashNome);
        // $retorno = Storage::disk('s3')->put('/files', $hashNome, 'public');
        // dd($retorno); 
        $updated = Aluno::where('id', Auth::user()->id)->update([
            // 'status' => true,
            'linkAutorizacao' => $hashNome
        ]); 
        // dd($updated); 
        if($updated){
            //não estou enviando notificação cada vez que um aluno envia um arquivo de autorização 
            //porque vai criar um número muito grande de notificações
            //dispara toaster
            Toaster::success('Obrigada! Sua autorização será analisada e logo você poderá ter acesso às funcionalidades'); 
            return redirect()->route('dashboardAluno');
        }
    }
}
