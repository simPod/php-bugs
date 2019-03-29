<?php

class RandomClass
{
    /** @var mixed[] */
    private $property;

    public function __construct()
    {
        $this->property = \Safe\array_combine([], []);
    }
}
