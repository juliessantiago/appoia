<x-app-layout>

    <x-toaster-hub />
  
    <p class="text-purple-400 text-3xl font-bold text-center mt-10">Autorizações</p>
    <div class="m-10">
        <div class="flex items-center justify-center"> 
            @livewire('get-autorizacoes-alunos')
        </div>
    </div>

    <div class="flex justify-between px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{url()->previous()}}"><img src="{{ asset('images/icons/voltar.png')}}" /></a>
            {{-- <a href="{{back()}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a> --}}
        </div>
        <div class="flex justify-end px-14 py-1"> 
            <div class="flex mt-4 md:mt-1">
                <a href="{{route('supervisor.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
            </div>
        </div>
    </div>
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
</x-app-layout>
