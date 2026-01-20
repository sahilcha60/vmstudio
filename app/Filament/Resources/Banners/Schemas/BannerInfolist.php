<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            ImageEntry::make('image')
                ->disk('public')
                ->square()
                ->height(150)
                ->placeholder('-'),

            TextEntry::make('title'),

            TextEntry::make('content')
                ->columnSpanFull()
                ->placeholder('-'),

            TextEntry::make('created_at')
                ->dateTime()
                ->placeholder('-'),

            TextEntry::make('updated_at')
                ->dateTime()
                ->placeholder('-'),
        ]);
    }
}
