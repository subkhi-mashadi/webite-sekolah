<?php

namespace App\Enum;

enum Roles: string
{
    case Superadmin = 'superadmin';
    case SchoolAdmin = 'school_admin';
    case Principal = 'principal';

    public function label(): string
    {
        return match ($this) {
            self::Superadmin => 'Superadmin',
            self::SchoolAdmin => 'School Admin',
            self::Principal => 'Principal',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
