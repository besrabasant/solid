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
            if (is_a($shape, ThreeDimensionShape::class)) {
                $volumes[] = $shape->volume();
            } else {
                throw new Exception("not a 3D shape");
            }
        }

        return array_sum($volumes);
    }
}
