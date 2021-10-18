<?php
require_once(dirname(dirname(__FILE__)) . "/interface/shape.php");

class Circle implements Shape
{
  private $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function getRadius() {
    return $this->radius;
  }

  public function calculateArea() {
    return pi() * pow($this->radius, 2);
  }
}