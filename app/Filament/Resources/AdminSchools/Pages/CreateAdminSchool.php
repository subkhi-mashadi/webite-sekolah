<?php

namespace App\Filament\Resources\AdminSchools\Pages;

use App\Enum\Roles;
use App\Filament\Resources\AdminSchools\AdminSchoolResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAdminSchool extends CreateRecord
{
    protected static string $resource = AdminSchoolResource::class;

    protected function afterCreate(): void
    {
        $this->record->assignRole(Roles::Admin->value);
    }
}
