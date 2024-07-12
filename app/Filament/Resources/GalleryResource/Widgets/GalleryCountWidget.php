<?php

namespace App\Filament\Resources\GalleryResource\Widgets;

use App\Models\Gallery;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class GalleryCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Suma zdjęć', Gallery::count())->description('Optymalna liczba zdjęć to 45')
        ];
    }
}
