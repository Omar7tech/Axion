<?php

namespace App\Filament\Resources\Investments\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\SpatieMediaLibraryImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InvestmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Information')
                    ->schema([
                        TextEntry::make('project_name')
                            ->label('Project Name')
                            ->size('lg')
                            ->weight('bold'),

                        TextEntry::make('project_description')
                            ->label('Description')
                            ->placeholder('No description provided'),

                        TextEntry::make('investment_amount')
                            ->label('Investment Amount')
                            ->money('USD')
                            ->placeholder('Not specified'),

                        IconEntry::make('is_active')
                            ->label('Status')
                            ->boolean()
                            ->trueIcon('heroicon-o-check-circle')
                            ->falseIcon('heroicon-o-x-circle')
                            ->trueColor('success')
                            ->falseColor('danger'),

                        TextEntry::make('project_content')
                            ->label('Project Details')
                            ->html()
                            ->placeholder('No details provided')
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Project Images')
                    ->schema([
                        SpatieMediaLibraryImageEntry::make('images')
                            ->collection('images')
                            ->conversion('webp')
                            ->label('')
                            ->columnSpanFull()
                            ->grow(false)
                            ->height(200)
                            ->width(300),
                    ])
                    ->columns(3)
                    ->columnSpanFull()
                    ->visible(fn ($record) => $record->hasMedia('images')),

                Section::make('Timestamps')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Created')
                            ->dateTime()
                            ->since(),

                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime()
                            ->since(),
                    ])
                    ->columns(2)
                    ->columnSpanFull()
                    ->collapsible(),
            ]);
    }
}
