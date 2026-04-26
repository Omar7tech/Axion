<?php

namespace App\Filament\Widgets;

use App\Models\Career;
use Filament\Widgets\ChartWidget;

class CareersByTypeChart extends ChartWidget
{

    protected static ?int $sort = 2;
    protected ?string $heading = 'Careers by Type';

    protected function getData(): array
    {
        $careers = Career::all();
        $typeCounts = $careers->groupBy('type')->map(fn ($group) => $group->count());

        return [
            'datasets' => [
                [
                    'data' => $typeCounts->values()->toArray(),
                    'backgroundColor' => [
                        'rgba(251, 191, 36, 0.8)',
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(139, 92, 246, 0.8)',
                    ],
                ],
            ],
            'labels' => $typeCounts->keys()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
