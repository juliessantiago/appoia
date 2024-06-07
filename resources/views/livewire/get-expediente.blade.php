<div class="p-4">
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            
            <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dia da semana
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Início do expediente
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fim expediente
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- {{count($expedientes)}} --}}
                @foreach ($expedientes as $expediente)
                {{-- <p>{{$expediente}}</p> --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$expediente->id}}
                        </th>
                        <td class="px-6 py-4 capitalize">
                            {{$expediente->diaSemana}}
                        </td>
                        <td class="px-6 py-4">
                            {{$expediente->inicioExpediente}}
                        </td>
                        <td class="px-6 py-4">
                            {{$expediente->fimExpediente}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            {{-- <a href="#" class="font-medium text-pink-500 dark:text-blue-500 hover:underline">Editar</a> --}}
                            <button wire:click="$dispatch('abreModalEdicao', { data: {{ $expediente }} })" class="text-md hover:text-pink-500">
                                Editar
                            </button>
                            <!-- dispatch: dispara evento, com o nome fornecido 'abreModalEdicao' que será
                                escutado dentro do js no dashboard com os dados desse expediente específico--> 
                        </td>
                        <td> 
                            <button class="text-md hover:text-pink-500">
                                Excluir
                            </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

