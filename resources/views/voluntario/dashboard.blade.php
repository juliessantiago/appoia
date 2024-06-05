<x-app-layout>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <div class="flex p-10 justify-center">      
        
        @if(session('success'))
        <div class="flex bg-green-300 p-10 border-green-400 rounded-lg">
              <p class="text-white">  {{session('success')}}  </p>  
        </div>
        @endif
    </div> 
        <p class="text-center text-200 text-xl font-bold text-purple-400">Meus Expedientes</p>
        <div class="flex justify-start px-14 py-6"> 
    </div>
 
   <div class="m-5">
        @livewire('get-expediente')
   </div>

  
   <div class="m-5">
        <x-toaster-hub />
        @livewire('create-expediente')
    </div>
    <script> 
        window.addEventListener('abreModalEdicao', event => {
            let diaSemana = event.detail.data.diaSemana
            let inicioExpediente = event.detail.data.inicioExpediente
            let fimExpediente = event.detail.data.fimExpediente
            Swal.fire({
                title: 'Editar Expediente',
                html: `
                    <div class="flex-column">
                    <input type="text" id="" aria-label="disabled input" class="swal2-input w-2/3 border-purple-200 rounded-lg focus:ring-purple-300 focus:border-purple-400 ring:purple-500 cursor-not-allowed" placeholder="dia da Semana" value=${diaSemana} disabled>
                    <input type="time" id="batata" class="swal2-input w-2/3 border-purple-200 rounded-lg focus:ring-purple-300 focus:border-purple-400 ring:purple-500" placeholder="início do expediente" value=${inicioExpediente}>
                    <input type="time" id="fim" class="swal2-input w-2/3 border-purple-200 rounded-lg focus:ring-purple-300 focus:border-purple-400 ring:purple-500 " placeholder="início do expediente" value=${fimExpediente}>
                    </div>
                    `,
                confirmButtonText: 'Editar',
                focusConfirm: false,
                preConfirm: () => {
                    const novoInicio = document.getElementById('batata').value
                    const novoFim = document.getElementById('fim').value 
                    return {
                        inicioExpediente: novoInicio, 
                        fimExpediente: novoFim
                    }
                }
            }).then((result) => {
                Livewire.dispatch('enviaDadosEdicao', {dados: result.value}) //envia dados para método no componente que escuta esse evento por nome
            })
        })
    </script>

    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
 
</x-app-layout>