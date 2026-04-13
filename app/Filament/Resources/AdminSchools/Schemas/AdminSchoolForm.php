<?php

namespace App\Filament\Resources\AdminSchools\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AdminSchoolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->required(fn($record): bool => $record === null)
                    ->dehydrated(fn(?string $state): bool => filled($state)),
            ]);
    }
}
