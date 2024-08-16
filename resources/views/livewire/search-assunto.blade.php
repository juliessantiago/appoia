<div>
    @if($assuntos->count() > 0)
        <div class="w-1/3 align-self-center mx-auto mb-4">  
            <input wire:model.live="search" type="text" id="descricao" class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-400 focus:border-purple-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar assunto" required />
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                
                <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descrição
                        </th>
                       
                        <th>
                           
                        </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    {{-- {{count($expedientes)}} --}}
                    @foreach ($assuntos as $assunto)
                    {{-- {{$expediente->id}} --}}
                        <div>
                            <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$assunto->id}}
                                </th>
                                <td class="px-6 py-4 capitalize">
                                    {{$assunto->descricao}}
                                </td>
                                @if(Auth()->guard()->name == 'supervisor')
                                <td>
                                    <button wire:click="$dispatch('abreModalExclusaoAssunto', { assunto: {{ $assunto }} })" class="text-md hover:text-pink-500">
                                        Excluir
                                    </button>
                                </td>  
                                @endif
                                @if(Auth()->guard()->name == 'aluno')
                                 <td>
                                        <button class="text-md hover:text-pink-500">
                                            <a href="{{route('assuntoVoluntarios', $assunto->id)}}">
                                                Ver voluntários
                                            </a>
                                        </button>
                                    </td>
                                @endif
                            </tr>
                        </div>  
                    @endforeach
                </tbody>
            </table>
            {{ $assuntos->links() }}
        </div>
    @else
        <p class="m-4 text-center text-gray-400">Nenhum assunto encontrado</p>
    @endif
</div>
