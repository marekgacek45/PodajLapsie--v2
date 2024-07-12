<?php

namespace App\Filament\Resources\CertificateResource\Pages;

use Filament\Actions;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\CertificateResource;
use App\Filament\Resources\CertificateResource\Widgets\CertificateCountWidget;

class ListCertificates extends ListRecords
{
    protected static string $resource = CertificateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
           CertificateCountWidget::class
        ];
    }
}
