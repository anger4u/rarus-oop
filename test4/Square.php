<?php

class Square
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getSide()
    {
        return $this->side;
    }
}

$square = new Square(10);
$square->getSide(); // 10