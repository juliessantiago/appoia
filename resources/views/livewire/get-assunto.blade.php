<div class="p-4">
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            
            <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Título
                    </th>
                    <th scope="col" class="">

                    </th>
                    <th scope="col" class="">
                        
                    </th>
                 
                </tr>
            </thead>
            <tbody>
                {{-- {{count($expedientes)}} --}}
                @foreach ($assuntos as $assunto)
                {{-- {{$expediente->id}} --}}
                <div wire:key={{ $assunto->id}}>
                    <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$assunto->id}}
                        </th>
                        <td class="px-6 py-4 capitalize">
                            {{$assunto->descricao}}
                        </td>
                            <td>
                                {{-- <button wire:click="$dispatch('abreModalEdicao', { data: {{ $assunto }} })" class="text-md hover:text-pink-500">
                                    Editar
                                </button> --}}
                            </td>
                            <td>
                                <button wire:click="$dispatch('abreModalExclusao', { data: {{ $assunto }} })" class="text-md hover:text-pink-500">
                                    Excluir
                                </button>
                            </td>
                                
                    </tr>
                </div>
           
                       
                @endforeach

            </tbody>
        </table>
    </div>

</div>

