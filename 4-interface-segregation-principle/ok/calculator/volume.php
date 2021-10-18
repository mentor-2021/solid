<?php
class VolumeCalculator
{
  public function calculate($shape3ds = [])
  {
    $area = [];
    foreach ($shape3ds as $shape) {
      array_push($area, $shape->calculateVolume());
    }

    return array_sum($area);
  }
} 