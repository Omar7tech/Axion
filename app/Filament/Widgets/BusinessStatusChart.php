<?php

namespace App\Filament\Widgets;

use App\Models\Business;
use Filament\Widgets\ChartWidget;

class BusinessStatusChart extends ChartWidget
{
    protected static ?int $sort = 3;
    protected ?string $heading = 'Business Status Distribution';

    protected function getData(): array
    {
        $businesses = Business::all();
        
        $activeCount = $businesses->where('is_active', true)->count();
        $inactiveCount = $businesses->where('is_active', false)->count();
        $publishedCount = $businesses->where('is_published', true)->count();
        $unpublishedCount = $businesses->where('is_published', false)->count();

        return [
            'datasets' => [
                [
                    'label' => 'Active Status',
                    'data' => [$activeCount, $inactiveCount],
                    'backgroundColor' => [
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(239, 68, 68, 0.8)',
                    ],
                ],
                [
                    'label' => 'Published Status',
                    'data' => [$publishedCount, $unpublishedCount],
                    'backgroundColor' => [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(156, 163, 175, 0.8)',
                    ],
                ],
            ],
            'labels' => ['Active', 'Inactive', 'Published', 'Unpublished'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
