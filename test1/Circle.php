<?php

declare(strict_types=1);

/**
 * class Circle - вычисление площади и длинны неизменяемой окружности
 * Включает в себя два метода соответственно
 *
 * Формула площади окружности: πr2
 * Формула длинны окружности: 2*πR
 */
class Circle
{
    private $radius;
    private $area;
    private $circumference;

    /**
     * Circle constructor.
     *
     * @param float $radius
     *
     * @throws Exception
     */
    function __construct(float $radius)
    {
        if ($radius > 0) {
            $this -> radius = $radius;
        } else {
            throw new InvalidArgumentException('Данные не прошли проверку');
        }
    }

    /**
     * Рассчёт площади окружности
     *
     * @return float
     */
    public function getArea():float
    {
        if(!isset($this -> area)) {
            $this -> area = M_PI * $this -> radius * $this -> radius;
        }

        return $this -> area;
    }

    /**
     * Рассчёт длинны окружности
     *
     * @return float
     */
    public function getCircumference():float
    {
        if(!isset($this -> circumference)) {
            $this -> circumference = 2 * M_PI * $this -> radius;
        }

        return $this -> circumference;
    }
}