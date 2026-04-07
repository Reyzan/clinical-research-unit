<?php

namespace App\Filament\Resources\TeamMembers\Pages;

use App\Filament\Resources\TeamMembers\TeamMemberResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditTeamMember extends EditRecord
{
    protected static string $resource = TeamMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $record = $this->getRecord();

        $textFields = ['name', 'slug', 'title', 'subtitle', 'bio', 'email', 'location', 'nationality', 'languages', 'speciality'];

        foreach ($textFields as $field) {
            if (array_key_exists($field, $data) && trim((string) ($data[$field] ?? '')) === '' && filled($record->$field)) {
                $data[$field] = $record->$field;
            }
        }

        return $data;
    }
}
