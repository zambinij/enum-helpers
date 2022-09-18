<?php

declare(strict_types=1);

namespace EnumHelpers\Traits;

trait FormatAsString
{
    public static function formatAsString(array $values, string $separator, bool $beautify = false): string
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
