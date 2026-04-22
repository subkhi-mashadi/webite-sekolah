<?php

namespace App\Enum;

enum NewsStatus: string
{
    case Published = 'published';
    case Draft = 'draft';

    public function label(): string
    {
        return match ($this) {
            self::Published => 'Published',
            self::Draft => 'Draft',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::Published => 'success',
            self::Draft => 'gray',
        };
    }
}
