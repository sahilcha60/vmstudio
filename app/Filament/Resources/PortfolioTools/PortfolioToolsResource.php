<?php

namespace App\Filament\Resources\PortfolioTools;

use App\Filament\Resources\PortfolioTools\Pages\CreatePortfolioTools;
use App\Filament\Resources\PortfolioTools\Pages\EditPortfolioTools;
use App\Filament\Resources\PortfolioTools\Pages\ListPortfolioTools;
use App\Filament\Resources\PortfolioTools\Pages\ViewPortfolioTools;
use App\Filament\Resources\PortfolioTools\Schemas\PortfolioToolsForm;
use App\Filament\Resources\PortfolioTools\Schemas\PortfolioToolsInfolist;
use App\Filament\Resources\PortfolioTools\Tables\PortfolioToolsTable;
use App\Models\PortfolioTool;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PortfolioToolsResource extends Resource
{
    protected static ?string $model = PortfolioTool::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrenchScrewdriver;

    protected static ?string $recordTitleAttribute = 'Portfolio Tool';

    protected static string|UnitEnum|null $navigationGroup = 'Portfolio';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return PortfolioToolsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PortfolioToolsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortfolioToolsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPortfolioTools::route('/'),
            'create' => CreatePortfolioTools::route('/create'),
            'view' => ViewPortfolioTools::route('/{record}'),
            'edit' => EditPortfolioTools::route('/{record}/edit'),
        ];
    }
}
