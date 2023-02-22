<?php

namespace RogueOne\Solid\I;

use Exception;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            if (is_a($shape, Shape::class)) {
                $area[] = $shape->area();
            } else {
                throw new Exception("not a shape");
            }
        }

        return array_sum($area);
    }
}
