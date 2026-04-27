<?php

namespace App\Filament\Resources\BrainTrusts\Pages;

use App\Filament\Resources\BrainTrusts\BrainTrustResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBrainTrusts extends ListRecords
{
    protected static string $resource = BrainTrustResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
