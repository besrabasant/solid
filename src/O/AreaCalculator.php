<?php

namespace RogueOne\Solid\O;

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
            if (is_a($shape, Square::class)) {
                $area[] = pow($shape->length, 2);
            } elseif (is_a($shape, Circle::class)) {
                $area[] = pi() * pow($shape->radius, 2);
            } elseif (is_a($shape, Rectangle::class)) {
                $area[] = $shape->width * $shape->height;
            }
        }

        return array_sum($area);
    }
}
