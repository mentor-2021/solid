<?php
class AreaCalculator
{
  public function __construct()
  {
  }

  public function calculate($shapes = [])
  {
    $area = [];
    foreach ($shapes as $shape) {
      array_push($area, $shape->calculateArea());
    }

    return array_sum($area);
  }

  // public function calculate($shapes = [])
  // {
  //   $area = [];
  //   foreach ($shapes as $shape) {
  //     if (is_a($shape, 'Square')) {
  //       array_push($area, $this->calculateSquare($shape));
  //     } elseif (is_a($shape, 'Circle')) {
  //       array_push($area, $this->calculateCircle($shape));
  //     } elseif (is_a($shape, 'Triangle')) {
  //       array_push($area, $this->calculateTriangle($shape));
  //     }
  //   }

  //   return array_sum($area);
  // }

  // private function calculateSquare($shape) {
  //   return pow($shape->getLength(), 2);
  // }

  // private function calculateCircle($shape) {
  //   return pi() * pow($shape->getRadius(), 2);
  // }

  // private function calculateTriangle($shape) {
  //   return ($shape->getLength() * $shape->getHeight()) / 2;
  // }
}