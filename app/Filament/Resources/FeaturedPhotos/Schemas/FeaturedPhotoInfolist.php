<?php

namespace App\Filament\Resources\FeaturedPhotos\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class FeaturedPhotoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('image')
                    ->disk('public')
                    ->label('Image')
                    ->square()
                    ->height(150)
                    ->placeholder('-'),
            ]);
    }
}
