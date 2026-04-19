<?php

namespace App\Filament\Resources\Businesses\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\SpatieMediaLibraryImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BusinessInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('title')
                            ->weight('bold'),

                        TextEntry::make('subtitle')
                            ->placeholder('—'),

                        TextEntry::make('link')
                            ->icon('heroicon-o-link')
                            ->url(fn ($state): ?string => filled($state) ? $state : null)
                            ->openUrlInNewTab()
                            ->placeholder('—')
                            ->columnSpanFull(),
                    ]),

                Section::make('Cover Image')
                    ->schema([
                        SpatieMediaLibraryImageEntry::make('cover')
                            ->collection('cover')
                            ->conversion('webp')
                            ->hiddenLabel()
                            ->height(300)
                            ->columnSpanFull(),
                    ]),

                Section::make('Content')
                    ->schema([
                        TextEntry::make('content')
                            ->prose()
                            ->placeholder('—')
                            ->columnSpanFull(),

                        TextEntry::make('description')
                            ->placeholder('—')
                            ->columnSpanFull(),
                    ]),

                Section::make('Details')
                    ->columns(2)
                    ->schema([
                        IconEntry::make('is_active')
                            ->label('Active')
                            ->boolean(),

                        TextEntry::make('created_at')
                            ->label('Created')
                            ->dateTime()
                            ->placeholder('—'),

                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime()
                            ->since()
                            ->placeholder('—'),
                    ]),
            ]);
    }
}
