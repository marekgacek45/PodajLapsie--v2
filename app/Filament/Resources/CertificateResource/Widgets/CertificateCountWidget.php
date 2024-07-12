<?php

namespace App\Filament\Resources\CertificateResource\Widgets;

use App\Models\Certificate;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class CertificateCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Suma certyfikatów', Certificate::count())
        ];
    }
}
