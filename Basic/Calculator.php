<?php
class Calculator{
    private $a = 0;
    private $b = 0;
    private $result = 0;

    public function setA(int $a)
    {
        $this->a = $a;
    }

    public function getA():int
    {
        return $this->a;
    }

    public function setB(int $b)
    {
        $this->b = $b;
    }

    public function getB():int
    {
        return $this->b;
    }

    public function add()
    {
        $this->result = $this->getA() + $this->getB();
    }

    public function getResult():int
    {
        return $this->result;
    }
}

$cal = new Calculator();
$cal->setA(2);
$cal->setB(3);
$cal->add();
echo $cal->getResult();