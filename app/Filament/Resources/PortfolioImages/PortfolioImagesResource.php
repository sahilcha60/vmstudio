<?php

namespace App\Filament\Resources\PortfolioImages;

use App\Filament\Resources\PortfolioImages\Pages\CreatePortfolioImages;
use App\Filament\Resources\PortfolioImages\Pages\EditPortfolioImages;
use App\Filament\Resources\PortfolioImages\Pages\ListPortfolioImages;
use App\Filament\Resources\PortfolioImages\Pages\ViewPortfolioImages;
use App\Filament\Resources\PortfolioImages\Schemas\PortfolioImagesForm;
use App\Filament\Resources\PortfolioImages\Schemas\PortfolioImagesInfolist;
use App\Filament\Resources\PortfolioImages\Tables\PortfolioImagesTable;
use App\Models\PortfolioImage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PortfolioImagesResource extends Resource
{
    protected static ?string $model = PortfolioImage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static ?string $recordTitleAttribute = 'Portfolio Image';

    protected static string|UnitEnum|null $navigationGroup = 'Portfolio';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return PortfolioImagesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PortfolioImagesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortfolioImagesTable::configure($table);
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
            'index' => ListPortfolioImages::route('/'),
            'create' => CreatePortfolioImages::route('/create'),
            'view' => ViewPortfolioImages::route('/{record}'),
            'edit' => EditPortfolioImages::route('/{record}/edit'),
        ];
    }
}
