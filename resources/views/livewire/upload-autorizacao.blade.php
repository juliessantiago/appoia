<div>
    <form wire:submit.prevent="save">
        @if ($photo)
            Arquivo:
            <img class="" src="{{ $photo->temporaryUrl() }}">
        @endif
        <input type="file" wire:model="photo">
        {{-- @error('photo') <span class="error">{{ $message }}</span> @enderror --}}
        <button type="submit"  class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-sky-300 rounded-lg hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-sky-400">Salvar</button>
        
    </form>
</div>
