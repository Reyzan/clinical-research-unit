<?php

namespace App\Filament\Resources\Researchers\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class TeamMembersRelationManager extends RelationManager
{
    protected static string $relationship = 'teamMembers';

    protected static ?string $title = 'Meet the Team';

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->required()
                ->maxLength(255),

            TextInput::make('role')
                ->required()
                ->maxLength(255),

            FileUpload::make('photo')
                ->image()
                ->disk('public')
                ->directory('frontend/images/researcher-team')
                ->getUploadedFileNameForStorageUsing(
                    fn ($file, $get) => (Str::slug(trim($get('name'))) ?: 'member-'.time()).'.'.$file->guessExtension()
                )
                ->imageEditor()
                ->imageEditorAspectRatios(['1:1'])
                ->maxSize(2048)
                ->columnSpanFull(),

            Textarea::make('description')
                ->rows(3)
                ->maxLength(500)
                ->columnSpanFull()
                ->helperText('2-3 sentences describing this person\'s contribution to the unit.'),

            TextInput::make('sort_order')
                ->label('Display Order')
                ->integer()
                ->default(0),
        ])->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                ImageColumn::make('photo')
                    ->circular()
                    ->imageSize(50)
                    ->getStateUsing(fn ($record) => $record->photo_url),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('role'),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
    }
}
