<?php

namespace App\Filament\Resources\Careers\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CareerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                Section::make('Job Details')
                    ->columnSpan(2)
                    ->columns(2)
                    ->schema([
                        TextEntry::make('title')->columnSpanFull(),
                        TextEntry::make('location')->placeholder('—'),
                        TextEntry::make('type')->badge(),
                        TextEntry::make('description')
                            ->html()
                            ->columnSpanFull()
                            ->placeholder('No description provided.'),
                    ]),

                Section::make('Meta')
                    ->columnSpan(1)
                    ->schema([
                        IconEntry::make('is_active')
                            ->label('Published')
                            ->boolean(),
                        TextEntry::make('applications_count')
                            ->label('Total Applicants')
                            ->state(fn ($record) => $record->applications()->count())
                            ->badge()
                            ->color('success'),
                        TextEntry::make('created_at')
                            ->label('Created')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime(),
                    ]),
            ]);
    }
}
