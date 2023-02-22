<?php

namespace RogueOne\Solid\I;

use Exception;
use RogueOne\Solid\D\Shape;

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = [])
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            if (is_a($shape, Shape::class)) {
                $volumes[] = $shape->volume();
            } else {
                throw new Exception("not a 3D shape");
            }
        }

        return array_sum($volumes);
    }
}
