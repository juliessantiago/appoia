<x-app-layout>

    <x-toaster-hub />
  
    <p class="text-purple-400 text-3xl font-bold text-center">Autorizações para aprovar</p>
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

    }); 
</script>