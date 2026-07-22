<?php

namespace App\Filament\Resources\Researchers;

use App\Filament\Resources\Researchers\Pages\CreateResearcher;
use App\Filament\Resources\Researchers\Pages\EditResearcher;
use App\Filament\Resources\Researchers\Pages\ListResearchers;
use App\Filament\Resources\Researchers\RelationManagers\TeamMembersRelationManager;
use App\Filament\Resources\Researchers\Schemas\ResearcherForm;
use App\Filament\Resources\Researchers\Tables\ResearchersTable;
use App\Models\Researcher;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResearcherResource extends Resource
{
    protected static ?string $model = Researcher::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    protected static ?int $navigationSort = 4;

    public static function getNavigationGroup(): ?string
    {
        return 'Content Management';
    }

    public static function form(Schema $schema): Schema
    {
        return ResearcherForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ResearchersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            TeamMembersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListResearchers::route('/'),
            'create' => CreateResearcher::route('/create'),
            'edit' => EditResearcher::route('/{record}/edit'),
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
