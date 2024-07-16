<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On; 
use Masmerise\Toaster\Toastable;

class GetConsultasPendentes extends Component
{
    use Toastable; 

    public $consultasPend;
    public function mount(){
        $this->consultasPend = Consulta::where('id_voluntario', Auth::user()->id)->where('status', 'pendente')->get(); 
    }
    public function render()
    {
        return view('livewire.get-consultas-pendentes');
    }
    #[On('enviaStringLink')] //escuta do evento 'enviaStringLink' disparado no dashboard 
    //método imediatamente abaixo é responsável por lidar com o evento 
    public function setLinkConsulta($string, $id){
        $linkReuniao = 'vpaas-magic-cookie-ce4ec617270641c8a072e2e3265ca160/'.$string;
        $updated = Consulta::where('id_voluntario', Auth::user()->id)->where( 'id', $id)->update([
           'link' => $linkReuniao
        ]); 
        if($updated){
            $this->success('Link criado e salvo com sucesso!'); //toaster 
        }else{
            $this->error('Desculpe, ocorreu um erro.');
        }
    }

}
