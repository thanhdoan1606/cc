<?php
class Circle 
{
    public $color;
    public $radius;


    public function __construct($color,$radius)
    {
        $this->color = $color;
        $this->radius = $radius;
    }

    public function setcolor($color) 
    {
        $this->color = $color;
    }

    public function getcolor() 
    {
        return $this->color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius,2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2 ;
    }

    public function __toString()
    {
        return 'Circle color:' . $this->color .';'. 'Radius:' . $this->radius;
    }
}
