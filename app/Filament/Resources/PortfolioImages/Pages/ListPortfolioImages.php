<?php

namespace App\Filament\Resources\PortfolioImages\Pages;

use App\Filament\Resources\PortfolioImages\PortfolioImagesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioImages extends ListRecords
{
    protected static string $resource = PortfolioImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
