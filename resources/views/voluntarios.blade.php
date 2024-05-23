<x-app-layout>
  <div class="p-10">
    <h4 class="text-center text-purple-300 text-4xl p-6 font-bold">Nossos voluntários</h4>
    <div class="w-full flex justify-center items-center flex-wrap">
      @foreach($voluntarios as $voluntario)
        <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4">
          {{-- <a href="{{route('showVoluntario', [$voluntario->id])}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> --}}
            <a href="{{route('voluntarioHorarios', [$voluntario->id])}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <div class="flex flex-col justify-center items-center p-10 duration-300 transform hover:scale-110">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/voluntario.png')}}" alt="foto voluntário"/>
                <h5 class=" text-center text-xl font-medium text-gray-500 dark:text-white">{{$voluntario->name}}</h5>

                {{-- <span class="text-sm text-pink-500 dark:text-gray-400">Entrada: {{$voluntario->created_at}}</span> --}}
                {{-- <span class="text-sm text-gray-500 dark:text-gray-400">Universidade: instituição</span> --}}
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</x-app-layout>

