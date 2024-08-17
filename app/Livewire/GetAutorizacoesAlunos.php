<?php

namespace App\Livewire;
use App\Models\Aluno;
use Livewire\Component;
use Livewire\Attributes\On; 
use Masmerise\Toaster\Toastable;

class GetAutorizacoesAlunos extends Component
{
    use Toastable; 
    public $alunosAutorizar; 
    //descobrir forma de exibir na ordem dos dias da semana
     public function mount(){ 
         $this->alunosAutorizar = Aluno::where('status', 0)->get(); 
     }

     #[On('enviaIdAluno')] 
     public function liberaAluno($idAluno){//aqui supervisor altera status de aluno que enviou autorização
        $updated = Aluno::where('id', $idAluno)->update([
            'status' => true,
        ]); 
        if($updated){
            $this->success('Status de paciente alterado com sucesso'); //toaster 
        }else{
            $this->error('Desculpe, ocorreu um erro.');
        }
     }
    public function render()
    {
        return view('livewire.get-autorizacoes-alunos');
    }
}
