<?php

declare(strict_types=1);

namespace EnumHelpers\Traits;

trait Values
{
    use FormatAsString;

    public static function values(): array
    {
        $cases = self::cases();

        return isset($cases[0]) && $cases[0] instanceof \BackedEnum
            ? \array_column($cases, 'value')
            : \array_column($cases, 'name');
    }

    public static function valuesAsString(string $separator = ', ', bool $beautify = false): string
    {
        return self::formatAsString(self::values(), $separator, $beautify);
    }
}
