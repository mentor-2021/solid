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
}