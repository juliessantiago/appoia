<x-app-layout>
    <x-toaster-hub />

    @if(Auth::user()->foto_perfil == null || Auth::user()->foto_perfil == '' )
      <div class="flex justify-between mx-4">
            <div class="flex mt-4 md:mt-6">
                <a href="{{route('uploadFoto')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Cadastrar foto</a>
            </div>
            @livewire('notificacoes')
        </div>
    @else
    <div class="flex justify-end mx-4">
        @livewire('notificacoes')
    </div>
    @endif

      
<!--------------------------componentes------------------------------------> 
@if(Auth::user()->foto_perfil == null || Auth::user()->foto_perfil == '' )
    <script>
           Swal.fire({
                title: "Envie sua foto de perfil",
                text: "Se seu perfil exibir uma foto, os pacientes se sentirão mais à vontade para marcar uma consulta",
                showCancelButton: true,
                confirmButtonColor: "#F0ABFC", 
                cancelButtonColor: "#9CA3AF",
                confirmButtonText: "Enviar agora",
                cancelButtonText: `Depois`
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/voluntario/uploadFoto";
                }
            });
    </script>
@endif
  
    <div class="mb-10">
        <p class="text-purple-400 text-xl font-bold text-center">Meus Expedientes</p>
        <div class="text-center my-5">
            {{-- <p class="text-center my-10 text-purple-400 text-lg">Adicionar novo horário de expediente</p> --}}
            <p class="text-gray-400 text-sm">1. Você pode criar apenas um horário de expediente para cada dia da semana</p>
            <p class="text-gray-400 text-sm">2. Se você já adicionou seu expediente de um dia, você pode editá-lo</p>
            <p class="text-gray-400 text-sm">3. É necessário informar as horas completas, sem minutos. Exemplo: 12:00</p>
        </div>
        <div class="flex items-center justify-center">
            @livewire('create-expediente')
        </div>
        <div class="m-5">
            {{-- @livewire('get-expediente') --}}
            @livewire('get-expediente')
        </div>
        <div class="m-5">
        </div>
    </div>
    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center">Consultas de Hoje</p>
        <ol class="text-gray-400 p-4 m-3 bg-slate-50 shadow-md sm:rounded-lg">
            <li>1. Clique em Criar reunião</li>
            <li>2. Uma nova aba será aberta. Habilite câmera e microfone. Insira seu nome e clique em Entrar na reunião</li>
            <li><span>3. Após a reunião estar aberta, clique em Participantes <img class="inline" src="{{ asset('images/icons/convidar.png')}}"/> ->  Convidar alguém</span></li>
            <li>4. Clique no botão para copiar o link  <img class="inline" src="{{ asset('images/icons/copiar.png')}}"/></li>
            <li>5. Aqui no seu dashboard, encontre a consulta, cole o link no campo indicado e clique em enviar link</li>
        </ol>
        @livewire('get-consultas-hoje-vol')
    </div>
    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center">Minhas Consultas</p>
        {{-- @livewire('get-consultas') --}}
        {{-- {{Auth::user()->id}} --}}
        @livewire('get-consultas', ['id' => Auth::user()->id])
    </div>
    

<!-------------------------------------------------------------------------------->
<script> 
    document.addEventListener('livewire:init', () => {
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
                confirmButtonText: 'OK',
                confirmButtonColor: '#c084fc',
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
        Livewire.on('abreModalExclusao', ()=> { //de expediente
            let id = event.detail.data.id
            let diaSemana = event.detail.data.diaSemana
            Swal.fire({
                title: "Excluir o expediente de "+diaSemana+"?",
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
        Livewire.on('enviaLink', (event)=> {
            let link = ''
            link = event.link
            idConsulta = event.id
            // console.log(link)
            if(link == null || link == '' || link == "" ){
                // console.log('tá vazia')
                toastr.error('Você precisa colar o link da reunião antes')
            }else{
                Livewire.dispatch('salvaLinkReuniaoAberta',  {link: link, id: idConsulta }) //envia dados para método no componente que escuta esse evento por nome
            }
        })
        Livewire.on('marcaAusente', (event ) => {
            let finalConsulta = moment(event.consulta.end)
            //para marcar que aluno não compareceu à reunião 
            //é necessário que o horário da consulta já tenha passado 
            //lembrando que as consultas exibidas nessa chamada de evento são do dia corrente
            if((moment().hours()) < finalConsulta.hours()){
                toastr.error('Voce só pode marcar como ausente após o horário de término da consulta')
            }
            // else if (event.consulta.status === 'ausente'){
            //     toastr.warning(`Status da consulta já é "Ausente"`)
            // }
            else{
                Livewire.dispatch('alteraStatusAusente',  {id: event.consulta.id, dia: event.consulta.dia })
            }
        })
        Livewire.on('exibeNotificacoes', (event) => {
            toastr.options.closeButton = true
            toastr.options.timeOut = 0 //impede toastr de fechar automaticamente
            toastr.options.extendedTimeOut = 0, // Impede que toastr feche ao passar o mouse
            event.notificacoes.forEach(notificacao => {
                toastr.info(notificacao.mensagem)
                toastr.options.onclick = function() { 
                    // console.log(notificacao.id)
                    Livewire.dispatch('alteraStatusNotificacao',  {id: notificacao.id }) 
                }
                
            });
        })

        Livewire.on('abreModalCancelaConsulta', (event) => {      
            Swal.fire({
                title: "Cancelar consulta?",
                text: "Se você cancelar a consulta, o paciente será notificado e terá que marcá-la novamente em outra data", 
                showCancelButton: true,
                confirmButtonColor: "#F0ABFC", //botão de confirmação aqui é para exclusão
                cancelButtonColor: "#9CA3AF",
                confirmButtonText: "Cancelar consulta",
                cancelButtonText: "Não cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('enviaDadosCancelamento',  {consulta: event.consulta }) //envia dados para método no componente que escuta esse evento por nome
                }
            });

        })

    });//init

     
      
</script>

    <div class="flex justify-end px-14 py-6"> 
        
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
    
 
</x-app-layout>