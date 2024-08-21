<?php

namespace App\Livewire;
use App\Models\Consulta;
use App\Models\Supervisor;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On; 
use Masmerise\Toaster\Toastable;
use App\Models\Notificacao;


class GetConsultas extends Component
{
    use Toastable; 

    public $consultas; 
    //componente usado em dashboard de supervisor e de voluntário
    public function mount($id){
        $this->consultas = Consulta::where('id_voluntario', $id)->get(); 
        // $this->consultas = DB::table('consultas')->join('alunos', 'consultas.id_aluno', '=', 'alunos.id')->
        //     select('consultas.id', 'consultas.dia', 'consultas.start', 'consultas.status', 'alunos.name')->get(); 
            //consulta usando relacionamento não funcionou... 
        }
    
    #[On('enviaDadosCancelamento')] 
    public function cancelaConsulta($consulta){
        $objConsulta = (object)$consulta; 
        // dd(Auth::user()->supervisor_id); 
        // dd($objConsulta); 
        if($objConsulta->status == 'cancelada'){
            $this->warning('Consulta já foi cancelada anteriormente'); //toaster 
        }else{
            $updated = Consulta::where('id', $objConsulta->id)->update([
                "status" => 'cancelada'
            ]); 
            if($updated){
                $this->success('Consulta cancelada com sucesso'); //toaster 
                $aluno = Aluno::find($objConsulta->id_aluno); 
                $supervisor = Supervisor::find(Auth::user()->supervisor_id); 
                $notificacao = new Notificacao([
                    'mensagem' => 'Consulta com voluntário '. Auth::user()->name . ' foi cancelada', //era para funcionar rrelacionamento ($consulta->voluntario)
                    'lida' => false,
                ]);

                $aluno->notificacoes()->save($notificacao); //cria relação entre aluno e a notificação criada
                $supervisor->notificacoes()->save($notificacao); //cria relação entre supervisor e a notificação criada

                // $this->refreshComponent(); //não estou conseguindo dar refresh no componente
    
            }else{
                $this->error('Desculpe, ocorreu um erro.');
            }
        }
    }
    public function render()
    {
        return view('livewire.get-consultas');
    }
    // protected function refreshComponent()
    // {
    //     $this->emit('$refresh');
    // }
}
