<x-app-layout>

    <div class="flex mt-4 md:mt-4">
        <a href="{{route('dashboardSupervisor')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium"> 
            <img  src="{{ asset('images/icons/dashboard.png')}}" class="h-8" alt="voltar para dashboard" />
            <p class="text-sky-400 text-md ml-4">Dashboard</p>
        </a>
    </div>

    <x-toaster-hub />

    <p class="text-purple-400 text-3xl font-bold text-center">Assuntos</p>
    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center">Criar novo assunto</p>
        <div class="flex items-center justify-center"> 
            @livewire('create-assunto')
        </div>
    </div>
    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center">Assuntos</p>
        @livewire('search-assunto')
    </div>

    <div class="flex justify-between px-14 py-6"> 
   
        <div class="flex mt-4 md:mt-6">
            <a href="{{url()->previous()}}"><img src="{{ asset('images/icons/voltar.png')}}" /></a>
            {{-- <a href="{{back()}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a> --}}
        </div>
        <div class="flex justify-end px-14 py-6">
            <div class="flex mt-4 md:mt-">
                <a href="{{route('supervisor.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
     document.addEventListener('livewire:init', () => {
        Livewire.on('abreModalExclusaoAssunto', (event)=> {
            let id = event.assunto.id
            let descricao = event.assunto.descricao
            Swal.fire({
                title: "Excluir o assunto "+descricao+"?",
                showCancelButton: true,
                confirmButtonColor: "#F0ABFC", //botão de confirmação aqui é para exclusão
                cancelButtonColor: "#9CA3AF",
                confirmButtonText: "Excluir",
                cancelButtonText: `Cancelar`
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('excluiAssunto',  {id: id }) //envia dados para método no componente que escuta esse evento por nome
                }
            });
        })

    });
</script>