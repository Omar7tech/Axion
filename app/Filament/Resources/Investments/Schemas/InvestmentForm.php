<?php

namespace App\Filament\Resources\Investments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class InvestmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               
                
                TextInput::make('project_name')
                    ->required(),
                TextInput::make('project_description'),
                Textarea::make('project_content')
                    ->columnSpanFull(),
                TextInput::make('investment_amount'),
            ]);
    }
}
