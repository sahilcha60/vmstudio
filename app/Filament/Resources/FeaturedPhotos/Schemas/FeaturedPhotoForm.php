<?php

namespace App\Filament\Resources\FeaturedPhotos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class FeaturedPhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            FileUpload::make('image')
                ->label('Featured Image')
                ->image()
                ->disk('public')
                ->directory('featured-photos')
                ->acceptedFileTypes([
                    'image/jpeg',
                    'image/png',
                    'image/jpg',
                    'image/webp',
                ])
                ->saveUploadedFileUsing(function ($file) {
                    $filename = uniqid('featured_').'.webp';
                    $path = 'featured-photos/'.$filename;

                    Image::load($file->getRealPath())
                        ->format('webp')      // ✅ FIX
                        ->quality(85)         // no visible loss
                        ->save(storage_path('app/public/'.$path));

                    return $path;
                })
                ->required()
                ->columnSpanFull(),
        ]);
    }
}
