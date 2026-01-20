<?php

namespace App\Filament\Resources\Videos\Pages;

use App\Filament\Resources\Videos\VideosResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVideos extends EditRecord
{
    protected static string $resource = VideosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
