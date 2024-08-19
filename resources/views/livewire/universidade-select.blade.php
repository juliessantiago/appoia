<div>
    <select wire:model="universidades" class="block mt-1 w-full text-purple-400 border-gray-300 rounded-md " name="universidade">
        <option value="" class="text-purple-300">Selecione sua Universidade</option>
        @foreach ($universidades as $universidade)
            <option value="{{ $universidade->id }}">{{ $universidade->nome }}</option>
        @endforeach
    </select>
</div>

