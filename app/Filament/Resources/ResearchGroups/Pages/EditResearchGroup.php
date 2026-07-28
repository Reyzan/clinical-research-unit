<?php

namespace App\Filament\Resources\ResearchGroups\Pages;

use App\Filament\Resources\ResearchGroups\ResearchGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditResearchGroup extends EditRecord
{
    protected static string $resource = ResearchGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
