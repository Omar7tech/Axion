<?php

namespace App\Filament\Widgets;

use App\Models\Business;
use App\Models\Career;
use App\Models\CareerApplication;
use App\Models\Investment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{

    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Businesses', Business::count())
                ->description('All business entries')
                ->descriptionIcon('heroicon-o-building-office-2')
                ->color('primary'),

            Stat::make('Active Businesses', Business::where('is_active', true)->count())
                ->description('Currently active')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Published Businesses', Business::where('is_published', true)->count())
                ->description('Published to public')
                ->descriptionIcon('heroicon-o-globe-alt')
                ->color('info'),

            Stat::make('Total Investments', Investment::count())
                ->description('All investment projects')
                ->descriptionIcon('heroicon-o-chart-bar')
                ->color('warning'),

            Stat::make('Active Investments', Investment::where('is_active', true)->count())
                ->description('Currently active')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Total Careers', Career::count())
                ->description('All job postings')
                ->descriptionIcon('heroicon-o-briefcase')
                ->color('primary'),

            Stat::make('Active Careers', Career::where('is_active', true)->count())
                ->description('Currently open')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Total Applications', CareerApplication::count())
                ->description('All job applications')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('danger'),
        ];
    }
}
