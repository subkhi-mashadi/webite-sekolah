<?php

namespace App\Filament\Resources\Documents\Schemas;

use App\Enum\Document;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                Select::make('category')
                    ->label('Category')
                    ->options(Document::values())
                    ->searchable()
                    ->nullable(),
                Textarea::make('description')
                    ->label('Description')
                    ->rows(3)
                    ->nullable(),
                SpatieMediaLibraryFileUpload::make('file')
                    ->label('File')
                    ->collection('file')
                    ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'])
                    ->maxSize(10240),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
