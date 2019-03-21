<?php

/**
 * Interface UrlInterface
 */
interface UrlInterface
{
    /**
     * Получение и разбор URL адреса на составляющие с присвоением переменных
     */
    public function __construct(string $url);

    /**
     * Возврат scheme
     *
     * @return string
     */
    public function getScheme():string;

    /**
     * Возврат хоста
     *
     * @return string
     */
    public function getHost():string;

    /**
     * Возврат значений
     *
     * @return array
     */
    public function getQueryParams():array;

    /**
     * Получение и возврат значения по ключу
     *
     * @param      $key
     * @param null $defaultValue
     *
     * @return string|null
     */
    public function getQueryParam($key, $default = null):?string;
}