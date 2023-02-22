<?php

namespace RogueOne\Solid\S;

require dirname(__DIR__) . '/../vendor/autoload.php';


$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];

$areas = new AreaCalculator($shapes);

echo $areas->output();
