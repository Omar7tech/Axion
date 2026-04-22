<?php

namespace App\Filament\Resources\Investments\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InvestmentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('images')
                    ->collection('images')
                    ->conversion('webp')
                    ->label('Cover')
                    ->circular()
                    ->limit(1)
                ,

                TextColumn::make('project_name')
                    ->label('Project Name')
                    ->searchable()
                    ->sortable()
                    ->weight('medium'),

                TextColumn::make('project_description')
                    ->label('Description')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ,


                TextColumn::make('investment_amount')
                    ->label('Investment')
                    ->money('USD')
                    ->sortable()
                    ->placeholder('Not set')
                    ->alignEnd(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime()
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
