<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Quote;

class CopaModel extends ChartWidget
{
    protected static ?string $heading = 'Modelo Copa';

    protected function getData(): array
    {
        $data = Trend::query(Quote::where('model', '=', 'Copa'))
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();


        return [
            'datasets' => [
                [
                    'label' => 'Cotizaciones',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
