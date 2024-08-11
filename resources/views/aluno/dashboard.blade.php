<x-app-layout >
<div class="bg-white">
    <div class="flex justify-end">
        @livewire('notificacoes')
      </div>

    <!--------------------------Aluno menor de idade------------------------> 
@if( Auth::user()->status == 'naoAutorizado')
<div class="m-10">
    <div class="flex justify-center">
        <img  src="{{ asset('images/stickers/autorizacao.png')}}" alt="Appoia logo" />
    </div>
    <h2 class="text-pink-300 text-2xl text-center">Olá! Como você é menor de idade, 
    <h2 class="text-pink-300 text-2xl text-center"> vamos precisar de uma autorização, ok?</h2>
    <div class="flex justify-center align-middle mt-10">
         <h2 class="self-center mx-4 text-gray-400 text-xl">Primeiro, você precisa fazer download do PDF abaixo</h2>
    </div>
    <div class="flex justify-center align-middle mt-10"> <!--download--> 
        @livewire('download-autorizacao')
    </div>
    <div class="flex justify-center align-middle mt-6">
        <h2 class="self-center mx-4 text-gray-400 text-xl">Depois você vai precisar imprimir a autorização e pedir que seu responsável assine</h2>
   </div>
 
    <div class="flex justify-center align-middle mt-6">
        <h2 class="self-center mx-4 text-gray-400 text-xl">Agora é só tirar uma foto e colocar aqui abaixo. Pronto!</h2>
    </div>
    <div class="flex justify-center align-middle ">
        <h2 class="self-center mx-4 text-gray-400 text-lg">O arquivo deve ser no formato .jpg ou .png e pode ter no máximo 1Mb</h2>
    </div>
   <div class="flex justify-center align-middle mt-6">
        @livewire('upload-autorizacao')
   </div>
</div>
@elseif(Auth::user()->status == 'autorizado')

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

<div class="m-10">
    <p class="text-purple-400 text-xl font-bold text-center">{{ \Carbon\Carbon::now()->dayName}} , {{ \Carbon\Carbon::now()->format('d-m-Y')}}</p>
    @livewire('aluno-get-consultas')
</div>

@endif

    <div class="flex justify-end px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('aluno.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
</div><!--fundo cinza--> 
    
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