<?php
require_once(dirname(dirname(__FILE__)) . "/interface/shape3d.php");

class Cube implements Shape3D
{
  private $length;

  public function __construct($length)
  {
    $this->length = $length;
  }

  public function calculateLateralSurfaceArea() {
    return 4 * pow($this->length, 2);
  }

  public function calculateTotalSurfaceArea() {
    return 6 * pow($this->length, 2);
  }

  public function calculateVolume() {
    return pow($this->length, 3);
  }

  // public function calculateArea() {
  //   return 0;
  // }
}