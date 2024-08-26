<div class="mt-2 mb-2">
    @foreach($assuntos as $assunto)
        <div>
            <input type="checkbox" id="{{ $assunto }}" value="{{ $assunto->id }}"
                   wire:model="assuntos.{{$assunto}}" name="assuntos[]" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded-xl focus:ring-purple-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="{{ $assunto }}" class="text-purple-400">{{ $assunto->descricao }}</label>
        </div>
    @endforeach

</div>

