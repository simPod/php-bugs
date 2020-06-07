<?php

declare(strict_types=1);

namespace SimPod\Bugs;

use function iterable_to_array;

class Example
{
    public function get() : array
    {
        return iterable_to_array([]);
    }
}
