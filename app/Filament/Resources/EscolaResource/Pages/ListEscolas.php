<?php

namespace App\Filament\Resources\EscolaResource\Pages;

use App\Filament\Resources\EscolaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEscolas extends ListRecords
{
    protected static string $resource = EscolaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
