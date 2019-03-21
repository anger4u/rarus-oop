<?php

/**
 * Interface RandomInterface
 */
interface RandomInterface
{
    /**
     * RandomInterface constructor.
     *
     * @param int $seed
     */
    public function __construct(int $seed);

    /**
     * Возврат нового случайного числа
     *
     * @return int
     */
    public function getNext():int;

    /**
     * Сброс генератора на начальное значение
     *
     * @return void
     */
    public function reset():void;
}