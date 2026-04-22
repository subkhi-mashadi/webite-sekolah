<?php

namespace App\Filament\Resources\News\Schemas;

use App\Enum\NewsStatus;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                Select::make('status')
                    ->label('Status')
                    ->options(collect(NewsStatus::cases())->mapWithKeys(fn ($s) => [$s->value => $s->label()]))
                    ->default(NewsStatus::Draft->value)
                    ->required(),
                RichEditor::make('content')
                    ->label('Content')
                    ->required()
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->collection('thumbnail')
                    ->image()
                    ->imageEditor()
                    ->maxSize(5120),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
