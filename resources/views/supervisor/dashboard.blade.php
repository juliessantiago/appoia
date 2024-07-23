<x-app-layout>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <div class="flex justify-center">      
        
        @if(session('success'))
        <div class="flex bg-green-300 p-10 border-green-400 rounded-lg">
              <p class="text-white">  {{session('success')}}  </p>  
        </div>
        @endif
    </div> 
      
<!--------------------------componentes------------------------------------> 
    <div class="m-10">
        <x-toaster-hub />
    </div>
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
<!----------------------------------------------------------------------------------------------------------->
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('abreModalExclusao', ()=> {
            let id = event.detail.data.id
            let descricao = event.detail.data.descricao
            Swal.fire({
                title: "Excluir o assunto "+descricao+"?",
                showCancelButton: true,
                confirmButtonColor: "#F0ABFC", //botão de confirmação aqui é para exclusão
                cancelButtonColor: "#9CA3AF",
                confirmButtonText: "Excluir",
                cancelButtonText: `Cancelar`
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('enviaDadosExclusao',  {id: id }) //envia dados para método no componente que escuta esse evento por nome
                }
            });
        })
    });
</script>
    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('supervisor.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
 
</x-app-layout>