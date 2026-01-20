<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TestimonialInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('client_name'),
                ImageEntry::make('client_photo')
                    ->disk('public')
                    ->label('Client Image')
                    ->square()
                    ->height(150)
                    ->placeholder('-'),
                TextEntry::make('review')
                    ->columnSpanFull(),
                TextEntry::make('rating')
                    ->numeric(),
                IconEntry::make('status')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
