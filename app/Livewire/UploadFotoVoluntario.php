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
        $hashNome = $this->photo->hashName(); //cria hash para o nome do arquivo, mas mantém extensão
            // $local = $this->photo->store('voluntarios',  'public'); 
            $retorno = Storage::disk('s3')->put('/files', $this->photo, 'public');
        
        $updated = Voluntario::where('id', Auth::user()->id)->update([
            'foto_perfil' => $hashNome
        ]); 
        if($updated){
            Toaster::success('Foto de perfil salva com sucesso!'); 
            return redirect()->route('dashboardVoluntario'); 
            
        }
    }
    public function render()
    {
        return view('livewire.upload-foto-voluntario');
    }
}
