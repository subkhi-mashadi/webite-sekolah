<?php

namespace App\Filament\Resources\Superadmins\Pages;

use App\Filament\Resources\Superadmins\SuperadminResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuperadmins extends ListRecords
{
    protected static string $resource = SuperadminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
