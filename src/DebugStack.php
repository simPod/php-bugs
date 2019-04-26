<?php

namespace SimPod\JetbrainsBugs;

use Doctrine\DBAL\Logging;

final class DebugStack
{
    public function __construct()
    {
        $x = \Doctrine\DBAL\Logging\DebugStack::class;
    }
}
