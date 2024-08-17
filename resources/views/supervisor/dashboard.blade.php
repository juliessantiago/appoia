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
<p class="text-center text-3xl mt-10 mb-20 font-bold text-gray-400">Clique na opção que você gostaria de acessar</p>
<div class="flex justify-around m-6 mt-6">
    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="{{route('paginaAssuntos')}}">
            <img src="{{ asset('images/stickers/assuntos.png')}}" class="">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Assuntos</p>
        </a>
    </div>

    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="{{route('paginaVoluntarios')}}">
            <img src="{{ asset('images/stickers/voluntarios.png')}}" class="content-center">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Voluntários</p>
        </a>
    </div>

    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="#">
            <img src="{{ asset('images/stickers/consultas.png')}}" class="">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Consultas</p>
        </a>
    </div>
    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="{{route('paginaAutorizacoes')}}">
            <img src="{{ asset('images/stickers/autorizacao.png')}}" class="content-center" width="128px">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Autorizações</p>
        </a>
    </div>
    <div class="flex-col p-8 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="#">
            <img src="{{ asset('images/stickers/calendario.png')}}" class="">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Expedientes</p>
        </a>
    </div>
    
</div>

{{-- <div class="flex justify-around m-6 mt-6">
    <div class="flex-col p-10 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="#">
            <img src="{{ asset('images/stickers/assuntos.png')}}" class="">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Expedientes</p>
        </a>
    </div>
    <div class="flex-col p-10 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="#">
            <img src="{{ asset('images/stickers/voluntarios.png')}}" class="content-center">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Voluntários</p>
        </a>
    </div>
    <div class="flex-col p-10 bg-pink-100 rounded-md focus:bg-pink-300">
        <a href="#">
            <img src="{{ asset('images/stickers/autorizacao.png')}}" class="content-center" width="128px">
            <p class="text-pink-300 text-center text-xl font-bold mt-4">Autorizações</p>
        </a>
    </div>
</div> --}}

    {{-- <div class="m-10">
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

    <div class="m-10">
        <p class="text-purple-400 text-xl font-bold text-center">Autorizações para Aprovar</p>
        @livewire('get-autorizacoes-alunos')
    </div> --}}
<!----------------------------------------------------------------------------------------------------------->
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
    <div class="flex justify-end px-14 py-6">
        <div class="flex mt-4 md:mt-">
            <a href="{{route('supervisor.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>


</x-app-layout>