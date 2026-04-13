<?php

namespace App\Enum;

enum Roles: string
{
    case Superadmin = 'superadmin';
    case Admin = 'admin Sekolah';
    case KepalaSekolah = 'kepala Sekolah';

    public function label(): string
    {
        return match ($this) {
            self::Superadmin => 'Superadmin',
            self::Admin => 'Admin Sekolah',
            self::KepalaSekolah => 'Kepala Sekolah',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
