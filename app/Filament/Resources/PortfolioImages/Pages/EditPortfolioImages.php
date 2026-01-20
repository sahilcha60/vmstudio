<?php

namespace App\Filament\Resources\PortfolioImages\Pages;

use App\Filament\Resources\PortfolioImages\PortfolioImagesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioImages extends EditRecord
{
    protected static string $resource = PortfolioImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
