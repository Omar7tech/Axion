<?php

namespace App\Filament\Resources\BrainTrusts;

use App\Filament\Resources\BrainTrusts\Pages\CreateBrainTrust;
use App\Filament\Resources\BrainTrusts\Pages\EditBrainTrust;
use App\Filament\Resources\BrainTrusts\Pages\ListBrainTrusts;
use App\Filament\Resources\BrainTrusts\Schemas\BrainTrustForm;
use App\Filament\Resources\BrainTrusts\Tables\BrainTrustsTable;
use App\Models\BrainTrust;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class BrainTrustResource extends Resource
{
    protected static ?string $model = BrainTrust::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return BrainTrustForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BrainTrustsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBrainTrusts::route('/'),
            'create' => CreateBrainTrust::route('/create'),
            'edit' => EditBrainTrust::route('/{record}/edit'),
        ];
    }

     public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes();
    }
}
