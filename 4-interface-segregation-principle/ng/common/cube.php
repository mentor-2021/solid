<?php
require_once(dirname(dirname(__FILE__)) . "/interface/shape.php");

class Cube implements Shape
{
  private $length;

  public function __construct($length)
  {
    $this->length = $length;
  }

  public function calculateSurfaceArea() {
    return 6 * pow($this->length, 2);
  }

  public function calculateVolume() {
    return pow($this->length, 3);
  }

  public function calculateArea() {
    return 0;
  }
}