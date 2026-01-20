<?php

namespace App\Filament\Resources\PortfolioTools\Pages;

use App\Filament\Resources\PortfolioTools\PortfolioToolsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPortfolioTools extends ViewRecord
{
    protected static string $resource = PortfolioToolsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
