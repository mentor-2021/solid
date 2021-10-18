<?php
require_once(dirname(dirname(__FILE__)) . "/interface/shape.php");

class Square implements Shape
{
  private $length;

  public function __construct($length)
  {
    $this->length = $length;
  }

  public function getLength() {
    return $this->length;
  }

  public function calculateArea() {
    return pow($this->length, 2);
  }
}