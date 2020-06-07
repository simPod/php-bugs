<?php

declare(strict_types=1);

namespace SimPod\Bugs;

class Example
{
    /** @var \Ds\Map */
    private $map;

    public function __construct()
    {
        $this->map = new \Ds\Map();
    }
}
