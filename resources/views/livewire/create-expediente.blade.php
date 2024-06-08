    
    <form wire:submit.prevent="save" class="flex items-center space-x-4"> 
      
            <div class="px-4 py-2">
                <label for="diaSemana" class="block mx-2 mb-2 text-sm font-medium text-gray-500 dark:text-white">Dia da Semana</label>
                <select wire:model="diaSemana" class="max-w-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-400 focus:border-purple-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-400" name="escola">
                    <option value="" class=" font-md">Selecione um dia da semana</option>
                        <option value="segunda" class="rounded-lg">Segunda-feira</option>
                        <option value="terça" class="rounded-lg">Terça-feira</option>
                        <option value="quarta" class="rounded-lg">Quarta-feira</option>
                        <option value="quinta" class="rounded-lg">Quinta-feira</option>
                        <option value="sexta" class="rounded-lg">Sexta-feira</option>
                </select>
                @error('diaSemana') <span class="error text-red-500 text-center">{{ $message }}</span> @enderror
            </div>

        <div class="px-4 py-2"> 
            <label for="inicioExpediente" class="block mx-2 mb-2  text-sm font-medium text-gray-500 dark:text-white">Início do Expediente</label>
            <input type="time" wire:model="inicioExpediente" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-400 focus:border-purple-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-400 invalid:border-red-700" min="08:00" max="21:00" step="3600"></input>
            @error('inicioExpediente') <span class="error text-red-500 text-center">{{ $message }}</span> @enderror
        </div>
        
        <div class="px-4 py-2">
            <label for="fimExpediente" class="block mx-2 mb-2 text-sm font-medium text-gray-500 dark:text-white">Fim do Expediente</label>
            <input type="time" wire:model="fimExpediente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-400 focus:border-purple-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-400 invalid:border-red-700" min="08:00" max="21:00" step="3600"></input>
            @error('fimExpediente') <span class="error text-red-500 text-center">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <button  type="submit" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-purple-300 rounded-lg hover:bg-purple-400 focus:ring-4 focus:outline-none focus:ring-purple-400">Adicionar horário
                <div wire:loading class="">
                    <svg aria-hidden="true" class="w-8 h-4 text-gray-200 animate-spin dark:text-gray-600 fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                </div>
            </button>
        </div>
    </form>


  

