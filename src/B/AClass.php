<?php

declare(strict_types=1);

namespace SimPod\JetbrainsBugs\B;

use SimPod\JetbrainsBugs\A\UnitConverter;

final class AClass
{
    /** @return mixed[] */
    public function create(): void
    {
        $bits = UnitConverter::bytes→bits(0);
        $bits = UnitConverter::bytesTobits(0);
    }
}
