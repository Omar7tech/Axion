<?php

namespace App\Filament\Resources\Businesses\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BusinessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->description('The main identifiers for this business entry.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        TextInput::make('subtitle')
                            ->maxLength(255),

                        TextInput::make('link')
                            ->url()
                            ->maxLength(2048)
                            ->prefixIcon('heroicon-o-link')
                            ->placeholder('https://'),
                    ]),

                Section::make('Cover Image')
                    ->description('Upload a cover image for this business.')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('cover')
                            ->collection('cover')
                            ->image()
                            ->imageEditor()
                            ->conversion('webp')
                            ->visibility('public')
                            ->disk('public')
                            ->hiddenLabel()
                            ->columnSpanFull(),
                    ]),

                Section::make('Content')
                    ->description('Detailed content and summary for this business.')
                    ->schema([
                        RichEditor::make('content')
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->rows(4)
                            ->maxLength(5000)
                            ->columnSpanFull(),
                    ]),

                Section::make('Settings')
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active')
                            ->helperText('Inactive businesses will not be shown publicly.')
                            ->default(true)
                            ->required(),
                    ]),
            ]);
    }
}
