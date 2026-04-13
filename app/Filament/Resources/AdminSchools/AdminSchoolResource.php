<?php

namespace App\Filament\Resources\AdminSchools;

use App\Filament\Resources\AdminSchools\Pages\CreateAdminSchool;
use App\Filament\Resources\AdminSchools\Pages\EditAdminSchool;
use App\Filament\Resources\AdminSchools\Pages\ListAdminSchools;
use App\Filament\Resources\AdminSchools\Schemas\AdminSchoolForm;
use App\Filament\Resources\AdminSchools\Tables\AdminSchoolsTable;
use App\Models\AdminSchool;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AdminSchoolResource extends Resource
{
    protected static ?string $model = AdminSchool::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AdminSchoolForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdminSchoolsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAdminSchools::route('/'),
            'create' => CreateAdminSchool::route('/create'),
            'edit' => EditAdminSchool::route('/{record}/edit'),
        ];
    }
}
