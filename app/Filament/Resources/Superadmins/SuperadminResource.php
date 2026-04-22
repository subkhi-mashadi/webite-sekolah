<?php

namespace App\Filament\Resources\Superadmins;

use App\Filament\Resources\Superadmins\Pages\CreateSuperadmin;
use App\Filament\Resources\Superadmins\Pages\EditSuperadmin;
use App\Filament\Resources\Superadmins\Pages\ListSuperadmins;
use App\Filament\Resources\Superadmins\Schemas\SuperadminForm;
use App\Filament\Resources\Superadmins\Tables\SuperadminsTable;
use App\Models\Superadmin;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SuperadminResource extends Resource
{
    protected static ?string $model = Superadmin::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShieldCheck;

    protected static ?string $navigationLabel = 'Admin Utama';

    protected static ?string $modelLabel = 'Admin Utama';

    protected static ?string $pluralModelLabel = 'Admin Utama';

    public static function form(Schema $schema): Schema
    {
        return SuperadminForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuperadminsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSuperadmins::route('/'),
            'create' => CreateSuperadmin::route('/create'),
            'edit' => EditSuperadmin::route('/{record}/edit'),
        ];
    }
}
