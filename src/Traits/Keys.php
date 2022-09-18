<?php

declare(strict_types=1);

namespace EnumHelpers\Traits;

trait Keys
{
    use FormatAsString;

    public static function keys(bool $asString = false, string $separator = ', ', bool $beautify = false): array|string
    {
        $cases = self::cases();

        $keys = \array_column($cases, 'name');

        if ($asString) {
            return self::formatAsString($keys, $separator, $beautify);
        }

        return $keys;
    }
}
