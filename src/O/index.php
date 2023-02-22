<?php

namespace RogueOne\Solid\O;

require dirname(__DIR__) . '/../vendor/autoload.php';


$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
    // new Rectangle(6, 8),
];

$areas = new AreaCalculator($shapes);

echo $areas->output();
