<?php

namespace App\Filament\Resources\PortfolioTools\Pages;

use App\Filament\Resources\PortfolioTools\PortfolioToolsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioTools extends ListRecords
{
    protected static string $resource = PortfolioToolsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
