<x-app-layout>

    <x-toaster-hub />
  
    <p class="text-purple-400 text-3xl font-bold text-center mt-10">Autorizações</p>
    <div class="m-10">
        <div class="flex items-center justify-center"> 
            @livewire('get-autorizacoes-alunos')
        </div>
    </div>
</x-app-layout>
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('abreModalAutorizacao', (event)=> {
            let storage = "{{ Storage::url('files/') }}"
            let arquivo = event.aluno.linkAutorizacao
            let caminho = `${storage}${arquivo}`; //Template strings com interpolação de variáveis! 
            Swal.fire({
                imageUrl: caminho,
                showCloseButton: true,
            }); 
        }); 

        Livewire.on('abreModalLiberaAluno', (event)=> {
            let idAluno = event.aluno.id
                Swal.fire({
                    title: "Liberar paciente?",
                    text: "Somente libere acesso se o arquivo com a autorização assinada foi enviado corretamente",
                    showCancelButton: true,
                    confirmButtonColor: "#F0ABFC", //liberar
                    cancelButtonColor: "#9CA3AF",
                    confirmButtonText: "Liberar",
                    cancelButtonText: `Cancelar`
                }).then((result) => {
                    if (result.isConfirmed) {
                        // console.log(idAluno)
                        Livewire.dispatch('enviaIdAluno',  {idAluno: idAluno }) //envia dados para método no componente que escuta esse evento por nome
                    }
                });
        }); 

    }); 
</script>