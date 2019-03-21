<?php

declare(strict_types=1);

/**
 * Class Square - описание квадратов
 */
class Square
{
    private $side;

    /**
     * Square constructor.
     *
     * @param float $side
     */
    public function __construct(float $side)
    {
        if($side > 0) {
            $this->side = $side;
        } else {
            throw new InvalidArgumentException('Данные не прошли проверку');
        }

    }

    /**
     * Возврат значение стороны квадрата
     *
     * @return float
     */
    public function getSide():float
    {
        return $this->side;
    }
}