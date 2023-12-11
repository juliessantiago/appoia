<?php

namespace App\Filament\Resources\VoluntarioResource\Pages;

use App\Filament\Resources\VoluntarioResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageVoluntarios extends ManageRecords
{
    protected static string $resource = VoluntarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
