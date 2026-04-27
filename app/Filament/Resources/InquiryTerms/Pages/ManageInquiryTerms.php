<?php

namespace App\Filament\Resources\InquiryTerms\Pages;

use App\Filament\Resources\InquiryTerms\InquiryTermResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageInquiryTerms extends ManageRecords
{
    protected static string $resource = InquiryTermResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
