<?php

namespace App\Filament\Resources\Researchers\Schemas;

use App\Models\ResearchGroup;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ResearcherForm
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
                        ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null
                        ),

                    TextInput::make('slug')
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->rules(['alpha_dash'])
                        ->nullable()
                        ->helperText('Leave empty to hide profile page (researcher will only show in the photo mosaic).'),

                    TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),

                    Select::make('research_group_id')
                        ->label('Research Group')
                        ->options(ResearchGroup::orderBy('sort_order')->pluck('name', 'id'))
                        ->searchable()
                        ->preload()
                        ->nullable()
                        ->columnSpanFull(),

                    Textarea::make('bio')
                        ->label('Research Focus')
                        ->rows(6)
                        ->helperText('Narrative describing research focus, projects, contributions.')
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Section::make('Photo')
                ->schema([
                    FileUpload::make('photo')
                        ->image()
                        ->disk('public')
                        ->directory('frontend/images/researchers')
                        ->getUploadedFileNameForStorageUsing(
                            fn ($file, $get) => (Str::slug(trim($get('slug'))) ?: Str::slug(trim($get('name'))) ?: 'researcher-'.time()).'.'.$file->guessExtension()
                        )
                        ->imageEditor()
                        ->imageEditorAspectRatios(['1:1', '4:3'])
                        ->maxSize(2048),

                    TextInput::make('sort_order')
                        ->label('Display Order')
                        ->integer()
                        ->default(0)
                        ->helperText('Lower number = appears first.'),
                ])
                ->columns(2),

            Section::make('Contact & Social')
                ->schema([
                    TextInput::make('email')->email()->nullable(),
                    TextInput::make('google_scholar_url')->label('Google Scholar URL')->url()->nullable(),
                    TextInput::make('linkedin_url')->label('LinkedIn URL')->url()->nullable(),
                    TextInput::make('orcid_url')->label('ORCID URL')->url()->nullable(),
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

            Section::make('Publications & Books')
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
                        ->itemLabel(fn (array $state): ?string => isset($state['title']) ? Str::limit($state['title'], 60) : null
                        )
                        ->defaultItems(0)
                        ->columnSpanFull(),
                ])
                ->collapsed(),

            Section::make('Meet the Team — Unit Description')
                ->schema([
                    Textarea::make('unit_description')
                        ->label('Unit Description')
                        ->rows(4)
                        ->helperText('Short description of the unit/lab this researcher leads. Appears above the Meet the Team grid on the profile page.')
                        ->columnSpanFull(),
                ])
                ->collapsed(),
        ]);
    }
}
