<?php
class Square
{
  private $length;

  public function __construct($length)
  {
    $this->length = $length;
  }

  public function getLength() {
    return $this->length;
  }
}