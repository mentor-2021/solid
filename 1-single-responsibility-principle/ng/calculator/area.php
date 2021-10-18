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
        if (is_a($shape, 'Square')) {
          array_push($area, $this->calculateSquare($shape));
        } elseif (is_a($shape, 'Circle')) {
          array_push($area, $this->calculateCircle($shape));
        }
      }

      return array_sum($area);
    }


    /////////// PANDOG /////////////////////
    public function output($data = 0)
    {
      $result = number_format($data, 2);
      return "result: {$result}";
    }

    private function calculateSquare($shape) {
      return pow($shape->getLength(), 2);
    }

    private function calculateCircle($shape) {
      return pi() * pow($shape->getRadius(), 2);
    }
}