<?php
class Calculator{
    private $a = 0;
    private $b = 0;
    private $result = 0;

    /** 
     * @Start
     * @Description : This part used as Constructor and Destructor
    */
    public function __construct(int $a,int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add()
    {
        $this->result = $this->a + $this->b;
    }

    public function __destruct()
    {
        $this->a = $this->b = 0;
        echo '<br>Destructor works...!';
    }
    /**
     * @End
     */

    /** 
     * @Start
     * @Description : This part used as Getter and Setter Method with $this Keywords
    */
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
    /**
     * @End
     */
    public function getResult():int
    {
        return $this->result;
    }
}

$cal = new Calculator(3,4);
$cal->add();
echo $cal->getResult().'<br>';
echo $cal->getA();
