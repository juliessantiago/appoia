<div class="p-4">
    {{-- {{$consultas}} --}}
    @if($consultas->count() > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                
                <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data
                          </th>
                        <th scope="col" class="px-6 py-3">
                          Horário
                        </th>
                   
                        <th scope="col" class="px-6 py-3"> 
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3"> 
                            Paciente
                        </th>
                        <th>
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{count($expedientes)}} --}}
                    @foreach ($consultas as $consulta)
                    
                    {{-- {{$expediente->id}} --}}
                        <div>
                            <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$consulta->id}}
                                </th>
                                <td class="px-6 py-4 capitalize">
                                    {{\Carbon\Carbon::create($consulta->dia)->format('d/m/y')}}
                                </td>
                                <td class="px-6 py-4 capitalize">
                                    {{\Carbon\Carbon::create($consulta->start)->format('H:i:s')}}
                                </td>
                               
                                <td  class="px-6 py-4">
                                    {{$consulta->status}}
                                </td>
                                <td  class="px-6 py-4">
                                    {{$consulta->aluno->name}}
                                </td>
                               @if(Auth::guard()->name == 'voluntario')
                                    {{-- <td>
                                        <button class="text-md hover:text-pink-500">
                                            Editar
                                        </button>
                                    </td> --}}
                                    <td>
                                        <button  type="submit" wire:click="$dispatch('abreModalCancelaConsulta', { consulta:  {{$consulta}} })"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-fuchsia-400 rounded-lg hover:bg-fuchsia-500 focus:ring-4 focus:outline-none focus:ring-fuchsia-500">
                                            Cancelar
                                        </button>
                                    </td>
                                
                                @endif
                            </tr>
                        </div>
               
                           
                    @endforeach
    
                </tbody>
            </table>
        </div>
    @else 
        
        <p class="text-center text-sm text-gray-500">Não há histórico de consultas</p>
    @endif 
</div>
    