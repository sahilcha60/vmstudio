<?php

namespace App\Filament\Resources\PortfolioImages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PortfolioImagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Reference Portfolio Category instead of Portfolio Item
                TextColumn::make('portfolioCategory.name')
                    ->label('Portfolio Category')
                    ->sortable()
                    ->searchable(),

                ImageColumn::make('image_url')
                    ->label('Image')
                    ->disk('public') // your storage disk
                    ->getStateUsing(fn ($record) => $record->image_url),

                TextColumn::make('caption')
                    ->label('Caption')
                    ->limit(30)
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
