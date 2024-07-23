<div class="p-4">
<script>
    let link = ''
</script>    
    @if($consultasAut->count() > 0)

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-gray-600 capitalize text-md bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Início da consulta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Final da consulta
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
                    @foreach ($consultasAut as $consulta)
                    {{-- {{$expediente->id}} --}}
                  
                        <div wire:key={{ $consulta->id}}>
                            <tr  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"  >
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$consulta->id}}
                                </th>
                                <td class="px-6 py-4 capitalize">
                                    {{$consulta->start}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$consulta->end}}
                                </td>
                                <td  class="px-6 py-4">
                                    {{$consulta->status}}
                                </td>
                                <td>
                                    <a href="{{route('preMeetingVoluntario', [$consulta->link])}}" target="_blank"  class=" text-lime-500">Criar Reunião</a>
                                </td>
                                <td class="flex justify-center">
                                    <input  id="link" type="text" class="mx-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="cole aqui o link" required />
                                    {{-- <button class="text-md hover:text-pink-500">
                                        Enviar 
                                    </button> --}}
                                    <button  type="submit" wire:click="$dispatch('enviaLink', { link: link.value, id: {{$consulta->id}} })"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">
                                        Enviar link
                                    </button>
                                </td>
                                <td>
                                    
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
        <p class="text-center text-sm text-gray-500">Você ainda não possui consultas autorizadas</p>
    @endif 
</div>
    