<x-app-layout>
    <div class="flex justify-center m-8">
      <div class="flex-column max-w-md p-4 m-4 bg-purple-300 rounded-md">
        {{-- <img src="{{ asset('images/stickers/duvida.png')}}"/> --}}
        <h4 class="text-slate-50">Não sabe o que fazer agora? Tudo bem, vamos te ajudar!</h4>
        <span class="text-slate-50 text-md">Você pode começar escolhendo um assunto que gostaria de falar ou ir direto para a </span>
        <span class="text-md text-slate-50 text-md mx-2 underline"><a href="{{route('allVoluntarios')}}">lista de voluntários</a></span>
      </div>
    </div>
   
    @if($assuntos->count() > 0)
      <div class="">
        <h4 class="text-center text-purple-300 text-2xl p-6 font-bold">Escolha um tema para a conversa</h4>
        <div class="flex flex-wrap justify-center">
          @foreach($assuntos as $assunto)
            <a href="{{route('assuntoVoluntarios', $assunto->id)}}" class="w-full max-w-sm bg-white border-gray-100 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4  hover:border-purple-400 border-2 focus:ring-4 focus:outline-none focus:ring-purple-400">
                <div class="flex flex-col items-center pt-10 pb-10 ">
                    <h5 class="mb-1 text-center text-xl font-medium text-violet-300 dark:text-white">{{$assunto->descricao}}</h5>
                </div>
              </a><!--cardzinho-->
          @endforeach
          
        </div>

      </div>
    
      <div class="flex justify-between px-14 py-6"> 
        <div class="flex mt-4 md:mt-6"> <!--url()->previous() com problema --> 
          <a href="{{url()->previous()}}"><img src="{{ asset('images/icons/voltar.png')}}" /></a> 
          {{-- <a href="{{back()}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a> --}}
        </div>
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
      </div>
    @else
    
    @livewire('show-sorry-face')
      <p class="text-md text-gray-400 text-center">Desculpe, ainda não temos nenhum assunto cadastrado.</p>
      
      <p class="text-md text-gray-400 text-center"> Acesse a página com todos os voluntários</p>
    @endif 
  </x-app-layout>
  