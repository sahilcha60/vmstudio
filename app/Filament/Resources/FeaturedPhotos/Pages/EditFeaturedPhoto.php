<?php

namespace App\Filament\Resources\FeaturedPhotos\Pages;

use App\Filament\Resources\FeaturedPhotos\FeaturedPhotoResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedPhoto extends EditRecord
{
    protected static string $resource = FeaturedPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
