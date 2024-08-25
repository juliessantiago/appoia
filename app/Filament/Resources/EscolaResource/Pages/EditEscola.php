<?php

namespace App\Filament\Resources\EscolaResource\Pages;

use App\Filament\Resources\EscolaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEscola extends EditRecord
{
    protected static string $resource = EscolaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
