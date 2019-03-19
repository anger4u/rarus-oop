<?php

class Circle
{
    private $R;

    function __construct($R)
    {
        $this->R = $R;
    }

    public function getArea()
    {
        return (M_PI * $this->R * $this->R);
    }

    public function getCircumference()
    {
        return (2 * M_PI * $this->R);
    }
}

$circle = new Circle(10);
$circle->getArea();
$circle->getCircumference();