<?php

namespace App\Filament\Resources\FestivalResource\Pages;

use App\Filament\Resources\FestivalResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFestivals extends ManageRecords
{
    protected static string $resource = FestivalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
