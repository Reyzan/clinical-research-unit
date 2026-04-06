<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Section::make('Identity')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (string $operation, $state, $set) =>
                            $operation === 'create' ? $set('slug', Str::slug($state)) : null
                        ),

                    TextInput::make('slug')
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->rules(['alpha_dash'])
                        ->nullable()
                        ->helperText('Leave empty for staff-only members (no profile page). Use "Add Detail Page" action to generate automatically.'),

                    TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),

                    TextInput::make('subtitle')
                        ->maxLength(500)
                        ->columnSpanFull(),

                    Textarea::make('bio')
                        ->rows(6)
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Photo & CV')
                ->schema([
                    FileUpload::make('image')
                        ->image()
                        ->disk('public')
                        ->directory('frontend/images/team')
                        ->getUploadedFileNameForStorageUsing(
                            fn ($file, $get) => $get('slug') . '.' . $file->guessExtension()
                        )
                        ->imageEditor()
                        ->imageEditorAspectRatios(['1:1', '4:3'])
                        ->maxSize(2048),

                    FileUpload::make('cv_file')
                        ->label('CV File (PDF)')
                        ->acceptedFileTypes(['application/pdf'])
                        ->disk('public')
                        ->directory('downloads/cv')
                        ->getUploadedFileNameForStorageUsing(
                            fn ($file, $get) => $get('slug') . '-cv.' . $file->guessExtension()
                        )
                        ->maxSize(10240),

                    TextInput::make('sort_order')
                        ->label('Display Order')
                        ->integer()
                        ->default(0)
                        ->helperText('Lower number = appears first in the listing'),
                ])
                ->columns(2),

            Section::make('Personal Information')
                ->schema([
                    TextInput::make('email')->email()->nullable(),
                    TextInput::make('location')->nullable(),
                    TextInput::make('nationality')->nullable(),
                    TextInput::make('languages')->nullable(),
                    TextInput::make('speciality')->nullable()->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Education')
                ->schema([
                    Repeater::make('education')
                        ->schema([
                            TextInput::make('degree')->required()->maxLength(255),
                            TextInput::make('institution')->required()->maxLength(255),
                            TextInput::make('period')->maxLength(100),
                            Textarea::make('description')->rows(2)->nullable()->columnSpanFull(),
                        ])
                        ->columns(2)
                        ->collapsible()
                        ->itemLabel(fn (array $state): ?string => $state['degree'] ?? null)
                        ->defaultItems(0)
                        ->columnSpanFull(),
                ])
                ->collapsed(),

            Section::make('Experience')
                ->schema([
                    Repeater::make('experience')
                        ->schema([
                            TextInput::make('position')->required()->maxLength(255),
                            TextInput::make('organization')->required()->maxLength(255),
                            TextInput::make('period')->maxLength(100),
                            Textarea::make('description')->rows(2)->nullable()->columnSpanFull(),
                        ])
                        ->columns(2)
                        ->collapsible()
                        ->itemLabel(fn (array $state): ?string => $state['position'] ?? null)
                        ->defaultItems(0)
                        ->columnSpanFull(),
                ])
                ->collapsed(),

            Section::make('Publications')
                ->schema([
                    Repeater::make('publications')
                        ->schema([
                            Textarea::make('title')->required()->rows(2)->columnSpanFull(),
                            TextInput::make('journal')->required()->maxLength(255),
                            TextInput::make('year')->maxLength(4),
                            TextInput::make('doi')->label('DOI')->nullable()->maxLength(255),
                            TextInput::make('pmid')->label('PMID')->nullable()->maxLength(20),
                        ])
                        ->columns(2)
                        ->collapsible()
                        ->itemLabel(fn (array $state): ?string =>
                            isset($state['title']) ? Str::limit($state['title'], 60) : null
                        )
                        ->defaultItems(0)
                        ->columnSpanFull(),
                ])
                ->collapsed(),
        ]);
    }
}
