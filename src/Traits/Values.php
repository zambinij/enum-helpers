<?php

declare(strict_types=1);

namespace EnumHelpers\Traits;

trait Values
{
    use FormatAsString;

    public static function values(bool $asString = false, string $separator = ', ', bool $beautify = false): array|string
    {
        $cases = self::cases();

        $values = isset($cases[0]) && $cases[0] instanceof \BackedEnum
            ? \array_column($cases, 'value')
            : \array_column($cases, 'name');

        if ($asString) {
            return self::formatAsString($values, $separator, $beautify);
        }

        return $values;
    }
}
