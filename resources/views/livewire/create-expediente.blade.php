<div>
    <form wire:submit="save"> 
        <input type="text" wire:model="diaSemana">
        @error('diaSemana') <span class="error">{{ $message }}</span> @enderror
     
        <input type="text" wire:model="inicioExpediente"></input>
        @error('inicioExpediente') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="fimExpediente"></input>
        @error('fimExpediente') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Save</button>
    </form>
</div>
