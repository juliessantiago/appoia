<div class="p-4">
<script>
    let link = ''
</script>    
    @if($consultasHoje->count() > 0)

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dia da consulta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Horário
                        </th>
                        
                        <th scope="col" class="px-6 py-3"> 
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3"> 
                       
                        </th>
                        <th scope="col" class="px-6 py-3">
                
                        </th>           
                        <th scope="col" class="px-6 py-3">
                            
                        </th> 
                    </tr>
                </thead>
                <tbody>
                    {{-- {{count($expedientes)}} --}}
                    @foreach ($consultasHoje as $consulta)
                    {{-- {{$expediente->id}} --}}
                  
                        <div wire:key={{ $consulta->id}}>
                            <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$consulta->id}}
                                </th>
                                <td class="px-6 py-4">
                                    {{-- {{$consulta->dia}} --}}
                                    {{\Carbon\Carbon::create($consulta->dia)->format('d/m/y')}}
                                    {{\Carbon\Carbon::create($consulta->dia)->dayName}}
                                </td>
                                <td class="px-6 py-4">
                                    {{\Carbon\Carbon::create($consulta->start)->format('H:i:s')}}
                                </td>
                             
                                <td  class="px-6 py-4">
                                    {{$consulta->status}}
                                </td>
                                
          
                                <td><!--preMeetingVoluntario já é a janela com a chamada. Nessa rota defino as configurações--> 
                                    <a href="{{route('preMeetingVoluntario', [$consulta->link])}}" target="_blank"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-sky-400">Criar Reunião</a>
                                </td>
                                
                                <td class="flex justify-around my-2">
                                    <input  id="link" type="text" class="mx-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="cole aqui o link" required />
                                    {{-- <button class="text-md hover:text-pink-500">
                                        Enviar 
                                    </button> --}}
                                    <button  type="submit" wire:click="$dispatch('enviaLink', { link: link.value, id: {{$consulta->id}} })"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">
                                        Enviar link
                                    </button>
                                </td>
                                <td>
                                    <button type="submit" wire:click="$dispatch('marcaAusente', { consulta: {{$consulta}} })"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-gray-300 rounded-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-400">
                                        Ausente
                                    </button>
                                </td>
                                

                            </tr>
                        </div>
                        <script> 
                             link = document.querySelector("#link")
                        </script> 
                    @endforeach
                </tbody>
            </table>
        </div>
    @else 
        <p class="text-center text-sm text-gray-500">Você não possui consultas hoje</p>
    @endif 
</div>
    