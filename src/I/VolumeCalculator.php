<?php

namespace RogueOne\Solid\I;

use Exception;

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = [])
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            $volumes[] = $shape->volume();
        }

        return array_sum($volumes);
    }
}
