<?php

namespace App\Filament\Resources\Spotlights\Pages;

use App\Filament\Resources\Spotlights\SpotlightsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSpotlights extends ViewRecord
{
    protected static string $resource = SpotlightsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
