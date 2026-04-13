<?php

namespace App\Filament\Resources\AdminSchools\Pages;

use App\Filament\Resources\AdminSchools\AdminSchoolResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdminSchools extends ListRecords
{
    protected static string $resource = AdminSchoolResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
