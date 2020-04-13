<?php

declare(strict_types=1);

/*
 * This file is part of kodekeep/conditions.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Conditions;

use Illuminate\Support\Str;

class Condition
{
    public static function contains(string $haystack, string $needle): bool
    {
        return Str::contains($haystack, $needle);
    }

    public static function doesNotContain(string $haystack, string $needle): bool
    {
        return ! Str::contains($haystack, $needle);
    }

    public static function is(string $a, string $b): bool
    {
        return $a === $b;
    }

    public static function isNot(string $a, string $b): bool
    {
        return $a !== $b;
    }

    public static function startsWith(string $haystack, string $needle): bool
    {
        return Str::startsWith($haystack, $needle);
    }

    public static function endsWith(string $haystack, string $needle): bool
    {
        return Str::endsWith($haystack, $needle);
    }

    public static function hasNoValue(string $value): bool
    {
        return empty($value);
    }

    public static function hasAnyValue(string $value): bool
    {
        return ! empty($value);
    }
}
