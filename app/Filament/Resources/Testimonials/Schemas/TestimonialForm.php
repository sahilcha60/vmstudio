<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Spatie\Image\Image;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('client_name')
                ->label('Client Name')
                ->required()
                ->maxLength(255),

            FileUpload::make('client_photo')
                ->label('Client Photo')
                ->image()
                ->disk('public')
                ->directory('testimonials')
                ->acceptedFileTypes([
                    'image/jpeg',
                    'image/png',
                    'image/jpg',
                    'image/webp',
                ])
                ->saveUploadedFileUsing(function ($file) {
                    $filename = uniqid('testimonial_').'.webp';
                    $path = 'testimonials/'.$filename;

                    Image::load($file->getRealPath())
                        ->format('webp')   // Spatie v3+
                        ->quality(85)      // visually lossless
                        ->save(storage_path('app/public/'.$path));

                    return $path;
                })
                ->columnSpanFull()
                ->required(),

            RichEditor::make('review')
                ->required()
                ->columnSpanFull(),

            Select::make('rating')
                ->options([
                    1 => '1 Star',
                    2 => '2 Stars',
                    3 => '3 Stars',
                    4 => '4 Stars',
                    5 => '5 Stars',
                ])
                ->required(),

            Toggle::make('status')
                ->default(true),
        ]);
    }
}
