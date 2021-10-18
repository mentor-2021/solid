<?php
class Triangle
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
}