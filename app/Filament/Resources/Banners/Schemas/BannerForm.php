<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('content')
                ->columnSpanFull(),

            FileUpload::make('image')
                ->label('Banner Image')
                ->image()
                ->disk('public')
                ->directory('banners')
                ->acceptedFileTypes([
                    'image/jpeg',
                    'image/png',
                    'image/jpg',
                    'image/webp',
                ])
                ->saveUploadedFileUsing(function ($file) {
                    $filename = uniqid('banner_').'.webp';
                    $path = 'banners/'.$filename;

                    Image::load($file->getRealPath())
                        ->format('webp')     // ✅ Spatie v3+
                        ->quality(85)        // visually lossless
                        ->save(storage_path('app/public/'.$path));

                    return $path;
                })
                ->required()
                ->columnSpanFull(),
        ]);
    }
}
