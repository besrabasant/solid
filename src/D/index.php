<?php

namespace RogueOne\Solid\D;

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

$jsonPrinter = new JsonPrinter();
$htmlPrinter = new HTMLPrinter();
$xmlPrinter = new XMLPrinter();

$areasFormatter = new SumFormatter($areas,  $xmlPrinter);
$volumesFormatter = new SumFormatter($volumes, $xmlPrinter);

echo $areasFormatter->format() . PHP_EOL;
echo PHP_EOL;
echo $volumesFormatter->format() . PHP_EOL;
