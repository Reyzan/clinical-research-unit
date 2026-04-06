<?php

namespace App\Filament\Resources\TeamMembers\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class TeamMembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->circular()
                    ->imageSize(60)
                    ->getStateUsing(fn ($record) => $record->image_url),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                TextColumn::make('title')
                    ->searchable()
                    ->limit(60)
                    ->toggleable(),

                TextColumn::make('speciality')
                    ->limit(50)
                    ->toggleable(),

                TextColumn::make('slug')
                    ->label('Profile')
                    ->formatStateUsing(fn ($state) => $state ? 'Yes' : 'No')
                    ->badge()
                    ->color(fn ($state) => $state ? 'success' : 'gray')
                    ->toggleable(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M j, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),

                Action::make('add_detail_page')
                    ->label('Add Detail Page')
                    ->icon(Heroicon::OutlinedDocumentPlus)
                    ->color('info')
                    ->visible(fn ($record) => is_null($record->slug))
                    ->requiresConfirmation()
                    ->modalDescription('This will generate a profile page URL from the member\'s name. You can then edit the member to fill in their bio, education, and other details.')
                    ->action(fn ($record) => $record->update(['slug' => Str::slug($record->name)]))
                    ->successNotificationTitle('Detail page enabled'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
    }
}
