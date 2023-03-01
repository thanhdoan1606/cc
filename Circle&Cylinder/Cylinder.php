<?php
include_once 'Circle.php';
class Cylinder extends Circle
{
    public $height;

    public function __construct($color,$height,$radius)
    {
        parent::__construct($color,$radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return (float)parent::calculateArea()*2 + (float)parent::calculatePerimeter()*(float)$this->height;
    }

    public function calculateVolume()
    {
        return (float)parent::calculateArea()*(float)$this->height;
    }

    public function __toString()
    {
        return 'Cylinder color :' . $this->color . ';' .'Radius:' . $this->radius . ';' . 'height:' . $this->height ;
    }
}
