<?php
require_once(dirname(dirname(__FILE__)) . "/interface/shape.php");

class Triangle implements Shape
{
  private $height;
  private $length;

  public function __construct($length, $height)
  {
    $this->length = $length;
    $this->height = $height;
  }

  public function getLength() {
    return $this->length;
  }

  public function getHeight() {
    return $this->height;
  }

  public function calculateArea() {
    return ($this->height * $this->length) / 2;
  }
}