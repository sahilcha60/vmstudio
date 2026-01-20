<?php

namespace App\Filament\Resources\PortfolioCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class PortfolioCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Category Name')
                ->required()
                ->maxLength(255),

            RichEditor::make('description')
                ->columnSpanFull(),

            FileUpload::make('cover_image')
                ->label('Cover Image')
                ->image()
                ->disk('public')
                ->directory('portfolio/categories')
                ->acceptedFileTypes([
                    'image/jpeg',
                    'image/png',
                    'image/jpg',
                    'image/webp',
                ])
                ->saveUploadedFileUsing(function ($file) {
                    $filename = uniqid('portfolio_cat_').'.webp';
                    $path = 'portfolio/categories/'.$filename;

                    Image::load($file->getRealPath())
                        ->format('webp')       // Spatie v3+
                        ->quality(85)          // visually lossless
                        ->save(storage_path('app/public/'.$path));

                    return $path;
                })
                ->columnSpanFull(),

            Toggle::make('status')
                ->default(true),

            TextInput::make('sort_order')
                ->label('Sort Order')
                ->numeric()
                ->default(0),
        ]);
    }
}
