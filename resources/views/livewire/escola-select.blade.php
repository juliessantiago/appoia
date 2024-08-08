<div>
    <div>
        <select wire:model="escolas" class="block mt-1 w-full text-purple-400 border-gray-300 rounded-md " name="escola">
            <option value="" class="text-purple-300">Selecione uma escola</option>
            @foreach ($escolas as $escola)
                <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
            @endforeach
        </select>
    </div>
    
</div>
