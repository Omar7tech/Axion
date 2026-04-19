<?php

namespace App\Filament\Resources\Businesses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BusinessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),

                Textarea::make('content')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('link')
                    ->prefixIcon('heroicon-o-link')
                ,
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
