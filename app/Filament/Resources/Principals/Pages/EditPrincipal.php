<?php

namespace App\Filament\Resources\Principals\Pages;

use App\Enum\Roles;
use App\Filament\Resources\Principals\PrincipalResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPrincipal extends EditRecord
{
    protected static string $resource = PrincipalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        if (! $this->record->hasRole(Roles::Principal->value)) {
            $this->record->assignRole(Roles::Principal->value);
        }
    }
}
