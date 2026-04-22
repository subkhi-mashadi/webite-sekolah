<?php

namespace App\Filament\Resources\Superadmins\Pages;

use App\Enum\Roles;
use App\Filament\Resources\Superadmins\SuperadminResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSuperadmin extends EditRecord
{
    protected static string $resource = SuperadminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        if (! $this->record->hasRole(Roles::Superadmin->value)) {
            $this->record->assignRole(Roles::Superadmin->value);
        }
    }
}
