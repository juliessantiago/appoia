<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          <h4 class="text-center text-sky-300 text-4xl p-6 font-bold">Nossos voluntários</h4>
        </h2>
    </x-slot> --}}
    <div class="flex justify-center m-8">
     
      <img src="{{ asset('images/stickers/duvida.png')}}"/>
      <div class="flex-column max-w-md p-4 m-4">
        <h4 class="text-gray-400">Não sabe o que fazer agora? Tudo bem, vamos te ajudar!</h4>
        <span class="text-gray-400 text-md">Você pode começar escolhendo um assunto que gostaria de falar ou ir direto para a </span>
        <span class="text-sky-300 text-md"><a href="{{route('allVoluntarios')}}">lista de voluntários</a></span>
      </div>
     
    </div>
   
  
    <div class="">
      <h4 class="text-center text-purple-300 text-2xl p-6 font-bold">Escolha um tema para a conversa</h4>
      <div class="flex flex-wrap justify-center">
        @foreach($assuntos as $assunto)
          <a href="{{route('assuntoVoluntarios', $assunto->id)}}" class="w-full max-w-sm bg-white border border-gray-100 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
              <div class="flex flex-col items-center pt-10 pb-10 ">
                  <h5 class="mb-1 text-center text-xl font-medium text-violet-300 dark:text-white">{{$assunto->descricao}}</h5>
                  {{-- <div class="flex mt-4 md:mt-6">
                      <a href="{{route('showVoluntario', [$assunto->id])}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ver detalhes</a>
                  </div> --}}
              </div>
            </a><!--cardzinho-->
        @endforeach
        
      </div>

    </div>
  
    <!--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-transparent dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Bem vindo(a)!") }}
                </div>
            </div>
        </div>
    </div>-->

    <div class="flex justify-between px-14 py-6"> 
      <div class="flex mt-4 md:mt-6"> <!--url()->previous() com problema --> 
        <a href="{{url()->previous()}}"><img src="{{ asset('images/icons/voltar.png')}}" /></a> 
        {{-- <a href="{{back()}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a> --}}
      </div>
      <div class="flex mt-4 md:mt-6">
          <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
      </div>
  </div>
  
  </x-app-layout>
  