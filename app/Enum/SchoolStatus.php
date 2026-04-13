<?php

namespace App\Enum;

enum SchoolStatus: string
{
    case Negeri = 'negeri';
    case Swasta = 'swasta';

    public function label(): string
    {
        return match ($this) {
            self::Negeri => 'Negeri',
            self::Swasta => 'Swasta',
        };
    }

    /**
     * @return array<string, string>
     */
    public static function options(): array
    {
        $options = [];

        foreach (self::cases() as $status) {
            $options[$status->value] = $status->label();
        }

        return $options;
    }
}
