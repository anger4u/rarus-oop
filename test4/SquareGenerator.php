<?php

declare(strict_types=1);

require_once __DIR__ . '/Square.php';

/**
 * Class SquaresGenerator
 *
 * Класс реализован со статическим методом generate, принимающим два параметра: сторону и количество экземпляров
 * квадрата, которые нужно создать. Функция возвращает массив из квадратов
 */
class SquaresGenerator
{
    public static function generate(float $side, int $number):array
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