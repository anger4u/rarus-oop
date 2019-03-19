<?php

require_once __DIR__ . '/Square.php';

class SquaresGenerator
{
    public static function generate($side, $number)
    {
        $result = [];

        if ($number) {
            for ($i = 0; $i < $number; $i++) {
                $result[] = new Square($side);
            }
        }

        return $result;
    }
}

$squares = SquaresGenerator::generate(3, 2);
// [new Square(3), new Square(3)];