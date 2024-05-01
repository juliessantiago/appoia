<div>
    <div>
        <p wire:model ="escolas">{{$escolas}}</p>
        <select wire:model="escolas">
            <option value="">Selecione uma escola</option>
            @foreach ($escolas as $escola)
                <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
            @endforeach
        </select>
    </div>
    
</div>
