<?php

namespace App\Filament\Resources\Spotlights\Pages;

use App\Filament\Resources\Spotlights\SpotlightsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSpotlights extends EditRecord
{
    protected static string $resource = SpotlightsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
