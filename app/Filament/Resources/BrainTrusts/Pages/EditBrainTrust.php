<?php

namespace App\Filament\Resources\BrainTrusts\Pages;

use App\Filament\Resources\BrainTrusts\BrainTrustResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBrainTrust extends EditRecord
{
    protected static string $resource = BrainTrustResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
