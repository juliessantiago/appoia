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
    <div class="mb-10">
            <x-toaster-hub />
            <div class="text-center my-5">
                <p class="text-center my-10 text-purple-400 text-lg">Adicionar novo horário de expediente</p>
                <p class="text-gray-400 text-sm">Você pode criar apenas um horário de expediente para cada dia da semana</p>
                <p class="text-gray-400 text-sm">Se você já adicionou seu expediente de um dia, você pode editá-lo</p>
            </div>
        
            <div class="flex items-center justify-center">
                @livewire('create-expediente')
            </div>
        </div>
        <div class="m-5">
            @livewire('get-expediente')
    </div>
<!-------------------------------------------------------------------------------->
    <script> 
        Livewire.on('abreModalEdicao', () => {
            let id = event.detail.data.id
            let diaSemana = event.detail.data.diaSemana
            let inicioExpediente = event.detail.data.inicioExpediente
            let fimExpediente = event.detail.data.fimExpediente
            Swal.fire({
                title: 'Editar Expediente',
                html: `
                    <div class="flex-column">
                    <input type="text" id="" aria-label="disabled input" class="swal2-input w-2/3 border-purple-200 rounded-lg focus:ring-purple-300 focus:border-purple-400 ring:purple-500 cursor-not-allowed" placeholder="dia da Semana" value=${diaSemana} disabled>
                    <input type="time" id="inicio" class="swal2-input w-2/3 border-purple-200 rounded-lg focus:ring-purple-300 focus:border-purple-400 ring:purple-500" placeholder="início do expediente" value=${inicioExpediente}>
                    <input type="time" id="fim" class="swal2-input w-2/3 border-purple-200 rounded-lg focus:ring-purple-300 focus:border-purple-400 ring:purple-500 " placeholder="início do expediente" value=${fimExpediente}>
                    </div>
                    `,
                confirmButtonText: 'Editar',
                focusConfirm: false,
                preConfirm: () => {
                    let novoInicio = document.getElementById('inicio').value
                    let  novoFim = document.getElementById('fim').value 
                    if(novoFim <= novoInicio){
                        Swal.showValidationMessage('<i class="fa fa-info-circle m-2"></i> Horário final de expediente deve ser maior do que o início do expediente')
                    }
                    return {
                        id: id, 
                        inicioExpediente: novoInicio, 
                        fimExpediente: novoFim 
                    }
                }
            }).then((result) => {
                // console.log(result)
                //shortcircuit : 
                result.isConfirmed && Livewire.dispatch('enviaDadosEdicao',  {dados: result.value}) //envia dados para método no componente que escuta esse evento por nome
            }).catch($error=>{
                console.log($error)
            })
        })
      
    </script>

    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
 
</x-app-layout>