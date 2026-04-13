<?php

declare(strict_types=1);

namespace App\Enum;

enum Accreditation: string
{
    case A = 'A';
    case B = 'B';
    case C = 'C';
    case NotAccredited = 'Belum Terakreditasi';

    public function label(): string
    {
        return match ($this) {
            self::A => 'A',
            self::B => 'B',
            self::C => 'C',
            self::NotAccredited => 'Belum Terakreditasi',
        };
    }

    /**
     * @return array<string, string>
     */
    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $accreditation): array => [$accreditation->value => $accreditation->label()])
            ->all();
    }
}