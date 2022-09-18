<?php

declare(strict_types=1);

namespace EnumHelpers\Enums;

trait Values
{
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

    protected static function formatAsString(array $values, string $separator, bool $beautify): string
    {
        if (! $beautify) {
            return \implode($separator, $values);
        }

        $handleString = \array_map(static function ($value) {
            $value = \str_replace('_', ' ', $value);
            $value = \strtolower($value);

            return \ucwords($value);
        }, $values);

        return \implode($separator, $handleString);
    }
}
