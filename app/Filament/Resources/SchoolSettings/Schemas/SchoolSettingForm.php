<?php

namespace App\Filament\Resources\SchoolSettings\Schemas;

use App\Enum\Accreditation;
use App\Enum\SocialMedia;
use App\Enum\SchoolStatus;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Validation\Rules\Enum;

class SchoolSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('School Settings')
                    ->tabs([
                        Tab::make('Banner Sekolah')
                            ->icon(Heroicon::OutlinedAcademicCap)
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('banner')
                                    ->collection('banner')
                                    ->label('Banner Sekolah')
                                    ->image()
                                    ->imageEditor(),
                            ]),
                        Tab::make('Identitas Sekolah')
                            ->icon('heroicon-o-building-library')
                            ->schema([
                                Grid::make(2)->schema([
                                    TextInput::make('name')
                                        ->label('Nama Sekolah')
                                        ->required()
                                        ->maxLength(255),
                                    TextInput::make('npsn')
                                        ->label('NPSN')
                                        ->numeric()
                                        ->required(),
                                    Select::make('status')
                                        ->options(SchoolStatus::options())
                                        ->required(),
                                    Select::make('accreditation')
                                        ->label('Akreditasi')
                                        ->options(Accreditation::options())
                                        ->required(),
                                ]),
                                SpatieMediaLibraryFileUpload::make('logo')
                                    ->collection('logo')
                                    ->label('Logo Sekolah')
                                    ->image()
                                    ->imageEditor(),
                            ]),
                        Tab::make('Kepala Sekolah')
                            ->icon('heroicon-o-user')
                            ->schema([
                                Grid::make(2)->schema([
                                    TextInput::make('principal_name')
                                        ->label('Nama Kepala Sekolah'),
                                    TextInput::make('principal_nip')
                                        ->label('NIP Kepala Sekolah'),
                                ]),
                                RichEditor::make('principal_welcome_message')
                                    ->label('Sambutan Kepala Sekolah')
                                    ->columnSpanFull(),
                                SpatieMediaLibraryFileUpload::make('principal_photo')
                                    ->collection('principal_photo')
                                    ->label('Foto Kepala Sekolah')
                                    ->image()
                                    ->avatar(),
                            ]),

                        Tab::make('Visi, Misi & Kontak')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                RichEditor::make('vision')
                                    ->label('Visi Sekolah'),
                                RichEditor::make('mission')
                                    ->label('Misi Sekolah'),
                                Section::make('Informasi Kontak')->schema([
                                    Grid::make(2)->schema([
                                        TextInput::make('email')->email(),
                                        TextInput::make('phone')->tel(),
                                        TextInput::make('website')->url(),
                                    ]),
                                    Textarea::make('address')
                                        ->label('Alamat Lengkap'),
                                ]),
                            ]),

                        // --- TAB 4: SOSIAL MEDIA ---
                        Tab::make('Media Sosial')
                            ->icon('heroicon-o-share')
                            ->schema([
                                Repeater::make('social_media')
                                    ->label('Akun Sosial Media')
                                    ->schema([
                                        Select::make('platform')
                                            ->options(SocialMedia::options())
                                            ->required(),
                                        TextInput::make('url')
                                            ->label('Link URL')
                                            ->url()
                                            ->required(),
                                    ])
                                    ->columns(2)
                                    ->createItemButtonLabel('Tambah Sosmed'),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
