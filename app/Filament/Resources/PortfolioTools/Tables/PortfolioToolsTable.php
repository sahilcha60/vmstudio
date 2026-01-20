<?php

namespace App\Filament\Resources\PortfolioTools\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PortfolioToolsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('portfolioCategory.name')
                    ->label('Portfolio')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tool_name')
                    ->label('Tool Name')
                    ->sortable()
                    ->searchable()
                    ->limit(50),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime(),
            ])
            ->filters([
                // You can add filters here, e.g., by portfolio item
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
