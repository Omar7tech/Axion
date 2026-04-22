<?php

namespace App\Filament\Resources\Investments\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class InvestmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                
                
                TextEntry::make('project_name'),
                TextEntry::make('project_description')
                    ->placeholder('-'),
                TextEntry::make('project_content')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('investment_amount')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
