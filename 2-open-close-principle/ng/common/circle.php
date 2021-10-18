<?php
class Circle
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }
}