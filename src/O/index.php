<?php

namespace RogueOne\Solid\O;

require dirname(__DIR__) . '/../vendor/autoload.php';


$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];

$areas = new AreaCalculator($shapes);

$output = new SumFormatter($areas);

echo $output->JSON() . PHP_EOL;
echo PHP_EOL;
echo $output->HTML() . PHP_EOL;
