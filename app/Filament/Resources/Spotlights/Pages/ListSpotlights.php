<?php

namespace App\Filament\Resources\Spotlights\Pages;

use App\Filament\Resources\Spotlights\SpotlightsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSpotlights extends ListRecords
{
    protected static string $resource = SpotlightsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
