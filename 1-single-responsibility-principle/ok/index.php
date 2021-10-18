<?php
require_once('./common/circle.php');
require_once('./common/square.php');
require_once('./calculator/area.php');
require_once('./response.php');

$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
];

$calculator = new AreaCalculator();
$total = $calculator->calculate($shapes);


$response = new Response();
echo "\n\n\n";
echo "|---------------------------|";
echo "\n";
echo $response->text($total);
echo "\n";
echo json_encode($response->json($total));
echo "\n";
echo "|---------------------------|";
echo "\n\n\n";
exit;