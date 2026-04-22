<?php

namespace App\Filament\Resources\AdminSchools\Pages;

use App\Enum\Roles;
use App\Filament\Resources\AdminSchools\AdminSchoolResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdminSchool extends EditRecord
{
    protected static string $resource = AdminSchoolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        if (! $this->record->hasRole(Roles::SchoolAdmin->value)) {
            $this->record->assignRole(Roles::SchoolAdmin->value);
        }
    }
}
