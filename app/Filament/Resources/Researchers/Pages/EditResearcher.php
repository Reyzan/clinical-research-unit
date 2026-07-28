<?php

namespace App\Filament\Resources\Researchers\Pages;

use App\Filament\Resources\Researchers\ResearcherResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditResearcher extends EditRecord
{
    protected static string $resource = ResearcherResource::class;

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

        $textFields = ['name', 'slug', 'title', 'bio', 'email', 'google_scholar_url', 'linkedin_url', 'orcid_url', 'unit_description'];

        foreach ($textFields as $field) {
            if (array_key_exists($field, $data) && trim((string) ($data[$field] ?? '')) === '' && filled($record->$field)) {
                $data[$field] = $record->$field;
            }
        }

        if (array_key_exists('photo', $data) && blank($data['photo']) && filled($record->photo)) {
            $data['photo'] = $record->photo;
        }

        return $data;
    }
}
