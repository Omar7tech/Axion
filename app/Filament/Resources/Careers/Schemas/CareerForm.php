<?php

namespace App\Filament\Resources\Careers\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CareerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->label('Job Description')
                    ->columnSpanFull(),
                TextInput::make('location')
                    ->placeholder('e.g. New York, NY or Remote')
                    ->maxLength(255),
                Select::make('type')
                    ->options([
                        'Full-time' => 'Full-time',
                        'Part-time' => 'Part-time',
                        'Contract' => 'Contract',
                        'Remote' => 'Remote',
                    ])
                    ->required()
                    ->default('Full-time'),
                Toggle::make('is_active')
                    ->label('Published')
                    ->default(true),
                TextInput::make('sort')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
