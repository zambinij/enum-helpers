<?php

declare(strict_types=1);

namespace EnumHelpers\Traits;

trait Keys
{
    use FormatAsString;

    public static function keys(): array
    {
        return \array_column(self::cases(), 'name');
    }

    public static function keysAsString(string $separator = ', ', bool $beautify = false): string
    {
        return self::formatAsString(self::keys(), $separator, $beautify);
    }
}
