<?php

namespace App\Filament\Resources\UniversidadeResource\Pages;

use App\Filament\Resources\UniversidadeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUniversidade extends EditRecord
{
    protected static string $resource = UniversidadeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
