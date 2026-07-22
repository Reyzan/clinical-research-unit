<?php

namespace App\Filament\Resources\ResearchGroups\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ResearchGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Group Information')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null
                        ),

                    TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->rules(['alpha_dash']),

                    Textarea::make('description')
                        ->rows(3)
                        ->maxLength(500)
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Branding')
                ->schema([
                    FileUpload::make('logo')
                        ->image()
                        ->disk('public')
                        ->directory('frontend/images/research-groups')
                        ->getUploadedFileNameForStorageUsing(
                            fn ($file, $get) => (Str::slug(trim($get('slug'))) ?: 'group-'.time()).'.'.$file->guessExtension()
                        )
                        ->imageEditor()
                        ->imageEditorAspectRatios(['1:1'])
                        ->maxSize(2048)
                        ->helperText('Square logo recommended. Leave empty to use the auto-generated initial badge.'),

                    ColorPicker::make('accent_color')
                        ->label('Accent Color')
                        ->helperText('Used as a top border + hover fill on the public group card. Leave blank to use the default for this group.'),

                    TextInput::make('sort_order')
                        ->label('Display Order')
                        ->integer()
                        ->default(0)
                        ->helperText('Lower number = appears first.'),
                ])
                ->columns(2),
        ]);
    }
}
