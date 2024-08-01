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
    <div class="flex justify-end">
        @livewire('notificacoes')
        
      </div>
      
<!--------------------------componentes------------------------------------> 
    <div class="m-10">
        <x-toaster-hub />
     
        <div class="flex justify-center">
            <img src="{{ asset('images/stickers/nova-consulta.png')}}" class="">
            <div class="self-center"> 
                <p class="text-center text-sky-300 text-3xl p-6 font-bold"><a href="{{route('allAssuntos')}}">Quero marcar uma conversa</a></p>
            </div>
        </div>
    </div>

    {{-- <div class="m-10">
        @livewire('get-consulta-aluno')
    </div>
    --}}
    
        <div class="m-10">
            <p class="text-purple-400 text-xl font-bold text-center">{{ \Carbon\Carbon::now()->dayName}} , {{ \Carbon\Carbon::now()->format('d-m-Y')}}</p>
            @livewire('aluno-get-consultas')
        </div>


    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('aluno.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('exibeNotificacoes', (event) => {
                // console.log(event.notificacoes)
                toastr.options.closeButton = true
                toastr.options.timeOut = 0 //impede toastr de fechar automaticamente
                toastr.options.extendedTimeOut = 0 // Impede que toastr feche ao passar o mouse
                // let numeros = [1, 2, 3]
                let array = {id: 0, "mensagem" : "teste" }
                event.notificacoes.push(array)
                // console.log(event.notificacoes)
                event.notificacoes.forEach(notificacao => {
                    if(notificacao.mensagem != "teste"){
                        toastr.info(notificacao.mensagem)
                        toastr.options.onHidden  = function() { 
                            console.log(notificacao.id)
                            Livewire.dispatch('alteraStatusNotificacao',  {id: notificacao.id }) 
                        }
                    }
                   
                });
            })
        }); 
    </script> 
 
</x-app-layout>