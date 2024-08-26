<x-app-layout >
<div class="bg-slate-100 p-10">
    <div class="flex justify-end">
        @livewire('notificacoes')
      </div>

    <!--------------------------componentes------------------------------------> 
    <div class="m-10">

        <x-toaster-hub />
        
        <div class="flex justify-center">
            <img src="{{ asset('images/stickers/nova-consulta.png')}}" class="">

            <div class="self-center"> 
                <p class="text-center text-sky-300 text-3xl p-6 font-bold underline"><a href="{{route('allAssuntos')}}">Quero marcar uma conversa</a></p>
            </div>
        </div>
    </div>
    {{-- <p class="text-center text-gray-500">Aqui no seu dashboard você pode visualizar seu histórico de consultas já realizadas</p>
    <p class="text-center text-gray-500">e acessar o link da chamada de vídeo no dia da consulta</p> --}}
    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center capitalize">{{ \Carbon\Carbon::now()->dayName}}, {{ \Carbon\Carbon::now()->format('d/m/Y')}}</p>
        @livewire('aluno-get-consultas')
    </div>

    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center">Meu histórico de consultas</p>
        @livewire('get-historico-consultas-aluno')
    </div>

    <div class="flex justify-end px-14 py-1"> 
        <div class="flex mt-4 md:mt-1">
            <a href="{{route('aluno.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
    
</div><!--fundo branco--> 

  
 {{-- @endif --}}
</x-app-layout>
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
        });
        Livewire.on('abreInstrucoesConsulta', (event) => {
            console.log(event.consulta.link)
            let caminho =  "/images/dashboard.png"
            Swal.fire({
                html: `
                <h1 class="text-3xl text-pink-400 m-4 font-bold">Olá! Tudo pronto?</h1>
                <p class="text-md text-gray-400">Você  pode manter sua câmera desligada para manter o anonimato, se preferir</p>,
                <p class="text-md text-gray-400">Se o voluntário ainda não estiver na chamada, aguarde um pouquinho</p>
                <p class="text-xl text-gray-400 mt-4">Boa consulta!</p>
                   `,
                confirmButtonColor: "#7dd3fc",
                confirmButtonText: "Tudo pronto",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open(event.consulta.link, '_blank');
                    // window.location.href = event.consulta.link;
                    // Livewire.dispatch('recebeLinkChamada',  {link: event.consulta.link }) //envia dados para método no componente que escuta esse evento por nome
                }
            });
               
        })
    }); 
</script> 