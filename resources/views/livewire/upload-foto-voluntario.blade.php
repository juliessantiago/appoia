<div class="m-4">
    @if ($photo)
    <div class="flex justify-center"><!--alterar esse tamanho, só altera a div, não o tamanho da exibição da imagem--> 
       <img src="{{ $photo->temporaryUrl() }}" class=""><!--tamanho da imagem está muito grande! --> 
    </div>
   @endif
   <div wire:loading.delay  wire:target="photo" class="">
    {{-- <p class="text-pink-400 text-xl mt-2">Carregando...</p> --}}
        <div class="">
        <div role="status" class="animate-pulse">
            <div class="h-5 bg-gray-300 rounded-full dark:bg-gray-700 max-w-[640px] mb-2.5 mx-auto"></div>
            <div class="h-5 mx-auto bg-gray-300 rounded-full dark:bg-gray-700 max-w-[1000px]"></div>
            <div class="flex items-center justify-center mt-4">
                <svg class="w-8 h-8 text-gray-200 dark:text-gray-700 me-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                </svg>
                <div class="w-20 h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 me-3"></div>
                <div class="w-24 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <span class="sr-only">Loading...</span>
        </div>

        </div>
    </div><!--wire loading-->
    <form wire:submit.prevent="save">
            @if($photo)
            <div class="flex justify-center my-6">
                <button type="submit"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-sky-400 self-center">Salvar</button>   
            </div>
            @else
                <input class=""  type="file" wire:model="photo">
            @endif
    </form>
</div>
