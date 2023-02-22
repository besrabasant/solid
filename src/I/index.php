<?php

namespace RogueOne\Solid\I;

require dirname(__DIR__) . '/../vendor/autoload.php';


$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];

$solidShapes = [
    new Sphere(2),
    new Cube(5),
    new Cube(6),
];

$areas = new AreaCalculator($shapes);
$volumes = new VolumeCalculator($solidShapes);

$areasFormatter = new SumFormatter($areas);
$volumesFormatter = new SumFormatter($volumes);

echo $areasFormatter->HTML() . PHP_EOL;
echo PHP_EOL;
echo $volumesFormatter->JSON() . PHP_EOL;
