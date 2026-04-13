<?php

namespace App\Filament\Resources\SchoolSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SchoolSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Sekolah')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('npsn')
                    ->label('NPSN')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->sortable(),
                TextColumn::make('accreditation')
                    ->label('Akreditasi')
                    ->badge()
                    ->color(fn(?string $state): string => match ($state) {
                        'A' => 'success',
                        'B' => 'info',
                        'C' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('principal_name')
                    ->label('Kepala Sekolah')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('email')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('phone')
                    ->label('Telepon')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Terakhir Diubah')
                    ->since()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
