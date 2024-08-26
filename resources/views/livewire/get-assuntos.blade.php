@if($assuntos->count() > 3)
<div class="grid grid-cols-2 justify-around">
    @foreach($assuntos as $assunto) 
    <div class="inline mt-1">
        <input type="checkbox" id="{{ $assunto }}" value="{{ $assunto->id }}"
        wire:model="assuntos.{{$assunto}}" name="assuntos[]" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded-xl focus:ring-purple-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mx-1">
        <label for="{{ $assunto }}" class="text-purple-400 text-sm">{{ $assunto->descricao }}</label>
    </div>
    @endforeach
</div>
@else
    <div class="">
        @foreach($assuntos as $assunto) 
        <div class="inline mt-1">
            <input type="checkbox" id="{{ $assunto }}" value="{{ $assunto->id }}"
            wire:model="assuntos.{{$assunto}}" name="assuntos[]" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded-xl focus:ring-purple-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mx-1">
            <label for="{{ $assunto }}" class="text-purple-400 text-sm">{{ $assunto->descricao }}</label>
        </div>
        @endforeach
    </div>
@endif



