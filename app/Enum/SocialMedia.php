<?php
namespace App\Enum;

enum SocialMedia: string
{
    case Facebook = 'facebook';
    case Twitter = 'twitter';
    case Instagram = 'instagram';
    case LinkedIn = 'linkedin';
    case YouTube = 'youtube';

    public function label(): string
    {
        return match ($this) {
            self::Facebook => 'Facebook',
            self::Twitter => 'Twitter',
            self::Instagram => 'Instagram',
            self::LinkedIn => 'LinkedIn',
            self::YouTube => 'YouTube',
        };
    }

    /**
     * @return array<string, string>
     */
    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $socialMedia): array => [$socialMedia->value => $socialMedia->label()])
            ->all();
    }
}
