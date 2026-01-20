<?php

namespace App\Filament\Resources\PortfolioImages\Schemas;

use App\Models\PortfolioCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class PortfolioImagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('portfolio_category_id')
                ->label('Portfolio Category')
                ->options(
                    PortfolioCategory::where('status', 1)->pluck('name', 'id')
                )
                ->searchable()
                ->required(),

            FileUpload::make('image_url')
                ->label('Images')
                ->image()
                ->multiple()
                ->disk('public')
                ->directory('portfolio/images')
                ->acceptedFileTypes([
                    'image/jpeg',
                    'image/png',
                    'image/jpg',
                    'image/webp',
                ])
                ->saveUploadedFileUsing(function ($file) {
                    $filename = uniqid('portfolio_').'.webp';
                    $path = 'portfolio/images/'.$filename;

                    Image::load($file->getRealPath())
                        ->format('webp')
                        ->quality(85)
                        ->save(storage_path('app/public/'.$path));

                    return $path;
                })
                ->reorderable()
                ->columnSpanFull()
                ->required(),
        ]);
    }
}
