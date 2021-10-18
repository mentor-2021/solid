<?php
require_once('./common/circle.php');
require_once('./common/square.php');
require_once('./common/triangle.php');
require_once('./common/cube.php');
require_once('./calculator/area.php');
require_once('./calculator/volume.php');
require_once('./response.php');

$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
  new Triangle(4, 5),
];

$calculator = new AreaCalculator();
$totalArea = $calculator->calculate($shapes);

$shape3ds = [
  new Cube(2),
  new Cube(4),
];

$calculator = new VolumeCalculator();
$totalVolume = $calculator->calculate($shape3ds);


$response = new Response();
echo "\n\n\n";
echo "|---------------------------|";
echo "\n";
echo "area: {$response->text($totalArea)}";
echo "\n";
echo "volume: {$response->text($totalVolume)}";
echo "\n";
echo "|---------------------------|";
echo "\n\n\n";
exit;