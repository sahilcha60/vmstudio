<?php

namespace App\Filament\Resources\FeaturedPhotos\Pages;

use App\Filament\Resources\FeaturedPhotos\FeaturedPhotoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFeaturedPhoto extends CreateRecord
{
    protected static string $resource = FeaturedPhotoResource::class;
}
