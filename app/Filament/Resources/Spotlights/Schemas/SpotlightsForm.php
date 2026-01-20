<?php

namespace App\Filament\Resources\Spotlights\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class SpotlightsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Name')
                ->required()
                ->maxLength(255),

            FileUpload::make('image')
                ->label('Images')
                ->image()
                ->multiple()
                ->disk('public')
                ->directory('spotlights')
                ->acceptedFileTypes([
                    'image/jpeg',
                    'image/png',
                    'image/jpg',
                    'image/webp',
                ])
                ->saveUploadedFileUsing(function ($file) {
                    $filename = uniqid('spotlight_').'.webp';
                    $path = 'spotlights/'.$filename;

                    Image::load($file->getRealPath())
                        ->format('webp')     // ✅ Spatie Image v3+
                        ->quality(85)        // visually lossless
                        ->save(storage_path('app/public/'.$path));

                    return $path;
                })
                ->columnSpanFull()
                ->required(),
        ]);
    }
}
