<div class="m-4">
    <div class="flex justify-around m-4"> 
        @foreach($voluntarios as $voluntario)
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            
                <div class="flex flex-col items-center pb-10 pt-10">
                
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/voluntario.png')}}"/>

                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white capitalize">{{$voluntario->name}}</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400 capitalize">{{$voluntario->supervisor->universidade->nome}}</span>
                    <div class="flex mt-4 md:mt-6">
                        <a href="{{route('voluntarioHorarios', [$voluntario->id])}}" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Ver horários</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $voluntarios->links() }}
</div>
