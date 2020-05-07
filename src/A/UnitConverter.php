<?php

declare(strict_types=1);

namespace SimPod\JetbrainsBugs\A;

// phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps

final class UnitConverter
{
    public static function bytes→bits(int $bytes): int
    {
        return $bytes->multipliedBy(8);
    }
    public static function bytesTobits(int $bytes): int
    {
        return $bytes->multipliedBy(8);
    }
}
