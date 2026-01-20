<?php

namespace App\Filament\Resources\PortfolioImages\Pages;

use App\Filament\Resources\PortfolioImages\PortfolioImagesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPortfolioImages extends ViewRecord
{
    protected static string $resource = PortfolioImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
