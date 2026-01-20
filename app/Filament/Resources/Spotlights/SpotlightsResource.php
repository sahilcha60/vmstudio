<?php

namespace App\Filament\Resources\Spotlights;

use App\Filament\Resources\Spotlights\Pages\CreateSpotlights;
use App\Filament\Resources\Spotlights\Pages\EditSpotlights;
use App\Filament\Resources\Spotlights\Pages\ListSpotlights;
use App\Filament\Resources\Spotlights\Pages\ViewSpotlights;
use App\Filament\Resources\Spotlights\Schemas\SpotlightsForm;
use App\Filament\Resources\Spotlights\Schemas\SpotlightsInfolist;
use App\Filament\Resources\Spotlights\Tables\SpotlightsTable;
use App\Models\Spotlight;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SpotlightsResource extends Resource
{
    protected static ?string $model = Spotlight::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedLightBulb;

    protected static ?string $recordTitleAttribute = 'Spotlight';

    protected static string|UnitEnum|null $navigationGroup = 'Settings';

    public static function form(Schema $schema): Schema
    {
        return SpotlightsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SpotlightsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SpotlightsTable::configure($table);
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
            'index' => ListSpotlights::route('/'),
            'create' => CreateSpotlights::route('/create'),
            'view' => ViewSpotlights::route('/{record}'),
            'edit' => EditSpotlights::route('/{record}/edit'),
        ];
    }
}
