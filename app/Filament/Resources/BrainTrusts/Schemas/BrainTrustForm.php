<?php

namespace App\Filament\Resources\BrainTrusts\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BrainTrustForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role'),
                Toggle::make('is_active')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('cover')
                    ->collection('cover')
                    ->image()
                    ->imageEditor()
                    ->conversion('webp')
                    ->visibility('public')
                    ->disk('public')
                    ->hiddenLabel()
                    ->columnSpanFull(),
            ]);
    }
}
