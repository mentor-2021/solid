<?php
require_once(dirname(dirname(__FILE__)) . "/interface/shape.php");

class Cube extends Square implements Shape
{
  private $length;

  public function __construct($length)
  {
    $this->length = $length;
  }


  public function calculateArea() {
    return 0;
  }

  // public function calculateLateralSurfaceArea() {
  //   return 4 * pow($this->length, 2);
  // }

  // public function calculateTotalSurfaceArea() {
  //   return 6 * pow($this->length, 2);
  // }
}