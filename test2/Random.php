<?php

require_once __DIR__ . '/RandomInterface.php';

class Random implements RandomInterface
{
    private $seed;
    private $nextNum;
    const a = 10;
    const b = 8;
    const c = 16;

    public function __construct($seed)
    {
        $this->nextNum = $this->seed = $seed;
    }

    public function getNext()
    {
        $this->nextNum = (self::a * $this->nextNum + self::b) % self::c;
        return $this->nextNum;
    }

    public function reset()
    {
        $this->nextNum = $this->seed;
    }
}

$seq = new Random(100);
$result1 = $seq->getNext();
$result2 = $seq->getNext();

$result1 != $result2; // => true

$seq->reset();

$result21 = $seq->getNext();
$result22 = $seq->getNext();

$result1 = $result21; // => true
$result2 = $result22; // => true