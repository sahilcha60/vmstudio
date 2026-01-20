<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VideosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            TextInput::make('youtube_url')
                ->label('YouTube URL')
                ->required()
                ->placeholder('https://www.youtube.com/watch?v=xxxx')
                ->columnSpanFull(),

            FileUpload::make('thumbnail')
                ->image()
                ->disk('public')
                ->directory('videos/thumbnails')
                ->helperText('Optional. Auto-generated from YouTube if left empty.')
                ->columnSpanFull(),

        ]);
    }
}
