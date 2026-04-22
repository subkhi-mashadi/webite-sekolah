<?php

namespace App\Enum;

enum Document: string
{
    case Academic = 'academic';
    case Administrative = 'administrative';
    case Financial = 'financial';
    case Other = 'other';

    public function label(): string
    {
        return match ($this) {
            self::Academic => 'Academic',
            self::Administrative => 'Administrative',
            self::Financial => 'Financial',
            self::Other => 'Other',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
