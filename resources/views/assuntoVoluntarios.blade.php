<x-app-layout>
  {{-- {{$assuntoId}} --}}
    <div class="">
      <h4 class="text-center text-purple-300 text-2xl p-6 font-bold">Voluntários que abordam esse assunto</h4>
      @livewire('get-assunto-voluntarios', ['id' => $assuntoId])
    </div>
  

      {{-- <div class="flex justify-center px-14 py-6">
        <button  type="submit" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">
          <a href="{{route('allVoluntarios')}}">Ver voluntários</a>
        </button>
      </div> --}}
    

      <div class="flex justify-between px-14 py-6"> 
        <div class="flex mt-4 md:mt-6">
          <a href="{{url()->previous()}}"><img src="{{ asset('images/icons/voltar.png')}}" /></a>
          {{-- <a href="{{back()}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a> --}}
        </div>
        <div class="flex mt-4 md:mt-6">
            <a href="{{route('voluntario.logout')}}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Sair </a>
        </div>
    </div>
  
  </x-app-layout>
  