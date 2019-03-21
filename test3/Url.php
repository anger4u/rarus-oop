<?php

declare(strict_types=1);

require_once __DIR__ . '/UrlInterface.php';

/**
 * class Url - извлечение частей из HTTP адреса
 */

class Url implements UrlInterface
{
    private $scheme;
    private $host;
    private $query;

    /**
     * Получение и разбор URL адреса на составляющие с присвоением переменных
     */
    public function __construct(string $url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $parsedUrl = parse_url($url);

            /**
             * Получение scheme
             */
            $this -> scheme = $parsedUrl['scheme'];

            /**
             * Получение хоста
             */
            $this -> host = $parsedUrl['host'];

            /**
             * Получение значений
             */
            $queryValues = [];
            parse_str($parsedUrl['query'], $queryValues);
            $this -> query = $queryValues;
        } else {
            throw new InvalidArgumentException('Данные не прошли проверку');
        }

    }

    /**
     * Возврат scheme
     *
     * @return string
     */
    public function getScheme():string
    {
        return $this -> scheme;
    }

    /**
     * Возврат хоста
     *
     * @return string
     */
    public function getHost():string
    {
        return $this -> host;
    }

    /**
     * Возврат значений
     *
     * @return array
     */
    public function getQueryParams():array
    {
        return $this -> query;
    }

    /**
     * Получение и возврат значения по ключу
     *
     * @param      $key
     * @param null $defaultValue
     *
     * @return string|null
     */
    public function getQueryParam($key, $defaultValue = null):?string
    {
        $params = $this->getQueryParams();

        if (array_key_exists($key, $params)) {
            return $params[$key];
        }
        return $defaultValue;
    }
}