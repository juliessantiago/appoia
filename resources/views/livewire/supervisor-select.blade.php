<div>
    <div>
        <select wire:model="sup" class="block mt-1 w-full text-purple-400 border-gray-300 rounded-md " name="supervisor">
            <option value="" class="text-purple-300">Selecione seu supervisor</option>
            @foreach ($sup as $supervisor)
                <option value="{{ $supervisor->id }}">{{ $supervisor->name }}</option>
            @endforeach
        </select>
    </div>
    
</div>
