<?php
require_once('./common/circle.php');
require_once('./common/square.php');
require_once('./calculator/area.php');

$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
];

$calculator = new AreaCalculator();
$total = $calculator->calculate($shapes);

echo "\n\n\n";
echo "|---------------------------|";
echo "\n";
echo $calculator->output($total);
echo "\n";
echo "|---------------------------|";
echo "\n\n\n";
exit;