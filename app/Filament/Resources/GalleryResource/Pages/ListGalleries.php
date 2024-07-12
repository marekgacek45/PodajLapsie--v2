<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\GalleryResource;
use App\Filament\Resources\GalleryResource\Widgets\GalleryCountWidget;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
           GalleryCountWidget::class
        ];
    }
}
