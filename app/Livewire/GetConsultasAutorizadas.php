<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Consulta;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On; 
use Masmerise\Toaster\Toastable;
use Carbon\Carbon; 

class GetConsultasAutorizadas extends Component
{
    use Toastable; 

    public $consultasAut;
    public function mount(){
        $today = Carbon::now()->format('Y-m-d'); 
        $this->consultasAut = Consulta::where('id_voluntario', Auth::user()->id)
        ->where('dia', $today)->get(); 
    }
    public function render()
    {
        return view('livewire.get-consultas-autorizadas');
    }

    #[On('salvaLinkReuniaoAberta')] //escuta do evento 'enviaStringLink' disparado no dashboard 
    public function salvaLink($link, $id){
        // dd($id); 
        $updated = Consulta::where('id_voluntario', Auth::user()->id)->where( 'id', $id)->update([
            'link' => $link,
            'status' => 'disponivel'
        ]); 
        if($updated){
            $this->success('Link salvo com sucesso'); //toaster 
            $this->mount(); 
        }
       
    }
    #[On('alteraStatusAusente')] 
    public function salvaStatusAusente($id){
        $updated = Consulta::where('id_voluntario', Auth::user()->id)->where( 'id', $id)->update([
            'status' => 'ausente'
        ]); 
        if($updated){
            $this->success('Status alterado para Ausente'); //toaster 
            $this->mount(); 
        }
    }
    

    //#[On('enviaStringLink')] //escuta do evento 'enviaStringLink' disparado no dashboard 
    //método imediatamente abaixo é responsável por lidar com o evento 
    // public function setLinkConsulta($string, $id){
    //     $linkReuniao = 'vpaas-magic-cookie-ce4ec617270641c8a072e2e3265ca160/'.$string;
    //     $updated = Consulta::where('id_voluntario', Auth::user()->id)->where( 'id', $id)->update([
    //        'link' => $linkReuniao
    //     ]); 
    //     if($updated){
    //         $this->success('Link criado e salvo com sucesso!'); //toaster 
    //     }else{
    //         $this->error('Desculpe, ocorreu um erro.');
    //     }
    // }

}
