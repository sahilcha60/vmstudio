<?php

namespace App\Filament\Resources\FeaturedPhotos\Pages;

use App\Filament\Resources\FeaturedPhotos\FeaturedPhotoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedPhotos extends ListRecords
{
    protected static string $resource = FeaturedPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
