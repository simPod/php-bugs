<?php

declare(strict_types=1);

namespace SimPod\JetbrainsBugs;

use SimPod\JetbrainsBugs\Inner\A;
use SimPod\JetbrainsBugs\Inner\B;

class InvalidUnusedImports
{
    /**
     * @return (A|B)[]
     */
    public function wrongReturn()
    {
//        return [new A(), new B()];
    }
}
