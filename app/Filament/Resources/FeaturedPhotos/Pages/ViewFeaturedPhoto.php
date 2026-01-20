<?php

namespace App\Filament\Resources\FeaturedPhotos\Pages;

use App\Filament\Resources\FeaturedPhotos\FeaturedPhotoResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFeaturedPhoto extends ViewRecord
{
    protected static string $resource = FeaturedPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
