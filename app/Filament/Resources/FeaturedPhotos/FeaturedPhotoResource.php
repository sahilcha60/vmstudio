<?php

namespace App\Filament\Resources\FeaturedPhotos;

use App\Filament\Resources\FeaturedPhotos\Pages\CreateFeaturedPhoto;
use App\Filament\Resources\FeaturedPhotos\Pages\EditFeaturedPhoto;
use App\Filament\Resources\FeaturedPhotos\Pages\ListFeaturedPhotos;
use App\Filament\Resources\FeaturedPhotos\Pages\ViewFeaturedPhoto;
use App\Filament\Resources\FeaturedPhotos\Schemas\FeaturedPhotoForm;
use App\Filament\Resources\FeaturedPhotos\Schemas\FeaturedPhotoInfolist;
use App\Filament\Resources\FeaturedPhotos\Tables\FeaturedPhotosTable;
use App\Models\FeaturedPhoto;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class FeaturedPhotoResource extends Resource
{
    protected static ?string $model = FeaturedPhoto::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static ?string $recordTitleAttribute = 'FeaturedPhoto';

    protected static string|UnitEnum|null $navigationGroup = 'Settings';

    public static function form(Schema $schema): Schema
    {
        return FeaturedPhotoForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FeaturedPhotoInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FeaturedPhotosTable::configure($table);
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
            'index' => ListFeaturedPhotos::route('/'),
            'create' => CreateFeaturedPhoto::route('/create'),
            'view' => ViewFeaturedPhoto::route('/{record}'),
            'edit' => EditFeaturedPhoto::route('/{record}/edit'),
        ];
    }
}
