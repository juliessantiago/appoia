<div>
    @if ($file)
    <div class="flex justify-center align-middle">
       <img class="border-pink-800" src="{{ $file->temporaryUrl() }}">
    </div>
   @endif
    <form wire:submit.prevent="save">
            <input  type="file" wire:model="file" value="{{$file}}">
            <button type="submit"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-sky-400">Salvar</button>   
    </form>
</div>
