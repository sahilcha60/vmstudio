<?php

namespace App\Filament\Resources\PortfolioTools\Schemas;

use App\Models\PortfolioCategory;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortfolioToolsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('portfolio_category_id')
                ->label('Portfolio Category')
                ->options(PortfolioCategory::where('status', 1)->pluck('name', 'id'))
                ->searchable()
                ->required(),

            RichEditor::make('tool_name')
                ->label('Tool Name')
                ->required()
                ->columnSpanFull(),

            TextInput::make('meta_title')
                ->label('Meta Title')
                ->maxLength(60)
                ->nullable()
                ->columnSpanFull(),

            RichEditor::make('meta_description')
                ->label('Meta Description')
                ->nullable()
                ->columnSpanFull(),
        ]);
    }
}
