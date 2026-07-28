<?php

namespace App\Filament\Resources\ResearchGroups;

use App\Filament\Resources\ResearchGroups\Pages\CreateResearchGroup;
use App\Filament\Resources\ResearchGroups\Pages\EditResearchGroup;
use App\Filament\Resources\ResearchGroups\Pages\ListResearchGroups;
use App\Filament\Resources\ResearchGroups\Schemas\ResearchGroupForm;
use App\Filament\Resources\ResearchGroups\Tables\ResearchGroupsTable;
use App\Models\ResearchGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResearchGroupResource extends Resource
{
    protected static ?string $model = ResearchGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBeaker;

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return 'Content Management';
    }

    public static function form(Schema $schema): Schema
    {
        return ResearchGroupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ResearchGroupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListResearchGroups::route('/'),
            'create' => CreateResearchGroup::route('/create'),
            'edit' => EditResearchGroup::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
