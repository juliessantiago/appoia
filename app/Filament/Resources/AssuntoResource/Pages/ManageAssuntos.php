<?php

namespace App\Filament\Resources\AssuntoResource\Pages;

use App\Filament\Resources\AssuntoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAssuntos extends ManageRecords
{
    protected static string $resource = AssuntoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
