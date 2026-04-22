<?php

namespace App\Filament\Resources\Investments\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InvestmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('project_name')
                    ->required()
                    ->maxLength(255)
                    ->label('Project Name')
                    ->placeholder('Enter project name'),

                TextInput::make('project_description')
                    ->maxLength(255)
                    ->label('Project Description')
                    ->placeholder('Brief description of the project'),

                RichEditor::make('project_content')
                    ->label('Project Content')
                    ->placeholder('Detailed project information')
                    ->columnSpanFull()
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('investments/attachments'),

                TextInput::make('investment_amount')
                    ->label('Investment Amount')
                    ->numeric()
                    ->prefix('$')
                    ->placeholder('0.00')
                    ->minValue(0)
                    ->step(0.01),

                SpatieMediaLibraryFileUpload::make('images')
                    ->collection('images')
                    ->label('Project Images')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->downloadable()
                    ->visibility('public')
                    ->disk('public')
                    ->conversion('webp')
                    ->panelLayout('grid')
                    ->maxFiles(5)
                    ->previewable()
                    ->maxSize(6144)
                    ->helperText('Upload up to 5 images. The first image will be used as the cover image.')
                    ->columnSpanFull(),
            ]);
    }
}
