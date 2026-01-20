<?php

namespace App\Filament\Resources\PortfolioTools\Pages;

use App\Filament\Resources\PortfolioTools\PortfolioToolsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioTools extends EditRecord
{
    protected static string $resource = PortfolioToolsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
