<?php

require_once __DIR__ . '/UrlInterface.php';

class Url implements UrlInterface
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getScheme()
    {
        return parse_url($this->url)['scheme'];
    }

    public function getHost()
    {
        return parse_url($this->url)['host'];
    }

    public function getQueryParams()
    {
        $query = parse_url($this->url);
        $result = [];

        parse_str($query['query'], $result);

        return $result;
    }

    public function getQueryParam($key, $defaultValue = null)
    {
        $params = $this->getQueryParams();

        if (array_key_exists($key, $params)) {
            return $params[$key];
        }
        return $defaultValue;
    }
}

$url = new Url('http://yandex.ru?key=value&key2=value2');
$url->getScheme(); // http
$url->getHost(); // yandex.ru
$url->getQueryParams();
// [
//     'key' => 'value',
//     'key2' => 'value2'
// ];
$url->getQueryParam('key'); // value
// второй параметр - значение по умолчанию
$url->getQueryParam('key2', 'lala'); // value2
$url->getQueryParam('new', 'ehu'); // ehu