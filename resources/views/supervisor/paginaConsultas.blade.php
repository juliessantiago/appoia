<x-app-layout>
    <x-toaster-hub />
    <div class="flex mt-4 md:mt-4">
        <a href="{{route('dashboardSupervisor')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium"> 
            <img  src="{{ asset('images/icons/dashboard.png')}}" class="h-8" alt="voltar para dashboard" />
            <p class="text-sky-400 text-md ml-4">Dashboard</p>
        </a>
    </div>
    
    <p class="text-purple-400 text-3xl font-bold text-center">Consultas Pendentes</p>
    <div class="m-10">
        {{-- <p class="text-purple-400 text-xl font-bold text-center">Criar novo assunto</p> --}}
        <div class="flex items-center justify-center"> 
            @livewire('get-consultas-pendentes')
        </div>

    </div>
   
<!-------------------------------------------------------------------------------------------------------------------------------------------->
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
<!----------------------------------------------------------------------------------------------------------->
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('abreModalAutorizaConsulta', (event)=> {
            // console.log(event.consulta)
            Swal.fire({
                title: "Autorizar Consulta",
                text: "Autorizando a consulta, o voluntário poderá criar o link da reunião online e disponibilizar ao paciente",
                showCancelButton: true,
                confirmButtonColor: "#F0ABFC", 
                cancelButtonColor: "#9CA3AF",
                confirmButtonText: "Autorizar",
                cancelButtonText: `Cancelar`
            }).then((result) => {
                if (result.isConfirmed) {
                    // console.log('confirmou')
                    Livewire.dispatch('autorizaConsulta',  {id: event.consulta.id }) //envia dados para método no componente que escuta esse evento por nome
                }
            });
        });

    }); 
</script>