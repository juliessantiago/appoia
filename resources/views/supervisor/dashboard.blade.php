<x-app-layout>
    <x-toaster-hub />

    <div class="flex justify-end">
        @livewire('notificacoes')
    </div>

<!--------------------------componentes------------------------------------>
<p class="text-center text-3xl mt-10 mb-20 font-bold text-gray-400">Clique na opção que você gostaria de acessar</p>
<div class="flex justify-around m-6 mt-6">
    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="{{route('paginaAssuntos')}}">
            <img src="{{ asset('images/stickers/assuntos.png')}}" class="mx-auto">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Assuntos</p>
        </a>
    </div>

    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="{{route('paginaVoluntarios')}}">
            <img src="{{ asset('images/stickers/voluntarios.png')}}" class="mx-auto">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Voluntários</p>
        </a>
    </div>

    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="{{route('paginaConsultas')}}">
            <img src="{{ asset('images/stickers/consultas.png')}}" class="mx-auto">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Consultas Pendentes</p>
        </a>
    </div>
    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="{{route('paginaAutorizacoes')}}">
            <img src="{{ asset('images/stickers/autorizacao.png')}}" class="mx-auto" width="128px">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Autorizações</p>
        </a>
    </div>
</div>

<!----------------------------------------------------------------------------------------------------------->
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
    <div class="flex justify-end px-14 py-6">
        <div class="flex mt-4 md:mt-">
            <a href="{{route('supervisor.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>


</x-app-layout>