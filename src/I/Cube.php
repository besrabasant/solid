<?php

namespace RogueOne\Solid\I;

class Cube implements Shape
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return 6 * pow($this->length, 2);
    }

    public function volume()
    {
        return pow($this->length, 3);
    }
}
