<div class="">
    {{-- {{$notificacoes->count()}} --}}
    <a href="#" class="flex justify-around" wire:click="$dispatch('exibeNotificacoes', { notificacoes: {{ $notificacoes }} })">
         <img  src="{{ asset('images/icons/bell.png')}}" class="p-4 z-0" alt="notificacoes" />
         @if($notificacoes->count()> 0)
            <p class=" text-sky-400 z-50 text-md font-extrabold mr-10 -ml-6 -mb-2">{{$notificacoes->count()}}</p>
        @endif
    </a>
</div>
