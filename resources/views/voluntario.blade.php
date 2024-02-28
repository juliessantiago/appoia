<x-app-layout>
<div class="">
    <h4 class="text-center text-purple-300 text-4xl p-6 font-bold">Detalhes do Voluntário</h4>
    <div class="flex justify-center">
     
        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
      
          <div class="flex flex-col items-center pt-10 pb-10">
              <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/voluntario.png')}}" alt="foto voluntário"/>
              <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{$voluntario->nome}}</h5>
              <span class="text-sm text-gray-500 dark:text-gray-400">Entrada: {{$voluntario->created_at}}</span>
              <span class="text-sm text-gray-500 dark:text-gray-400">CPF: {{$voluntario->cpf}}</span>
              <span class="text-sm text-gray-500 dark:text-gray-400">Matrícula: {{$voluntario->matricula}}</span>


              {{-- <span class="text-sm text-gray-500 dark:text-gray-400">Universidade: instituição</span> --}}
    
          </div>
        </div>

        

    </div><!--justify center-->
      <div class="text-center">
          <a href="{{route('allVoluntarios')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Voltar</a>
      </div>
  </div>
</x-app-layout>